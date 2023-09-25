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
                <li class="li-accueil"><a href="Index.php?p=Accueil">Muscu-pro</a></li>
                <li class="li-dos"><a href="Index.php?p=Dos">Dos</a></li>
                <li class="li-jambe"><a href="Index.php?p=Jambes">Jambes</a></li>
                <li class="li-questionnaire"><a href="Index.php?p=questionnaire">Questionnaire</a></li>
            </ul>
        </nav>    
    </header>


    <main>
        <?php 
            if (isset($_GET['p']))
                include("html/".$_GET['p']).".html";
            else
                include("html/Accueil.html");
        ?>
    </main>

    <footer> @ copyright 2023 </footer>
</body>
</html>