<?php
$arquivo = fopen("fornecedores.txt", "w");

$data= [
    [
        "nome" => "Constance Alford",
        "email" => "lacinia.sed@yahoo.com",
        "pais" => "United States"
    ],
    [
        "nome" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "pais" => "Canada"
    ],
    [
        "nome" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "pais" => "Philippines"
    ],
    [
        "nome" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "pais" => "Norway"
    ],
    [
        "nome" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "pais" => "Vietnam"
    ]
];

for ($i = 0; $i < count($data); $i++){
    fwrite($arquivo, $data[$i]["nome"]. "\n");
    fwrite($arquivo, $data[$i]["email"]. "\n");
    fwrite($arquivo, $data[$i]["pais"]. "\n");
}

fclose($arquivo);
?>