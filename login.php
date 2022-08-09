<!-- login validation -->
<?php

// Start the session
session_start();

/*check if email and password is set*/
if (isset($_POST['email']) && isset($_POST['pw'])){

      function validation($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
      }

      $email=validation($_POST['email']);
      $pw=validation($_POST['pw']);

      /*select the user details given the username and password */
      $selectq="SELECT userID, fName FROM fonInnov.tbl_userDetails WHERE email = '$email' AND pwd='$pw'";
      $result=$conn->query($selectq);


      if ($result->num_rows===1){

            $row = $result->fetch_assoc();
            $_SESSION["ID"]= $row['userID'];
            $_SESSION["fname"]= $row['fName'];
            $_SESSION["email"]= $email;
            $newid = session_create_id('');
            $_SESSION["session_key"]= $newid;
            echo "session id". $newid ;
            $updateq="UPDATE fonInnov.tbl_userDetails SET 
                        sessionId='$newid' 
                        WHERE email = '$email' AND pwd='$pw'";
            $conn->query($updateq);


                  header("Location:stat_pg.php");
                  exit();
            }

            else{
                  $isError = true;
                  $errorMsg = "</br><div class=\"alert alert-danger\" role=\"alert\"> Incorect email or password! </div>";
            }

      }

?>