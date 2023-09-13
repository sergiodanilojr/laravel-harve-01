<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sobrenome</title>
</head>
<body>
    <h1>Meu sobre nome é {{ $lastname }}</h1>
    @if($age)
        Minha idade é {{ $age }} anos
    @endif
</body>
</html>