class Arreglo:
    def __init__(self, elementos):
        self.elementos = elementos

    def invertir(self):
        return self.elementos[::-1]

arreglo = Arreglo([1, 2, 3, 4, 5])
print("El arreglo invertido es:", arreglo.invertir())
