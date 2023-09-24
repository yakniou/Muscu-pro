<?php
    include '../php/CalculImc.php';
   
    if(isset($_POST["imc_calculer"])){
        if(isset($_POST["imc_poids_kg"]) && isset($_POST["imc_taille_cm"])){
            $poids_kg = (float) $_POST["imc_poids_kg"];
            $taille_m = (float) $_POST["imc_taille_cm"] / 100;

            try {
                $imc = imc($poids_kg, $taille_m);
            } catch (Exception $e) {
                $imc = $e -> getMessage();
            }            
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscu-pro questionnaire</title>
</head>
<body>
    <header>
        <nav id="menu">
            <ul>
                <li class="li-index"><a href="Index.html">Muscu-pro</a></li>
                <li class="li-pec"><a href="Pectoraux.html">Pectoraux</a></li>
                <li class="li-dos"><a href="Dos.html">Dos</a></li>
                <li class="li-epaule"><a href="Epaules.html">Épaules</a></li>
                <li class="li-bras"><a href="Bras.html">Bras</a></li>
                <li class="li-jambe"><a href="Jambes.html">Jambes</a></li>
                <li class="li-questionnaire"><a href="Questionnaire.php">questionnaire</a></li>
            </ul>
        </nav>    
    </header>
    <main>
        <form method="post">
            <input type="text" name="imc_poids_kg" placeholder="Poids en kg"/>
            <input type="text" name="imc_taille_cm" placeholder="Taille en cm"/>
            <input type="text" name="imc_resultat" value="<?= isset($imc) ? $imc : "Résulat de l'IMC" ?>" disabled />
            <input type="submit" name="imc_calculer" value="Calculer l'IMC"/>
        </form>
    </main>
</body>
</html>