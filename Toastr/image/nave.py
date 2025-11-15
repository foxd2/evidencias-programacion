from tkinter import Canvas, PhotoImage

class Nave:
    def _init_(self, canvas: Canvas, x: int, y: int):
        self.imagen = PhotoImage(file="nave.bmp")
        self.nave_id = canvas.create_image(x, y, anchor="center", image=self.imagen)