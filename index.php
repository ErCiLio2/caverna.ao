
<?php
    require_once 'config.php';

    $url = isset($_GET['url'])? $_GET['url']: 'inicio';
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <title>Caverna De Estilos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/styles.css">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/user.css">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/produtos.css">
    <link rel="shortcut icon" href="<?=BASE_URL?>img/ico.png" type="image/x-icon">
    <style type="text/css">
        footer a#<?= @$url?>{
            text-decoration: none;
            background-color: rgba(195, 195, 0, 0.8);
        }
    </style>
    <script src="<?= BASE_URL?>js/jquery.js"></script>
    <script src="<?= BASE_URL?>js/scripts.js"></script>
   <!-- <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
</head>
<body>
    <?php
    
        if(isset($_GET['user']) &&( $_GET['user'] == 'entrar' || $_GET['user'] == 'cadastrar')){
            if(isset($_POST['promixo']))
            {

                    $_SESSION['dados'] = [
                        "usernome" => $_POST["usernome"],
                        "usersobrenome" => $_POST["usersobrenome"],
                        "useremail" => $_POST["useremail"],
                        "usertel" => $_POST["usertel"],
                        "usersexo" => $_POST["sexo"],
                        "palavrapas5" => "",
                        "userdata" => $_POST["data"]
                    ];

                    var_dump($_SESSION['dados']);

                include_once("pages/user/finalizarcadastro.php");

            }

            if(isset($_POST["cadastra"]))
            {
                var_dump($_SESSION['dados']);
                if($_POST['pass2'] == $_POST['pass1']){

                    $_SESSION['dados']["palavrapas5"] = $_POST['pass2'];
                
                    Usuarios::criarUsuario($_SESSION['dados']);
                }

                else{ ?>
                    <script>alert("Palavra passe Errada");</script>
                <?php 
                }

                include_once("pages/user/finalizarcadastro.php");

            }else 
                include_once("pages/user/$_GET[user].php");
        }else{
            include_once __DIR__.'/templates/header.php';
        
            if (file_exists(__DIR__."/pages/$url.php")) {
                include_once("pages/$url.php");
            }

            include_once __DIR__.'/templates/footer.php';
        }
    ?>
</body>

</html>