class Arreglo:
    def __init__(self, elementos):
        self.elementos = elementos

    def sumar(self):
        return sum(self.elementos)

arreglo = Arreglo([1, 2, 3, 4, 5])
print("La suma es:", arreglo.sumar())
