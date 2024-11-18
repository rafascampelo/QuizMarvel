<?php
session_start(); 

if (!isset($_SESSION["pontuacao"])) {
    $_SESSION["pontuacao"] = 0;
}

$qincorreta = array();
$qsemresposta = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pergunta 1
    if (isset($_POST["pergunta1"])) {
        if ($_POST["pergunta1"] == "a") {
            $_SESSION["pontuacao"]++;
        } else {
            $qincorreta[] = "Pergunta 1";
        }}
        
    else {
        $qsemresposta[] = "Pergunta 1";
    }

    // Pergunta 2
    if (isset($_POST["pergunta2"])) {
        if ($_POST["pergunta2"] == "c") {
            $_SESSION["pontuacao"]++;
        } else {
            $qincorreta[] = "Pergunta 2";
        }}
     else {
        $qsemresposta[] = "Pergunta 2";
    }
    //pergunta 3
    if (isset($_POST["pergunta3"])) {
        if ($_POST["pergunta3"] == "c") {
            $_SESSION["pontuacao"]++;
        } else {
            $qincorreta[] = "Pergunta 3";
        }}
    else {
        $qsemresposta[] = "Pergunta 3";
    }
    //pergunta 4
    if (isset($_POST["pergunta4"])) {
        if ($_POST["pergunta4"] == "b") {
            $_SESSION["pontuacao"]++;
        } else {
            $qincorreta[] = "Pergunta 4";
        }
    } 
    else {
        $qsemresposta[] = "Pergunta 4";
    }
    //pergunta 5
    if (isset($_POST["pergunta5"])) {
        if ($_POST["pergunta5"] == "b") {
            $_SESSION["pontuacao"]++;
        } else {
            $qincorreta[] = "Pergunta 5";
        }
    } else {
        $qsemresposta[] = "Pergunta 5";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>

    <header>
        <h1>MARVEL</h1>
    </header>
    <nav>
        <ul>
    <li><a href="index.html"> Página Inicial</a></li>
     <li><a href="https://pt.wikipedia.org/wiki/Justin_Bieber" target="_blank"> Quem é esse cara?</a></li>
        </ul>
    </nav>

<main>
    <h1>Resultado do seu quiz</h1>

<?php
   // Exibir mensagens
   if ($_SESSION["pontuacao"] == 5){
    echo "<h3>Parabéns, você acertou todas as perguntas!</h3>";
    echo " É um fã de verdade!";
    }
 else {
    echo "<h3><p>Sua pontuação é: " . $_SESSION["pontuacao"] . " / 5</p></h3>";
    }
    if (!empty($qincorreta)) {
        echo "<h4><p>Perguntas incorretas: " . implode(", ", $qincorreta) . "</p></h4>";
    }
    if (!empty($qsemresposta)) {
        echo "<h4><p>Perguntas não respondidas: " . implode(", ", $qsemresposta) . "</p></h4>";
        echo "<h5>você não respondeu o quiz corretamente!</h5>";
    }

?>

</main>
            <div class="ce">
            <a href="index.html"><button class="vol" >
            <p> Tentar Novamente </p>
            </button></a></div>

        <footer>
        <p>&copy;  Rafaela Campelo </p>
        </footer>

<?php
    session_destroy();
?>

</body>
</html>