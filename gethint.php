<?php
// Array de sugerencias
$suggestions = array(
    "Ana",
    "María",
    "Pedro",
    "Luis",
    "Laura",
    "Alice",
    "Bob",
    "Charlie",
    "David",
    "Emma",
    "Frank",
    "Grace",
    "Henry",
    "Ivy",
    "Jack",
    "Katherine",
    "Liam",
    "Mia",
    "Nathan",
    "Olivia",
    "Peter",
    "Quincy",
    "Rachel",
    "Samuel",
    "Taylor",
    "Ursula",
    "Victor",
    "Wendy",
    "Xander",
    "Yasmine",
    "Zachary",
    "Alejandro",
    "Beatriz",
    "Carlos",
    "Diana",
    "Eduardo",
    "Fabiola",
    "Gabriel",
    "Hilda",
    "Isabel",
    "Juan",
    "Karla",
    "Luis",
    "María",
    "Nicolás",
    "Olga",
    "Pablo",
    "Quintín",
    "Rosa",
    "Sergio",
    "Tamara",
    "Uriel",
    "Valeria",
    "Walter",
    "Ximena",
    "Yolanda",
    "Zacarías"
);

// Obtén el parámetro 'q' de la consulta GET
$query = $_GET["q"];

// Filtra las sugerencias basadas en la consulta
$hint = "";
if ($query !== "") {
    $query = strtolower($query);
    $len = strlen($query);
    foreach ($suggestions as $name) {
        if (stristr($query, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Imprime las sugerencias o un mensaje si no hay sugerencias
echo $hint === "" ? "No hay sugerencias" : $hint;
?>