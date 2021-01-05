


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Roldan Activity 05</title>
</head>
    <h3>Loop Activity 05</h3>
    <p>a program to calculate and print the factorial of a number using a for loop.</p>
    <p>The factorial of a number is the product of all integers up to and including</p> 
    <p>that number, so the factorial of 4 is 4*3*2*1= 24.</p>
    <br>
    <p>Answer:</p>
<body>
<?php  
$dan=4;
$fin=1;
for($i=1;$i<=$dan;$i++)
{
	$fin=$fin*$i;
} 
	echo "Factorial=".$fin;    
?> 

</body>
</html>
