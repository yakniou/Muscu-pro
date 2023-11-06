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


    <form action="" method="get">

        <div class="div-form">
            <h2>Renseignement personnel</h2>
            <label or="nom">Nom :</label>
            <input type="text" name="nom" placeholder="Akniou" required>

            <label for="prenom">Pr&eacute;nom :</label>
            <input type="text" name="prenom" placeholder="Yanis" required>

            <a href="image/formulaire.png">
                <img class="img-form" src="image/formulaire.png" alt="Dame qui montre le formulaire">
            </a>


            <label for="email">Email :</label>
            <input type="text" name="email" placeholder="azerty@gmail.com" required>


            <label for="age">&Acirc;ge :</label>
            <input type="number" name="age" placeholder="0" min="0">

            <label for="genre">Sexe :</label>
            <input type="radio" name="genre" value="homme" required>Homme
            <input type="radio" name="genre" value="femme" required>Femme
        </div>

        <div class="div-form">
            <h2>Questionnaire sur la musculation</h2>
            <label for="niveau">Niveau d'experience en musculation :</label>
            <select name="niveau" size="">
                <option value="1" selected="selected">D&eacute;butant</option>
                <option value="2">Interm&eacute;diaire</option>
                <option value="3">Avanc&eacute;</option>
                <option value="4">Coach</option>
            </select>

            <label for="objectif">Questions sur l'Objectif de l'Entraînement :</label>
            <div class="div-checkbox">
                <input type="checkbox" name="objectif" value="1" />Prise de masse musculaire
                <input type="checkbox" name="objectif" value="2" />Perte de poids
                <input type="checkbox" name="objectif" value="3" />Définition musculaire
                <input type="checkbox" name="objectif" value="4" />Amélioration de la force
            </div>

            <label for="pret">Combien d'entrainement par semaine êtes vous prêt à faire ?</label>
            <input type="number" name="pret" placeholder="4" min="0" max="7" />

            <label for="fin">Jusqu'à quand aimeriez-vous faire votre entrainement ?</label>
            <input type="date" name="fin" required min="<?php echo date('Y-m-d'); ?>" />

            <input type="reset" value="Réinitialiser" />
            <input type="submit" value="Soumettre">
        </div>

    </form>

    <form method="post">
        <div class="div-form">
            <h2>Calcul pour l'IMC</h2>
            <label for="imc">Calcul d'IMC</label>
            <input type="text" name="imc" placeholder="Poids en kg" />
            <input type="text" name="imc" placeholder="Taille en cm" />
            <input type="submit" name="imc" value="Calculer l'IMC" />
            <input type="text" name="imc" value="<?= isset($imc) ? $imc : "Résulat de l'IMC" ?>" disabled />
        </div>
    </form>
</main>