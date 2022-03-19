<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        include '../php/connect.php';

        function check($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        };

        $user = check($_POST['username']);
        $pass = check($_POST['password']);
        $check = check($_POST['check-password']);
        $email = check($_POST['email']);

        if(empty($user)){
            header('Location: ../../register.php?error=* Insira um Usuario.');
        }else if(empty($pass)){
            header('Location: ../../register.php?error=* Insira uma Senha.');
        }else if(empty($check)){
            header('Location: ../../register.php?error=* Confirme a senha.');
        }else if(empty($email)){
            header('Location: ../../register.php?error=* Insira um Email.');
        }else if($check !== $pass){
            header('Location: ../../register.php?error=* As senhas não coincidem.');
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location: ../../register.php?error=* Insira um email valido.');
            exit();
        }else{
            $sql = "INSERT INTO tab_test(username, password, email) VALUES('$user','$pass', '$email')";
            
            $result = mysqli_query($conn, $sql);

            header('Location: ../../index.php?info=* Registrado com sucesso');
        };
    }else{
        header('Location: ../../register.php');
        exit();
    };
?>