class Arreglo:
    def __init__(self, elementos):
        self.elementos = elementos

    def contar_ocurrencias(self, valor):
        return self.elementos.count(valor)

arreglo = Arreglo([1, 2, 3, 2, 4, 2, 5])
valor = 2
print(f"El valor {valor} aparece {arreglo.contar_ocurrencias(valor)} veces")
