import tkinter as tk
from parametros import Parametros
from nave import Nave

def rgb_a_hexadecimal(rgb):
    return "#%02x%02x%02x" % rgb

ventana = tk.Tk()
ventana.title(Parametros.TITULO_VENTANA)
ventana.geometry(f"{Parametros.ANCHO_VENTANA}x{Parametros.ALTO_VENTANA}")
ventana.config(bg=rgb_a_hexadecimal(Parametros.COLOR_FONDO))

lienzo = tk.Canvas(ventana, width=Parametros.ANCHO_VENTANA, height=Parametros.ALTO_VENTANA, bg=rgb_a_hexadecimal(Parametros.COLOR_FONDO))
lienzo.pack()

pos_x = Parametros.ANCHO_VENTANA // 2
pos_y = Parametros.ALTO_VENTANA - 50  
nave = Nave(lienzo, pos_x, pos_y)

ventana.mainloop()