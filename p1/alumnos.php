<?php
    $alumnos = simplexml_load_file("alumnos.xml");
    $total_alumnos = count($alumnos->alumno);

    echo "<table border='1' cellpadding='10'>\n";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>\n";

    for($x = 0; $x < $total_alumnos; $x++){
        echo "<tr><td>".$alumnos->alumno[$x]->nombre."</td><td>".$alumnos->alumno[$x]->nota."</td></tr>\n";
    }
    echo "</table>\n";
?>