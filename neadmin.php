<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>form for creation</title>
    </head>
    <body>
        <?php
        $nname = $passit = $passit2 = $anders = '';
        $matchErr = $nnameErr = $passitErr = $matchErr = $andersErr = '';
        
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nname"])) {
    $nnameErr = "Name is required";
  } else {
    $nname = test_input($_POST["nname"]);
  }

  if (empty($_POST["passit"])) {
    $passitErr = "Password is required";
  } 
  elseif ($_POST["passit"] !== $_POST["passit2"]){
      $matchErr = "Passwords doesn't match!";
  }else {
    $passit = test_input($_POST["passit"]);
  }
if (empty($_POST["anders"])) {
    $anders = "";
    $andersErr ="empty";
  } else {
    $anders = test_input($_POST["anders"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="nname">
<span class="error">* <?php echo $nnameErr;?></span>
<br><br>
Password1:
<input type="text" name="passit">
<span class="error">* <?php echo $passitErr;?></span>

<br><br>
Password2:
<input type="text" name="passit2">
<span class="error">* <?php echo $matchErr;?></span>
<br><br>
Other:
<input type="text" name="anders">
<span class="error"><?php echo $andersErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 
 </form>

<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbass";

  // Create connection
  if ( $passit !== '' && $nname !== '' ){
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $passit = password_hash($passit, PASSWORD_BCRYPT);
    $sql = "INSERT INTO flyingdutchman(nickname, password, email) VALUES ('".$nname."', '".$passit."', '".$anders."');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully: ".$nname."', '".$passit."', '".$anders."'!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
   } else {
    echo "no pass and/or uname!";
   }
?>
    </body>
</html>

