<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac Lojas</title>
    <link rel="stylesheet" href="./libs/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./src/css/styles.css">
</head>

<body>
    <header class="bg-light">
        <div class="container">
            <div class="d-flex flex-wrap">
                <nav class="navbar navbar-expand-lg w-100">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="?pg=home"><img src="./src/assets/img/logo.png" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav col-gap-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="?pg=home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?pg=quem-somos">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?pg=produtos">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?pg=localizacao">Localização</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?pg=contato">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <?php
        $pg = null;
        if (isset($_GET['pg']) && !empty($_GET['pg'])) {
            $pg = addslashes($_GET['pg']);
        }
        switch ($pg) {
            case 'home':
                include './src/html/home.html';
                break;
            case 'quem-somos':
                include './src/html/quem-somos.html';
                break;
            case 'produtos':
                include './src/html/produtos.html';
                break;
            case 'localizacao':
                include './src/html/localizacao.html';
                break;
            case 'contato':
                include './src/html/contato.html';
                break;
            case 'descartaveis':
                include './src/html/produtos/descartaveis.html';
                break;
            case 'higiene-pessoal':
                include './src/html/produtos/higiene-pessoal.html';
                break;
            case 'lavanderia':
                include './src/html/produtos/lavanderia.html';
                break;
            case 'escolar':
                include './src/html/produtos/escolar.html';
                break;
            case 'escritorio':
                include './src/html/produtos/escritorio.html';
                break;
            case 'papeis':
                include './src/html/produtos/papeis.html';
                break;
            case 'saco-lixo':
                include './src/html/produtos/saco-lixo.html';
                break;
            case 'utilidades':
                include './src/html/produtos/utilidades.html';
                break;
            default:
                include './src/html/home.html';
                break;
        }
        ?>
    </main>
    <footer class="flex-column d-flex row-gap-3">
        <div class="bg-light">
            <div class="container">
                <div class="d-flex flex-wrap">
                    <div class="col-12 d-flex justify-content-between flex-wrap">
                        <img src="./src/assets/img/rodape/marca-1.png" alt="marca-1">
                        <img src="./src/assets/img/rodape/marca-1.png" alt="marca-1">
                        <img src="./src/assets/img/rodape/marca-1.png" alt="marca-1">
                        <img src="./src/assets/img/rodape/marca-1.png" alt="marca-1">
                        <img src="./src/assets/img/rodape/marca-1.png" alt="marca-1">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-wrap footer-gap">
                <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="img">
                        <img src="./src/assets/img/rodape/aguia-mac-lojas.png" alt="aguia">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=quem-somos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=produtos">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=localizacao">Localização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=contato">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column gap-3">
                    <div class="d-flex social-media-icons">
                        <a href="https://api.whatsapp.com/send/?phone=5511996434745&text&app_absent=0" target="_blank"><img src="./src/assets/img/rodape/icon-whats-rdp.png" alt="whatsapp"></a>
                        <a href="https://www.instagram.com/mac_empresarial/" target="_blank"><img src="./src/assets/img/rodape/icon-instagram-rdp.png" alt="instagram"></a>
                    </div>
                    <div class="d-flex flex-column py-3">
                        <span class="contact">(11) 9 9643-4745 | (11) 2429-0762</span>
                        <span class="contact"><a href="mailto:atendimento@macempresarial.com.br">atendimento@macempresarial.com.br</a></span>
                        <span class="contact">R.Alexandre Andreazza, 252,</span>
                        <span class="contact">Jardim Res. Itaim, Itu/SP, CEP:13310-673</span>
                        <span class="contact">© Copyright 2022 - Mac Lojas</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./libs/bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>

</html>