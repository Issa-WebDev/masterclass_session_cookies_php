<?php 
// $nickname = "issa";
// function hello ($name = null, $nickname = null) {
// 	// global $nickname; mauvaise pratique
// 	if(!$name) {
// 		return "Hello";
// 	}
// 	return "hello $name $nickname";
// }
// $reponse = hello("kone", $nickname);
// echo $reponse;


// function response_yes_no ($question) {
// 	while(true) {
// 		$response = readline($question . " o pour(oui) et n pour (non) : ");

// 		if($response === "o") {
// 			return true; 
// 		} else if($response === "n") {
// 			return false;
// 		}
// 	}
// }
// $result = response_yes_no("voulez vous continuer ?");
// var_dump($result);

// function add_creneaux ($question = "Entrer un creneaux") {
// 	echo $question."\n";
// 	while (true) {
// 		$heur_debut = (int)readline("heure de debut : ");
// 		if($heur_debut >= 0 && $heur_debut <= 23) {
// 			break;
// 		}
// 	}
// 	while (true) {
// 		$heur_fin = (int)readline("Heure de fin : ");
// 		if($heur_fin >= 0 && $heur_fin <= 23 && $heur_fin > $heur_debut) {
// 			break;
// 		}
// 	}

// 	return [$heur_debut, $heur_fin];
// }

// function demander_creneaux ($question = "entrez un creneaux") {
// 	$creneaux = [];
// 	$continuer = true;
// 	while($continuer) {
// 		$creneaux[] = add_creneaux();
// 		$continuer = response_yes_no("Voulez vous continuer? : ");
// 	}
// 	return $creneaux;
// }

// $result = demander_creneaux();
// var_dump($result);


function Str (string $word): string {
	var_dump($word);
	return $word;
}
// echo Str("issa");