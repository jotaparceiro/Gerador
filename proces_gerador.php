<?php
session_start();

if(isset($_POST['enviar']))
{
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['dataNascimento'] = $_POST['dataNascimento'];
    $_SESSION['telefone'] = $_POST['telefone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['genero'] = $_POST['genero'];
    $_SESSION['endereco'] = $_POST['endereco'];
    $_SESSION['sobre'] = $_POST['sobre'];

    if (!empty($_POST['experiencia'])) 
    {
        $_SESSION['experiencias'] = array_filter($_POST['experiencia'], fn($exp) => !empty($exp));
    }

    header('Location: exibe_curriculo.php');
    exit;
}