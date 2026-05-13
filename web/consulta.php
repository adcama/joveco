<?php
$servidor = "localhost";
$usuari = "jovec_adri";
$contrasenya = "";
$base_dades = "jovec_demo";

$connexio = new mysqli($servidor, $usuari, $contrasenya, $base_dades);

if ($connexio->connect_error) {
    die("Error de connexió amb la base de dades.");
}

if (isset($_POST['producte'])) {

    $id_producte = $_POST['producte'];

    $sql = "SELECT nom, origen, categoria, preu, descripcio 
            FROM productes_demo 
            WHERE id = $id_producte";

    $resultat = $connexio->query($sql);

    if ($resultat->num_rows > 0) {

        $fila = $resultat->fetch_assoc();

        echo "<h2>" . $fila['nom'] . "</h2>";
        echo "<p><strong>Origen:</strong> " . $fila['origen'] . "</p>";
        echo "<p><strong>Categoria:</strong> " . $fila['categoria'] . "</p>";
        echo "<p><strong>Preu:</strong> " . $fila['preu'] . " €</p>";
        echo "<p><strong>Descripció:</strong> " . $fila['descripcio'] . "</p>";
		
		echo "<br><br>";
		echo "<a href='index.html'>Tornar a la pàgina principal</a>";

    } else {
        echo "<p>No s'ha trobat cap producte.</p>";
    }

} else {
    echo "<p>No s'ha seleccionat cap producte.</p>";
}

$connexio->close();
?>