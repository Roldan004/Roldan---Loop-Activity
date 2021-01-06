


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roldan Activity </title>
</head>
    <h3>My Activity 07</h3>
<body>
    <p><b>Encrypt & Decrypt >"hivelabs"<</b></p>
    <br>
    <p>Answer:</p>
    <?php  
    //Initialize array//   
    $input = "hivelabs";
    $arr = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2');
       
    print("The Encrypted Text of hivelabs is: <br><br>");  
    //Loop through the input then array//
    for ($i = 0; $i < strlen($input);$i++) {   
        for($k = 0; $k < count($arr); $k++) {
        	if($input[$i] == $arr[$k]) {
                echo $arr[$k+5]; }   
        }           
    }   echo "<br>";
      echo "<br>";
     echo "<br>";
    print("The Decrypted Text is: <br><br>");
    for ($i = 0; $i < strlen($input);$i++) {   
        for($k = 0; $k < count($arr); $k++) {
        	if($input[$i] == $arr[$k]) {
            	echo $arr[$k]; }
        }      
    }      
    ?>
</body>
</html>