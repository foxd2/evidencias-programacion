def contar_ocurrencias(arreglo, valor):
    contador = 0
    for num in arreglo:
        if num == valor:
            contador += 1
    return contador

arreglo = [1, 2, 3, 2, 4, 2, 5]
valor = 2
print(f"El valor {valor} aparece {contar_ocurrencias(arreglo, valor)} veces")
