def maximo_arreglo(arreglo):
    maximo = arreglo[0]
    for num in arreglo:
        if num > maximo:
            maximo = num
    return maximo

arreglo = [3, 1, 4, 1, 5, 9, 2]
print("El máximo es:", maximo_arreglo(arreglo))
