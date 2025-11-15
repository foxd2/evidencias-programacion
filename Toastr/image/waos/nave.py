# nave.py
import pygame

class Nave:
    def __init__(self, imagen_path):
        # Cargar la imagen de la nave
        self.imagen = pygame.image.load(imagen_path)
        self.rect = self.imagen.get_rect()

    def dibujar(self, pantalla):
        # Establecer la posición de la nave en la parte central inferior de la ventana
        self.rect.centerx = pantalla.get_width() // 2
        self.rect.bottom = pantalla.get_height()
        # Dibujar la nave en la pantalla
        pantalla.blit(self.imagen, self.rect)
