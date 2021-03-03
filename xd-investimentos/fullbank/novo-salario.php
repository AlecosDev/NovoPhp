<?php

    $nomeFuncionario = $_GET["nomeFuncionario"];
    $salarioAtualFuncionario = $_GET["salarioAtualFuncionario"];

    if($salarioAtualFuncionario > 5000 && $salarioAtualFuncionario>0){
        $aumento = 0.1;
    }else if ($salarioAtualFuncionario > 0 && $salarioAtualFuncionario <= 5000){
        $aumento = 0.2;
    }

    $novoSalario = $salarioAtualFuncionario  + ($salarioAtualFuncionario * $aumento);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Salario Fullbank</title>
</head>
<body>
    <h1>
        O(a) funcionário(a) <?= $nomeFuncionario ?> passará a receber R$ <?= number_format($novoSalario, 2, ',', '.')?>;
    </h1>
</body>
</html>