<?php
// print_r(2 + 2);
// var_dump(1.2);
// $username = readline();

// $user_word = strtolower(readline("Entrer un mot: "));
// if($user_word === strrev($user_word)) {
// 	echo "$user_word est un palindrome";
// } else {
// 	echo "$user_word n'est pas un palindrome";
// }

// $notes = [20, 16, 13];
// array_reverse($notes);
// array_push($notes, 14);
// sort($notes);
// print_r($notes);
// $sum = array_sum($notes);
// $moyenne = round(($sum / count($notes)), 2);
// echo "Votre moyenne est de : $moyenne";


// while (true) {
// 	$word = strtolower(readline("Entrer un mot : "));
// 	if($word === "") {
// 		exit("fin du programme");
// 		// die("fin du programme"); alias of exit()
// 	}
// 	if($word === strrev($word)) {
// 		echo "$word est un palindrome\n";
// 	} else {
// 		echo "$word n'est pas un palindrome\n";
// 	}
// }


// $insultes = ["merde", "con"];
// $phrase = readline("Entrer une phrase : ");
// foreach($insultes as $insulte) {
// 	$replace = str_repeat("*", strlen($insulte));
// 	$phrase = str_replace($insulte, $replace, $phrase);
// }
// echo $phrase;








// $injures = ["merde", "putain", "con", "salope"];
// $hide_word_arrays = [];
// $final_word_arrays = [];
// foreach($injures as $injure) {
// 	$first_letter = substr($injure, 0 ,1);
// 	$hide_word_arrays[] = $first_letter.str_repeat("*", strlen($injure) - 1);
// }
// $phrase = readline("Entrer une phrase : ");
// $phrase = str_replace($injures, $final_word_arrays, $phrase);
// echo $phrase;


