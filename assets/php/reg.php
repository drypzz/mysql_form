<?php
    include '../database/connect.php';

    if(isset($_POST['username']) && isset($_POST['password'])){

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

        $dbquery = "SELECT * FROM tab_cadastro WHERE account='$user' AND email='$email'";
        $dbresult = mysqli_query($conn, $dbquery);
        $row = mysqli_fetch_assoc($dbresult);

        if(empty($user)){
            header('Location: ../../register.php?error=* Insira um Usuario.');
        }else if(empty($email)){
            header('Location: ../../register.php?error=* Insira um Email.');
        }else if(empty($pass)){
            header('Location: ../../register.php?error=* Insira uma senha.');
        }else if(empty($check)){
            header('Location: ../../register.php?error=* Confirme a senha.');
        }else if($check !== $pass){
            header('Location: ../../register.php?error=* As senhas não coincidem.');
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location: ../../register.php?error=* Insira um email valido.');
            exit();
        }else if($row['account'] === $user){
            header('Location: ../../register.php?error=* Este usuario ja esta cadastrado.');
            exit();
        }else if($row['email'] === $email){
            header('Location: ../../register.php?error=* Este email ja esta cadastrado.');
            exit();
        }else{
            $sql = "INSERT INTO tab_cadastro(account, password, email) VALUES('$user','$pass', '$email')";

            $res = mysqli_query($conn, $sql);

            header('Location: ../../login.php?info=* Registrado com sucesso');
            exit();
        };
    }else{
        header('Location: ../../register.php');
        exit();
    };
?>