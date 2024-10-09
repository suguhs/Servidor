<?php


/*
 Crea un array multidimensional para poder guardar los componentes de dos
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada.
*/


$gente = [
    [
        'Familia' => 'Los Simpson',
        'Padre' => 'Homer',
        'Madre' => 'Marge',
        'Hijos' => ['Bart', 'Lisa', 'Maggie']
    ],
    [
        'Familia' => 'Los Griffin',
        'Padre' => 'Peter',
        'Madre' => 'Lois',
        'Hijos' => ['Chris', 'Meg', 'Stewie']
    ]
];

echo "<html>\n<body>\n<ul>\n";

foreach ($gente as $familia) {
    echo "<li>" . $familia['Familia'] . "</li>\n<ul>\n";
    echo "<li>Padre: " . $familia['Padre'] . "</li>\n";
    echo "<li>Madre: " . $familia['Madre'] . "</li>\n";
    echo "<li>Hijos: " . implode(', ', $familia['Hijos']) . "</li>\n";
    echo "</ul>\n";
}

echo "</ul>\n</body>\n</html>";
?>
