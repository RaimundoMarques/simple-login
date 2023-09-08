<!DOCTYPE html>
<html lang="pt=BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <title>Site Produção</title>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Por favor, entre com seu login e senha!</p>

                                <form action="./model/validaUser.php" method="get">

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="user" name="user" class="form-control form-control-lg" />
                                        <label class="form-label" for="user">Usuário</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="passwd" name="passwd" class="form-control form-control-lg" />
                                        <label class="form-label" for="passwd">Senha</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" onclick="validarUser()">Entrar</button>
                                    
                                </form>

                            </div>
                            <p id="resultado"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p id="resultado"></p>
    </section>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/validarUser.js"></script>
</body>

</html>