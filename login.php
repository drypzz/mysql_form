<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
        <title>Website | Login</title>

        <link rel="stylesheet" href="assets/style/css.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class='navbar'>
            <div class='navbar-container'>
                <a href='index.php' id='navbar-logo'>LOGO</a>
                <div class='navbar-toggle' id='mobile-menu'>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                </div>
                <ul class="navbar-menu">
                    <li class="navbar-item">
                        <a href="index.php" class="navbar-links">< Index</a>
                    </li>
                    <li class="navbar-btn">
                        <a href="register.php" class="button">CADASTRAR</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="main-form">
            <div class="container">
                <div class="header">
                    <h1>Entrar</h1>
                    <br>
                    <p>Ainda não tem uma conta? <a href="register.php">Cadastrar-se</a></p>
                </div>
                <form action="assets/database/log.php" method="post" class="form">
                    <div class="form-group">
                        <label for="user">Usuario:<span class='required'>OBRIGATÓRIO</span></label>
                        <input type="text" placeholder="Usuario" id="user" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:<span class='required'>OBRIGATÓRIO</span></label>
                        <input type="password" placeholder="Senha" id="password" name="password">
                        <span class="icon-password" id="icon-pass">
                            <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ENTRAR">
                    </div>
                </form>
            </div>
        </main>
        <footer id="footer">
            <div class="footer-container">
                <div class="grid_box">
                    <h2>Lorem</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="grid_box">
                    <h2>Lorem</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </footer>
        <script src='assets/javascript/js.js'></script>
    </body>
</html>