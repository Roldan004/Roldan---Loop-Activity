


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roldan Activity 06</title>
</head>
    <h3>Loop Activity 06</h3>
<body>
    <p>A program which will count the "e"</p> 
    <p>characters in the text "hivelabs technologies".</p>
    <br>
    <p>Answer</p>

<?php  
function count_letters($word,$hivelabstechnologies) {

	$word_len = strlen($word) -1;
    $count = 0;
    
   	for($x = 0; $x <= $word_len; $x++) {
    
    	if($word[$x] == $hivelabstechnologies) {
        	$count++;
        }
     }
    echo "The number of ".$hivelabstechnologies." in ".$word." is: ".$count;
}

count_letters("hivelabs technologies","e");
?> 

</body>
</html>
