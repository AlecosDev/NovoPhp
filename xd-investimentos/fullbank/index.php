<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../styles-global.css"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullbank Salarios</title>
</head>
<body>
   <form method="GET" action="novo-salario.php">
   <h1>Aumento salarial</h1>
    
    <div class="input-group">
      <label for="nomeFuncionario">Nome do funcionário</label>
      <input type="text" name="nomeFuncionario" id="nomeFuncionario" required/>
    </div>

    <div class="input-group">
      <label for="salarioAtualFuncionario">Salario atual</label>
      <input type="text" name="salarioAtualFuncionario" id="salarioAtualFuncionario" required/>
    </div>

    <button>Calcular novo salário</button>

   </form> 
</body>
</html>