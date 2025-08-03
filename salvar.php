<?php
$dados = json_decode(file_get_contents("php://input"), true);

if ($dados) {
    $linha = "[" . date("Y-m-d H:i:s") . "] ";
    $linha .= "IP: " . $dados['ip'] . " | ";
    $linha .= "País: " . $dados['pais'] . " | ";
    $linha .= "Cidade: " . $dados['cidade'] . " | ";
    $linha .= "Idioma: " . $dados['idioma'] . " | ";
    $linha .= "Navegador: " . $dados['navegador'] . "\n";

    file_put_contents("Usuarios.txt", $linha, FILE_APPEND);
}
?>