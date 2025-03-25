<?php
// $age = (int)readline("Entrer votre age : ");

// if($age >= 18) {
// 	if($age === 18) {
// 		echo "Tu est adulte et t'as 18 juste";
// 	} else {
// 		echo "Tu est un adulte";
// 	}
// } else {
// 	echo "Tu n'est pas un adulte";
// }

// $action = readline("Entrer une action: 1-attaquer 2-defendre 3-passer : ");

// switch ($action) {
// 	case 1: 
// 		echo "J'attaque";
// 		break;
// 	case 2:
// 		echo "defendre";
// 		break;
// 	case 3: 
// 		echo "passer";
// 		break;
// 	default:
// 		echo "vous n'avez pas reagir";
// 		break;
// }

$hour = readline("Entrer une heure : ");

if(($hour >= 9 && $hour <= 12) || ($hour >= 14 && $hour <= 17)) {
	echo "le magasin est ouvert";
} else {
	echo "le magasin est fermé";
}