tupla1 = (100, "Hola", [1,2,3,4,5], 100, -50, 100, "Hi", 50, 100, True, 100, 50, -25, 100, -30)

ultimo_elemento = tupla1[-1]
print(f"Último elemento de la tupla: {ultimo_elemento}")

numero_elementos = len(tupla1)
print(f"Número de elementos en la tupla: {numero_elementos}")

try:
    posicion_123 = tupla1.index(123)
except ValueError:
    posicion_123 = "No encontrado"
print(f"Posición del número 123 en la tupla: {posicion_123}")

primeros_tres = tupla1[:3]
print(f"Primeros tres elementos de la tupla: {primeros_tres}")

elemento_indice_4 = tupla1[4]
print(f"Elemento en la posición 4 de la tupla: {elemento_indice_4}")

numero_veces_100 = tupla1.count(100)
print(f"Número de veces que aparece el número 100 en la tupla: {numero_veces_100}")