<!DOCTYPE HTML>  
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
.error {color: #FF0000;}
</style>
<title>направи събитие</title>
</head>
<body>  

<?php
session_start();
if (isset($_SESSION['whatever'])){
echo "Hello ".$_SESSION['name']."!";
// define variables and set to empty values
$startingOnError = $startingHourError = $startingMinuteError = $endingOnError = $EndingHourError = $EndingMinuteError =  $EndingDescriptionError = $errorLink1 = $errorLink2 = $errorLink3 = $errorLink4 = $errorLink5 = $errorLink6 = '';
$startingOn = $endingOn = $highlights = $description = $link1 = $link2 = $link3 = $link4 = $link5 = $link6 ="";
$startingH = $startingM = $endingH = $endingM = $mainstream = $additionalRanking = 0; 

     
//$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["startingOn"])) {
    $startingOnError = "must fill year!";
    } else {
       $startingOn =  test_input( $_POST["startingOn"]);
        // check if y is well-formed
       // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          //$startinDateError = " ";
       // }
    }

    if (empty($_POST["startingH"])) {
        $startingHourError = " startin hour is mandatory!";
    } else {
       $startingH = test_input($_POST["startingH"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
    }
    if (empty($_POST["startingM"])) {
        $startingMinuteError = "startin minute is mandatory!";
    } else {
       $startingM = test_input($_POST["startingM"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
    }
    if (empty($_POST["endingOn"])) {
        $endingOnError = "must fill year!";
    } else {
       $endingOn = test_input( $_POST["endingOn"]);
        // check if y is well-formed
       // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          //$startinDateError = " ";
       // }
    }
    if (empty($_POST["endingH"])) {
        $endingHourError = " ending hour is mandatory!";
    } else {
        $endingH = test_input($_POST["endingH"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
    }
        if (empty($_POST["endingM"])) {
            $endingMinuteError = "ending minute is mandatory!";
        } else {
            $endingM = test_input($_POST["endingM"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
        }


        if (empty($_POST["highlights"])) {
            $highlightsError = "highlights are mandatory! задължително";
        } else {
            $highlights = test_input($_POST["highlights"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
        }

        if (empty($_POST["description"])) {
            $descriptionError = "description is mandatory!";
        } else {
            $description = test_input($_POST["description"]);
        // check if y is well-formed
       // if (!filter_var($startingOn, FILTER_VALIDATE_EMAIL)) {
          //$startingOnError = " ";
       // }
        }

        if (empty($_POST["mainstream"])) {
            $mainstream = 0;
        } else {
            $mainstream = test_input($_POST["mainstream"]);
        }
        if (empty($_POST["additionalRanking"])) {
            $additionalRanking = 0;
        } else {
            $additionalRanking = test_input($_POST["additionalRanking"]);
        }

          //Hole lotta Links
        if (empty($_POST["link1"])) {
             $link1 = "";
        } else {
                $link1 = test_input($_POST["link1"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link1)) {
                $errorLink1 = "Invalid URL";
            }
        }  
        if (empty($_POST["link2"])) {
             $link2 = "";
        } else {
                $link2 = test_input($_POST["link2"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link2)) {
                $errorLink2 = "Invalid URL";
            }
        }
        if (empty($_POST["link3"])) {
             $link3 = "";
        } else {
                $link3 = test_input($_POST["link3"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link3)) {
                $errorLink3 = "Invalid URL";
            }
        }
        if (empty($_POST["link4"])) {
             $link4 = "";
        } else {
                $link4 = test_input($_POST["link4"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link4)) {
                $errorLink4 = "Invalid URL";
            }
        }
        if (empty($_POST["link5"])) {
             $link5 = "";
        } else {
                $link5 = test_input($_POST["link5"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link5)) {
                $errorLink5 = "Invalid URL";
            }
        }
        if (empty($_POST["link6"])) {
             $link6 = "";
        } else {
                $link6 = test_input($_POST["link6"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link6)) {
                $errorLink6 = "Invalid URL";
            }
        }
}
} else {
echo "<div class='error'>Not in session !</div>";
}
    
    
    
    
    
    


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Зареждане на събитие</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
  Започва на(гггг-мм-дд): <input type="text" name="startingOn" value="<?php echo $startingOn;?>">
  <span class="error">* <?php echo $startingOnError;?></span>
  <br><br>
  начален час: <input type="number" name="startingH" value="<?php echo $startingH;?>" > : <input type="number" name="startingM" value="<?php echo $startingM;?>"> <!--value = "<?php echo $startingM;?>"--> 
  <span class="error">* <?php echo $startingHourError;?></span> <span class="error">* <?php echo $startingHourError;?></span>
  <br><br>
  Свършва на(гггг-мм-дд): <input type="text" name="endingOn" value="<?php echo $endingOn;?>">
  <span class="error">* <?php echo $endingOnError;?></span>
  <br><br>
  краен час: <input type="number" name="endingH" value="<?php echo $endingH;?>"> : <input type="number" name="endingM" value="<?php echo $endingM;?>">  
  <span class="error">* <?php echo $endingHourError;?></span> <span class="error">* <?php echo $endingHourError;?></span>
  <br><br>
  
  Highlights: <textarea name="highlights" rows="5" cols="40"><?php echo $highlights;?></textarea>
  <br><br>
  Description: <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
  <br><br>
  
  
  Link1: <input type="text" name="link1" value="<?php echo $link1;?>">
  <span class="error"> <?php echo $errorLink1;?></span>
  <br><br>
  Link2: <input type="text" name="link2" value="<?php echo $link2;?>">
  <span class="error"> <?php echo $errorLink2;?></span>
  <br><br>
  Link3: <input type="text" name="link3" value="<?php echo $link3;?>">
  <span class="error"> <?php echo $errorLink3;?></span>
  <br><br>
  Link4: <input type="text" name="link4" value="<?php echo $link4;?>">
  <span class="error"> <?php echo $errorLink4;?></span>
  <br><br>
  Link5: <input type="text" name="link5" value="<?php echo $link5;?>">
  <span class="error"> <?php echo $errorLink5;?></span>
  <br><br>
  Link6: <input type="text" name="link6" value="<?php echo $link6;?>">
  <span class="error"> <?php echo $errorLink6;?></span>
  <br><br>
    
  Mainstream: <input type="number" name="mainstream" > Additional ranking: <input type="number" name="additionalRanking" >
  <br><br>    

  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2>event will be created напрай събитие:</h2>";
echo "начална дата: ".$startingOn;
echo "<br>";
echo "".$startingH.":".$startingM;
echo "<br>";
echo "крайна дата: ".$endingOn;
echo "<br>";
echo "свършва в: ".$endingH.":".$endingM;
echo "<br>";
echo $highlights;
echo "<br>";
echo $description;
echo "<br>линк за снимка: ";
echo "<img src = '".$link1 ."' style = 'width:40%'></img>";
echo "<br>";
echo $link2;
echo "<br>";
echo $link3;
echo "<br>";
echo $link4;
echo "<br>";
echo $link5;
echo "<br>";
echo $link6;
echo "<br>";
if (true){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbass";
if ($startingOn != '' && $endingOn!=''){
    

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "INSERT INTO TimeMash (startingOn, startingAt, endingOn, endingAt, highlights, description,
    firstLink, secondLink, thirdLink, fourthLink, fiftLink, sixthLink, mainstream, additionalRanking)
VALUES ('".$startingOn."','".$startingH.":".$startingM."','".$endingOn."','".$endingH.":".$endingM."','"."$highlights"."','".$description."','".$link1."','".$link2."','".$link3."','".$link4."','".$link5."','".$link6."','".$mainstream."','".$additionalRanking."');";

//if ($conn->query($sql) === TRUE) {
  //  echo " record starting at: ".$startingAt." created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo " New event created starting at ".$startingAt." with Id: ".$last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}else {
    echo "starting date and ending date are mandatory!";
}
}

?>

</body>
</html>
