<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcular</title>
</head>
<body>
    <form method="get" action="01calcular.php">
        <label for="num">Numero: <input type="number" name="num" id="num"></label>
        <select name="op">
            <option value="dobro">Dobro</option>
            <option value="cubo">Cubo</option>
            <option value="raiz">Raiz</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>