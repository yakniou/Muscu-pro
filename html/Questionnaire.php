<?php
    include ('CalculImc.php');
   
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
<main>
    <form method="post">
        <input type="text" name="imc_poids_kg" placeholder="Poids en kg"/>
        <input type="text" name="imc_taille_cm" placeholder="Taille en cm"/>
        <input type="text" name="imc_resultat" value="<?= isset($imc) ? $imc : "Résulat de l'IMC" ?>" disabled />
        <input type="submit" name="imc_calculer" value="Calculer l'IMC"/>
    </form>
</main>
