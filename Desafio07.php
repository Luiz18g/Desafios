<?php
$arquivo = fopen("fornecedores2.txt", "w");

$data= [
    [
        "nome" => "Constance Alford",        
        "email" => "lacinia.sed@yahoo.com",
        "pais" => "United States\n"
    ],
    [
        "nome" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "pais" => "Canada\n"
    ],
    [
        "nome" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "pais" => "Philippines\n"
    ],
    [
        "nome" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "pais" => "Norway\n"
    ],
    [
        "nome" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "pais" => "Vietnam\n"
    ]
];

for ($i = 0; $i < count($data); $i++){
    fwrite($arquivo, $data[$i]["nome"]. "\n");
    fwrite($arquivo, $data[$i]["email"]. "\n");
    fwrite($arquivo, $data[$i]["pais"]. "\n");
}

fclose($arquivo);
?>