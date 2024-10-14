<?php

def es_palindromo(cadena):
    cadena = cadena.lower().replace(" ", "")
    
    
    return cadena == cadena[::-1]

cadena = "Anita lava la tina"
if es_palindromo(cadena):
    print(f'"{cadena}" es un palíndromo.')
else:
    print(f'"{cadena}" no es un palíndromo.')
?>