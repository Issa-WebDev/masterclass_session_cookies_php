<?php
// $number = null;

// while ($number !== 10) {
// 	$number = (int)readline("Entrez un nombre : ");
// }

// echo "vous avez gagner";

$notes = [14, 14, 18, 20];

// foreach($notes as $note) {
// 	echo "notes ==> $note \n";
// }

// $students = [
// 	"CM1" => ["issa", "mark", 'louis'],
// 	"CM2" => ["jhon", "koffi"]
// ];
// foreach($students as $class => $list) {
// 	echo "$class \n";
// 	foreach($list as $student) {
// 		echo "- $student \n";
// 	}
// 	echo "\n";
// }


// $notes = [];
// while(true) {
// 	$number = readline("Entrer une note ou taper fin : ");
// 	if($number === "fin") {
// 		break;
// 	}
// 	$notes[] = (int)$number;
// } 

// print_r($notes);

// echo "Notes \n";
// foreach($notes as $note) {
// 	echo "- $note \n";
// }

while (true) {
	$openHour = (int) readline("Entrer l'heure de debut : ");
	$closeHour = (int) readline("Entrer l'heure de fin : ");

	if($openHour < $closeHour) {
		if($openHour < 0 || $closeHour > 23) {
			echo "L'heure doit être entre 1h et 23h\n";
		} else {
			$hour = readline("veuillez entrer une heure : ");
			if($hour >= $openHour && $hour <= $closeHour) {
				echo "ouvert\n";
			} else {
				echo "close\n";
			} 
		}
	} else {
		echo "l'heure de fin doit être superieur a l'heure de debut\n";
	}

	$question = strtolower(trim(readline("veut tu rentrer une autre plage horaire (oui / non) : ")));
	if($question === "non") {
		break;
	}
}

