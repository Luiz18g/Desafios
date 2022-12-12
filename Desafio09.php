<?php
$arquivo = fopen("fornecedores3.txt", "w");

$data= [
    [
        "nome" => "Alfred",
        "idade" => "17\n"
    ],
    [
        "nome" => "Bianca",
        "idade" => "18\n"
    ],
    [
        "nome" => "Cristian",
        "idade" => "19\n"
    ],
    [
        "nome" => "Duda",
        "idade" => "18"
    ]
];

for ($i = 0; $i < count($data); $i++){
    fwrite($arquivo, $data[$i]["nome"]. "\n");
    fwrite($arquivo, $data[$i]["idade"] . "\n");
}

fclose($arquivo);
?>