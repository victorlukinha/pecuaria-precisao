<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Animal</title>
</head>
<body>

<form action="" method="post">


    <label for="numBrinco">Numéro do Brinco do Animal</label>
    <input type="number" name="numBrinco" id="numBrinco">

    <label for="peso">Peso do Animal</label>
    <input type="number" name="peso" id="peso">

    <label for="custo">Custo do Animal</label>
    <input type="number" name="custo" id="custo">

    <input type="hidden" name="dono" value="<?php user.id ?>">

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">

</form>


</body>
</html>
