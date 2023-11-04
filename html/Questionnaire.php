<?php
include('CalculImc.php');

if (isset($_POST["imc_calculer"])) {
    if (isset($_POST["imc_poids_kg"]) && isset($_POST["imc_taille_cm"])) {
        $poids_kg = (float) $_POST["imc_poids_kg"];
        $taille_m = (float) $_POST["imc_taille_cm"] / 100;

        try {
            $imc = imc($poids_kg, $taille_m);
        } catch (Exception $e) {
            $imc = $e->getMessage();
        }
    }
}
?>
<main>

    <h1>Renseignement personnel et Questionnaire sur la musculation</h1>

    <h2 class="renseignement">Renseignement personnel</h2>
    <form action="" method="get">


        <label class="label-nom" for="nom">Nom :</label>
        <input class="input-nom" type="text" name="nom" placeholder="Akniou" required>


        <label class="label-prenom" for="prenom">Pr&eacute;nom :</label>
        <input class="input-prenom" type="text" name="prenom" placeholder="Yanis" required>


        <label class="label-email" for="nom">Email :</label>
        <input class="input-email" type="text" id="nom" name="nom" placeholder="azerty@gmail.com" required>


        <label class="label-age" for="age">&Acirc;ge :</label>
        <input class="input-age" type="number" name="age" placeholder="21">

        <label for="sexe">Sexe :</label>
        <input type="radio" name="sexe" value="homme" required>Homme
        <input type="radio" name="sexe" value="femme" required>Femme
        

        <br>

        <input type="reset" value="Réinitialiser" />
        <input type="submit" value="Soumettre">

    </form>


    <h2 class="question-muscu">Questionnaire sur la musculation</h2>

    <form action="" method="get">
        <label for="niveau">Niveau d'experience en musculation :</label>
        <select name="niveau" size="">
            <option value="1" selected="selected">D&eacute;butant</option>
            <option value="2">Interm&eacute;diaire</option>            
            <option value="3">Avanc&eacute;</option>    
            <option value="4">Coach</option>    
        </select>

        <input type="reset" value="Réinitialiser" />
        <input type="submit" value="Soumettre">
    </form>

    NOUBLIE PAS IMAGES CLIQUABLE §§§§§§§§

    <!--    <form method="post">
        <input type="text" name="imc_poids_kg" placeholder="Poids en kg"/>
        <input type="text" name="imc_taille_cm" placeholder="Taille en cm"/>
        <input type="submit" name="imc_calculer" value="Calculer l'IMC"/>
        <input type="text" name="imc_resultat" value="<?= isset($imc) ? $imc : "Résulat de l'IMC" ?>" disabled />
    </form> -->
</main>


