# main.py
import sys
import pygame
from parametros import ParametrosVentana
from nave import Nave

def main():
    # Inicializar Pygame
    if not pygame.get_init():
        pygame.init()

    # Configurar la ventana
    pantalla = pygame.display.set_mode((ParametrosVentana.ANCHO, ParametrosVentana.ALTO))
    pygame.display.set_caption(ParametrosVentana.TITULO)

    # Crear una instancia de la nave con manejo de errores
    try:
        nave = Nave("nave.bmp")
    except FileNotFoundError:
        print("Error: La imagen 'nave.bmp' no se encontró.")
        pygame.quit()
        sys.exit()

    # Ciclo principal del juego
    corriendo = True
    while corriendo:
        # Manejo de eventos
        for evento in pygame.event.get():
            if evento.type == pygame.QUIT:
                corriendo = False

        # Rellenar el fondo con el color especificado
        pantalla.fill(ParametrosVentana.COLOR_FONDO)

        # Dibujar la nave en la pantalla
        nave.dibujar(pantalla)

        # Actualizar la pantalla
        pygame.display.flip()

    # Salir de Pygame
    pygame.quit()

if __name__ == "__main__":
    main()
