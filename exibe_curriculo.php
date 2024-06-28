<?php
session_start();

    $nome = $_SESSION["nome"];
    echo "Nome : $nome <br>";
    echo "<br>";

    $dataNascimento = $_SESSION["dataNascimento"];
    echo "Data de Nascimento : $dataNascimento <br>";
    echo "<br>";

    $telefone = $_SESSION["telefone"];
    echo "Telefone : $telefone <br>";
    echo "<br>";

    $email = $_SESSION["email"];
    echo "E-mail : $email <br>";
    echo "<br>";

    $genero = $_SESSION["genero"];
    echo "Sexo : $genero <br>";
    echo "<br>";

    $endereco = $_SESSION["endereco"];
    echo "Endereço : $endereco <br>";
    echo "<br>";

    if (isset($_SESSION['experiencias']) && count($_SESSION['experiencias']) > 0)
    {
        echo "Experiências :";
        echo "<ul>";
        
        foreach ($_SESSION['experiencias'] as $experiencia) 
        {
            echo "<li>" . htmlspecialchars($experiencia) ."<li>";
        }

        echo "</ul>";
    }


    $sobre = $_SESSION["sobre"];
     echo "Sobre : $sobre <br><br><br><br>";

     echo "<button onclick = 'imprimir()'>Imprimir currículo</button>";
?>

<script>
    function imprimir()
    {
        window.print();
    }
</script>