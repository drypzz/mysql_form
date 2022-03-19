<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="assets/styled/css.css">
    </head>
    <body>
        <form method="post" action="assets/php/login.php">
            <div class="container">
                <?php
                    if(isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }else if(isset($_GET['info'])){ ?>
                        <p class="info"><?php echo $_GET['info']; ?></p>
                    <?php };
                ?>
                <div class="form-group">
                    <label for="user">Usuario:<span class="required">OBRIGATORIO</span></label>
                    <input type="text" placeholder="Usuario" id="user" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Senha:<span class="required">OBRIGATORIO</span></label>
                    <input type="password" placeholder="Senha" id="password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" value="ENTRAR">
                </div>
                <div class="form-group">
                    <p>Não tem uma conta? <a href="register.php">Clique Aqui.</a></p>
                </div>
            </div>
        </form>
    </body>
</html>