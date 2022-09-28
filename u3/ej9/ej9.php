
 <link rel="stylesheet" href="style9.css">

<?php

/**
 * 8. Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le
 * corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color
 * seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
 * @author María Cervilla Alcalde
 */


echo "<h1>Paleta de colores</h1>";
echo '<a href="https://github.com/mriadev/dwes-ud2/ej9/blob/main/ej9.php" target="_blank">GitHub Ejercicio 9</a><br/>';
echo "<table>";

for ($r=0; $r < 255; $r+=253) { 
   for ($g=0; $g < 255; $g+=12) { 
    echo "<tr>";
    for ($b=0; $b < 255; $b+=10) { 
        echo "<td id = \"rgb\"style='background-color: rgb($r, $g, $b)'>#$r$g$b</td>";
    }
    echo "</tr>";
   }
}

echo "</table>";


?>
