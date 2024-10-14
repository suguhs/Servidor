<?php
/*
Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite.
*/


def filtrar_menores(array, limite):
 
    return [numero for numero in array if numero < limite]


numeros = [5, 10, 15, 20, 25]
limite = 15
resultado = filtrar_menores(numeros, limite)
print(resultado)

?>