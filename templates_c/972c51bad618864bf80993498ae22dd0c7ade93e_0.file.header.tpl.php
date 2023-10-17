<?php
/* Smarty version 4.3.4, created on 2023-10-17 15:18:15
  from 'C:\xampp\htdocs\infoautomotriz\app\Templates\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652e8997494800_20758949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972c51bad618864bf80993498ae22dd0c7ade93e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\Templates\\layout\\header.tpl',
      1 => 1697159740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e8997494800_20758949 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Automotriz INFO</title>
</head>

<body>
    <!-- main header -->
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <img width="230" height="80" class="navbar-brand" src="./assets/img/logo.png" alt="Logo de la Pagina">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active fs-4" aria-current="page" href="home">Home</a>
                        <a class="nav-link fs-4" href="registrarse">Registrarse</>
                        <a class="nav-link fs-4" href="contacto">Contacto</a>
                        <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                            <a class="nav-link fs-4" href="logout">Logout</a>
                        <?php } else { ?>
                            <a class="nav-link fs-4" href="login">Login</a>
                        <?php }?>
                    </div>
                 </div>
            </div>
        </nav>
    </header>
    <?php }
}
