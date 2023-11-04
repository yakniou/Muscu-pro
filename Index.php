<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <!-- importation du css -->
    
    <link rel="stylesheet" type="text/css" href="/muscu_pro/css/style-mobile.css">
    <link rel="stylesheet" type="text/css" href="/muscu_pro/css/style-tablette.css">
    <link rel="stylesheet" type="text/css" href="/muscu_pro/css/style-ordi.css">
    

    <!-- impotation des fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <title>Muscu-pro</title>
</head>

<body>
    <header>
        <nav id="menu">
            <ul class="liste">
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