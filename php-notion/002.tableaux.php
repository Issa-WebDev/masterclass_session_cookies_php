<?php
// $notes = ["kone", "issa", [10, 20, 15]];

// $students = [
// 	"name" => "Issa",
// 	"notes" => [10, 12,18]
// ];
// $students["name"] = "kisscoder";
// $students["pl"] = "js";
// $students["notes"][] = 10;
// print_r($students);


$students = [
	[
		"name" => "Issa",
		"age" => 23,
		"notes" => [15, 17, 19]
	],
	[
		"name" => "kisscoder",
		"age" => 22,
		"notes" => [10, 14, 18]
	] 
];

echo $students[1]["notes"][2];