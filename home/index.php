<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/indexhome.css">
    <title>Document</title>
</head>

<body>

    <h1 id="h1-home">HOME</h1>
    <h2>Seja Bem-vindo <?php echo $user = base64_decode($_GET['user']); ?></h2>

    <button class="btn btn-secondary" id="btn-return">Voltar</button>

    <script src="../js/indexHome.js"></script>
</body>
</html>