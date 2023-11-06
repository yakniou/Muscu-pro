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

    <?php
        $message = ''; // Initialiser le message vide

        if (isset($_POST['submit'])) {
            $message = 'Le bouton "Submit" a &eacute;t&eacute; cliqu&eacute; !'; // Mettre à jour le message si le bouton est cliqué
        }
    ?>
    <?php
        if (!empty($message)) {
            echo '<p class="p-message">' . $message . '</p>'; // Afficher le message seulement s'il est non vide
        }
        
        // Le problème est qu si on actualise la page, le bouton est considéré comme déja cliqué. 
        // Pour ne plus le considérer, il faut refermer la page et réouvrir le site...
    ?>



    <form method="post">

        <div class="div-form">
            <h2>Renseignement personnel</h2>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" placeholder="Akniou" required>

            <label for="prenom">Pr&eacute;nom :</label>
            <input type="text" name="prenom" placeholder="Yanis" required>

            <a href="image/formulaire.png" target="_blank">
                <img class="img-form" src="image/formulaire.png" alt="Dame qui montre le formulaire">
            </a>


            <label for="email">Email :</label>
            <input type="text" name="email" placeholder="azerty@gmail.com" required>


            <label for="age">&Acirc;ge :</label>
            <input type="number" name="age" placeholder="0" min="0">

            <legend>Sexe :</legend>
            <div class="genre">
                <input type="radio" name="genre" id="homme" value="homme" required>
                <label for="homme">Homme</label>

                <input type="radio" name="genre" id="femme" value="femme" required>
                <label for="femme">Femme</label>
            </div>
        </div>

        <div class="div-form">
            <h2>Questionnaire sur la musculation</h2>
            <label for="niveau">Niveau d'experience en musculation :</label>
            <select name="niveau" id size="1">
                <option value="1" selected="selected">D&eacute;butant</option>
                <option value="2">Interm&eacute;diaire</option>
                <option value="3">Avanc&eacute;</option>
                <option value="4">Coach</option>
            </select>

            <label for="objectif">Questions sur l'Objectif de l'Entra&icirc;nement :</label>
            <div>
                <div class="div-checkbox">
                    <input type="checkbox" name="objectif1" id="objectif1" value="1">
                    <label for="objectif1">Prise de masse musculaire</label>
                </div>

                <div class="div-checkbox">
                    <input type="checkbox" name="objectif2" id="objectif2" value="2">
                    <label for="objectif2">Perte de poids</label>
                </div>

                <div class="div-checkbox">
                    <input type="checkbox" name="objectif3" id="objectif3" value="3">
                    <label for="objectif3">D&eacute;finition musculaire</label>
                </div>

                <div class="div-checkbox">
                    <input type="checkbox" name="objectif4" id="objectif4" value="4">
                    <label for="objectif4">Am&eacute;lioration de la force</label>
                </div>
            </div>

            <label for="pret">Combien d'entrainement par semaine &ecirc;tes vous pr&ecirc;t &agrave; faire ?</label>
            <input type="number" name="pret" placeholder="4" min="0" max="7">

            <label for="fin">Jusqu'&agrave; quand aimeriez-vous faire votre entrainement ?</label>
            <input type="date" name="fin" required min="<?php echo date('Y-m-d'); ?>">

        </div>
        <div class="div-sub-res">
            <input type="reset" value="R&eacute;initialiser">
            <input type="submit" name="submit" value="Soumettre">
        </div>
    </form>

    <form method="post">
        <div class="div-form">
            <h2>Calcul pour l'IMC</h2>
            <label for="imc">Calcul d'IMC</label>
            <input type="text" name="imc" placeholder="Poids en kg" />
            <input type="text" name="imc" placeholder="Taille en cm" />
            <input type="submit" name="imc" value="Calculer l'IMC" />
            <input type="text" name="imc" value="<?= isset($imc) ? $imc : "R&eacute;sulat de l'IMC" ?>" disabled />
        </div>
    </form>
</main>