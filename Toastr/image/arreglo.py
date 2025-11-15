def ejercicio1():
    arreglo = []
    print("Ingrese 10 números enteros entre 0 y 20:")

    while len(arreglo) < 10:
        try:
            numero = int(input(f"Ingrese el número {len(arreglo) + 1}: "))
            if 0 <= numero <= 20:
                arreglo.append(numero)
            else:
                print("El número debe estar entre 0 y 20.")
        except ValueError:
            print("Por favor, ingrese un número entero válido.")
    
    print("\nArreglo final:")
    print(arreglo)


ejercicio1()