<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/netflix-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">

    <title>Netflix-clone</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="./assets/img/logo.png" alt="Logo">
        </header>

        @yield('contenido')

        <footer>
            <div class="container-footer">
                <p>Dúvidas? <a href="">Ligue 0800-761-4631</a></p>
    
                <div class="listas">
                    <ul>
                        <li><a href="">Perguntas frequentes</a></li>
                        <li><a href="">Informações corporativas</a></li>
                        <li><a href="">Preferências de cookies</a></li>
                        <li><a href="">Centro de ajuda</a></li>
                        <li><a href="">Privacidade</a></li>
                        <li><a href="">Termos de uso</a></li>
                    </ul>
                </div>
    
                <select>
                    <option>Português</option>
                    <option>Inglês</option>
                </select>
            </div>
        </footer>
    </div>
    <script src="./js/login.js"></script>
</body>
</html>