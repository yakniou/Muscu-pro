<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscu-pro</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li class="li-accueil"><a href="Index.php">Muscu-pro</a></li>
                <li class="li-pectoraux"><a href="Index.php?p=Pectoraux.html">Pectoraux</a></li>
                <li class="li-dos"><a href="Index.php?p=Dos.html">Dos</a></li>
                <li class="li-questionnaire"><a href="Index.php?p=questionnaire.php">Questionnaire</a></li>
            </ul>
        </nav>
    </header>

    <?php
    if (isset($_GET['p']))
        include("html/" . $_GET['p']);
    else
        include("html/Accueil.html");
    ?>

    <footer> 
        @ copyright 2023 
    </footer>
</body>

</html>