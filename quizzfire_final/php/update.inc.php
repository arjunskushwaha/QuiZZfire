<?php
session_start();
//echo $_SESSION["username"].'</br>';
//echo $_SESSION["ques_num"].'</br>';
$username = $_SESSION["username"];
$ques_num = $_SESSION["ques_num"];
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'mySql!';
$number_of_questions = 5;
$answer = $_POST['text'];
//$rcv_options = $_POST['options'];

//echo $rcv_options;
$answer_we_got="The answer we got is : ".$answer."</br>";
$finalstring = $answer_we_got;

$db = new PDO('mysql:host=localhost;dbname=iitbh_quiz',$mysql_user,$mysql_pass);
// $tocheck = checkanswer();
// if($tocheck)        some changes in the database required
// {
  // $finalstring = $finalstring.'~set';
  // $stmt = $db->query("SELECT `score`FROM `users` WHERE `username`='$username'");
  // $row= $stmt->fetch(PDO::FETCH_ASSOC);
  // $new_score=$row['score']+1;
  // $db->exec("UPDATE `users` SET `score`='$new_score' WHERE `username` = '$username'");
  $affected_rows = $db->exec("INSERT INTO `rcv_answers`(`ID`, `Question Number`, `Recieved Answer`, `Username`, `timestamp`) VALUES (NULL,'$ques_num','$answer','$username',NULL)");
  //echo 'set'.$_POST['text'];
  //echo 'inside checkanswer<br>';
// }
// else{
//     $finalstring = $finalstring.'~notset';
// }
if($ques_num<$number_of_questions)
{
  $finalstring = $finalstring.'~notover';
}
else {
    $finalstring = $finalstring.'~over';
}
change_html();

echo $finalstring;
// if($ques_num<$number_of_questions)
// {}
// else {
//   session_destroy();
// }

// function checkanswer()
// {
//   global $answer,$db,$ques_num,$rcv_options;
//   $stmt = $db->query("SELECT `Answer`FROM `questions` WHERE `Question Number`='$ques_num'");
//   $row= $stmt->fetch(PDO::FETCH_ASSOC);
//     //echo '</br> count ='.$row['Answer'].'</br>';
//   if($row['Answer']==$rcv_options)
//   return true;
//   else
//   return false;
// }

function change_html()
{
  global $db,$ques_num,$finalstring,$number_of_questions;
  $ques_num+=1;
  $_SESSION["ques_num"]=$ques_num;

  if($ques_num<=$number_of_questions)
  {
    $stmt1 = $db->query("SELECT `thequestions`FROM `questions` WHERE `Question Number`='$ques_num'");
    $row1= $stmt1->fetch(PDO::FETCH_ASSOC);
    $finalstring = $finalstring.'~'.$row1['thequestions'];
  }
  else
  {
    $finalstring = $finalstring.'~You have completed Round 1!';
  }
  // $stmt2 = $db->query("SELECT `OptionA`FROM `questions` WHERE `Question Number`='$ques_num'");
  // $row2= $stmt2->fetch(PDO::FETCH_ASSOC);
  // $finalstring = $finalstring.'~'.$row2['OptionA'];
  //
  //
  // $stmt3 = $db->query("SELECT `OptionB`FROM `questions` WHERE `Question Number`='$ques_num'");
  // $row3= $stmt3->fetch(PDO::FETCH_ASSOC);
  // $finalstring = $finalstring.'~'.$row3['OptionB'];
  //
  //
  // $stmt4 = $db->query("SELECT `OptionC`FROM `questions` WHERE `Question Number`='$ques_num'");
  // $row4= $stmt4->fetch(PDO::FETCH_ASSOC);
  // $finalstring = $finalstring.'~'.$row4['OptionC'];
  //
  //
  // $stmt5 = $db->query("SELECT `OptionD`FROM `questions` WHERE `Question Number`='$ques_num'");
  // $row5= $stmt5->fetch(PDO::FETCH_ASSOC);
  // $finalstring = $finalstring.'~'.$row5['OptionD'];
  //
  //
  // $stmt6 = $db->query("SELECT `OptionE`FROM `questions` WHERE `Question Number`='$ques_num'");
  // $row6= $stmt6->fetch(PDO::FETCH_ASSOC);
  // $finalstring = $finalstring.'~'.$row6['OptionE'];
  if($ques_num<=$number_of_questions)
  {
    $stmt7 = $db->query("SELECT `img_addr`FROM `questions` WHERE `Question Number`='$ques_num'");
    $row7= $stmt7->fetch(PDO::FETCH_ASSOC);
    $finalstring = $finalstring.'~'.$row7['img_addr'].'~';
  }
   else{
     $finalstring = $finalstring.'~~';
   }

}

?>
