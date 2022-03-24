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

        if(empty($user)){
            header('Location: ../../login.php?error=* Insira um Usuario.');
        }else if(empty($pass)){
            header('Location: ../../login.php?error=* Insira uma Senha.');
            exit();
        }else{
            $sql = "SELECT * FROM tab_cadastro WHERE account='$user' AND password='$pass'";
            
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if($row['account'] === $user && $row['password'] === $pass){
                    $_SESSION['account'] = $row['account'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    header('Location: ../../index.php?info=* Logado com sucesso.');
                    exit();
                }else{
                    header('Location: ../../login.php?error=* Usuario ou senha incorretos.');
                    exit();
                };
            }else{
                header('Location: ../../login.php?error=* Usuario ou senha incorretos.');
                exit();
            };
        };
    }else{
        header('Location: ../../login.php');
        exit();
    };
?>