
        <?php
        $nnError = $psError = $matchError= "";
        $nickname = $pass = "";
        $match = TRUE;
        if (empty($_POST['nickname'])){
              $nnError = "Please fill your nickname!";
        } else{
              $nickname = test_input($_POST['nickname']);     
        }
        if (empty($_POST['pass'])){
            $psError = "Please fill your password!";
        }else{
            $pass = test_input($_POST['pass']);
        }
        if($nickname !== '' && $password!== ''){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbass";
    


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        }
        $sql = "SELECT nickname, password FROM flyingdutchman;";
        
        $users = $conn->query($sql);
        if($users->num_rows > 0){
            while ($row = $users->fetch_assoc()){
                 if (password_verify($pass, $row['password']) && $row['nickname']== $nickname){
                     $match = TRUE;
                     session_start();
                     $_SESSION['login'] = TRUE;
                     $_SESSION['name'] = $nickname;
                     $_SESSION['whatever'] = $nickname."ne6to+aiNO";
                     redirect('/adde.php');
                     break;

                 }
                 else {
                     $match = FALSE;
                 }
            
            }
            if ($match == FALSE){
                    $matchError = "Wrong username or password!";         
            } else {
                    $matchError = "";
            }
        }
        $conn->close();
        }
        function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }
        function redirect($url) {
           ob_start();
           header('Location: '.$url);
           ob_end_flush();
           die();
        }
        ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            .errors{
                color:red;
            }
        </style>
    </head>
    <body>
        <div class = "main">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">
                <label for = "nickname" id = "nickLabel">
                    NicKname: 
                </label>
                <input type="text" id="nickname" name = "nickname"><span id = "nameError" class = "errors"> *<?php echo $nnError; ?></span>
                <br>
                <label for="pass" id = "passLabel">
                    Password:
                </label>
                <input type ="password" id ="pass" name ="pass"><span id="passError" class ="errors"> *<?php echo $psError; ?></span>
                <input type = "submit">
            </form>
            <br>
            <div id ="machError" class ="errors"><?php echo $matchError; ?></div>
            
        </div>
    </body>
</html>

