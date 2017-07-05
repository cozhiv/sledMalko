        <?php
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $q = strip_tags($_POST['q']);
   // echo $q;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbass";
//function userExists($nick, $pass, $servername, $username, $password, $dbname){
    
    $usrMatch = FALSE;
    // Create connection

    $conne = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conne->connect_error) {
        echo "err in database" . $conne->connect_error;
        die("Connection failed: " . $conne->connect_error);
    }

    // sql to create table
    if ($q == ""){
        $msql = "SELECT nickname, password, email FROM flyingdutchman;";
    }
    else{
        echo $q;
        $msql = "SELECT nickname, password, email FROM flyingdutchman WHERE nickname LIKE '".$q."%';";
    }
    
    $adminer = $conne->query($msql);


    if ($adminer->num_rows > 0) {
        // output data of each row
        echo'<div class = "users list">';
        while($row = $adminer->fetch_assoc()) {
          //  if ($row["password"] == $pass && $row["nickname"] == $nick){
                $usrMatch = TRUE;
                echo '<div class = "users columns assync"> : '.$q.'</div>';
                echo '</div>';
                echo '<div clas ="users rows">';
                echo '<div clas ="users columns nicknames">';
                echo 'nickname: '.$row["nickname"];
                echo'</div>';
                echo '<div clas ="users columns passwords">';
                echo 'hashed password'.$row["password"];
                echo'</div>';
                echo'<br>';
           // }
    }
    echo '</div>';
    } 
    $conne->close();
        ?>
