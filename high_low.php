<?php

$answer = mt_rand(1, 100);

fwrite(STDOUT, 'Guess a number between 1-100 ');

$guess = trim(fgets(STDIN));

echo "Guessed number $guess\n";
while($guess != $answer){
	if($guess > $answer){
		echo "LOWER!\n";
		fwrite(STDOUT, 'Guess a number between 1-100 ');
		$guess = trim(fgets(STDIN));
	}else if($guess < $answer){
		echo "HIGHER!\n";
		fwrite(STDOUT, 'Guess a number between 1-100 ');
		$guess = trim(fgets(STDIN));
	}
}if($guess == $answer){
	echo "GREAT GUESS!";
}

?>