<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'mySql!';
if(isset($_POST['username'])&&isset($_POST['passwd']))
{
  $username = $_POST['username'];
  $passwd = $_POST['passwd'];
  if(!empty($username)&&!empty($passwd))
  {
    echo 'Username : '.$username.' passwd = '.$passwd;
    $db = new PDO('mysql:host=localhost;dbname=iitbh_quiz',$mysql_user,$mysql_pass);
    $stmt = $db->query("SELECT COUNT(*) FROM `users` WHERE `username`='$username' AND `password`='$passwd'");
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
      echo '</br> count ='.$row['COUNT(*)'].'</br>';
     if($row['COUNT(*)']==1)
     {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["ques_num"] = 1;
        //echo '<script>window.location.href = "Question1.php";</script>';
        //echo $_SESSION["username"];
        echo '<meta http-equiv="refresh" content="0; URL=question1.php" />';
        //header("Location:http://localhost/buzzer/Question1.php");
        exit();
     }
     else
     {
       echo 'Incorrect Username or Password </br>';
     }
   }
  else
  {
    echo '</br>Enter the credentials properly</br>';
  }
}
?>
