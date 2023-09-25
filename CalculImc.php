<?php
    function imc($poids_kg, $taille_m) {
        // On vérifie les paramètres.
        if($poids_kg == 0)
            throw new Exception('Le poids est nul.');

        if($poids_kg < 0)
            throw new Exception('Le poids est négatif.');  

        if($taille_m == 0)
            throw new Exception('La taille est nulle.');

        if($taille_m < 0)
            throw new Exception('La taille est négative.');
        
        // On calcule l'IMC.
        $resultat = $poids_kg / ($taille_m * $taille_m);
        return round($resultat, 1);
    }
?>