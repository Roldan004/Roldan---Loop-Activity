


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roldan Activity 7</title>
</head>
    <h3>Loop Activity 07</h3>
<body>
    <p>Encrypt & Decrypt</p>
    <br>
    <p>Answer:</p>
<?php  

function encrypt($message, $encryption_key){
  $key = hex2bin($encryption_key);
  $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
  $nonce = openssl_random_pseudo_bytes($nonceSize);
  $ciphertext = openssl_encrypt(
    $message, 
    'aes-256-ctr', 
    $key,
    OPENSSL_RAW_DATA,
    $nonce
  );
  return base64_encode($nonce.$ciphertext);
  }
  function decrypt($message,$encryption_key){
    $key = hex2bin($encryption_key);
    $message = base64_decode($message);
    $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
    $nonce = mb_substr($message, 0, $nonceSize, '8bit');
    $ciphertext = mb_substr($message, $nonceSize, null, '8bit');
    $plaintext= openssl_decrypt(
      $ciphertext, 
      'aes-256-ctr', 
      $key,
      OPENSSL_RAW_DATA,
      $nonce
    );
    return $plaintext;
  }
  $original_string = "Hivelabs Technology";
  $key = '1f4276388ad3214c873428dbef42243f' ; //some random hex characters
  $encrypted = encrypt($original_string,$key);
  echo '<h3>Original String : '.$original_string.'</h3>';
  echo '<h3>After Encryption : '.$encrypted.'</h3>';
  echo '<h3>After Decryption : '.decrypt($encrypted,$key).'</h3>';

?> 

</body>
</html>
