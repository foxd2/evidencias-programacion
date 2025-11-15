class Arreglo:
    def __init__(self, elementos):
        self.elementos = elementos

    def maximo(self):
        return max(self.elementos)

arreglo = Arreglo([3, 1, 4, 1, 5, 9, 2])
print("El máximo es:", arreglo.maximo())
