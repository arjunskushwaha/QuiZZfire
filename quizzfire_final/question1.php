<?php
session_start();
$_SESSION["ques_num"] = 1;
print str_pad('',4096)."\n";
ob_flush();
flush();
set_time_limit(45);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Round One</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

<!-- script here -->
<script type="text/javascript">
// function disable() {
//     document.getElementById("form7").disabled = true;
//     // document.getElementById("optionA").disabled = true;
//     // document.getElementById("optionB").disabled = true;
//     // document.getElementById("optionC").disabled = true;
//     // document.getElementById("optionD").disabled = true;
//     document.getElementById("Submit_button").disabled = true;
//   }
//
// function enable() {
//   document.getElementById("form7").disabled = false;
//   // document.getElementById("optionA").disabled = false;
//   // document.getElementById("optionB").disabled = false;
//   // document.getElementById("optionC").disabled = false;
//   // document.getElementById("optionD").disabled = false;
//   document.getElementById("Submit_button").disabled = false;
//
// }
function insert()
{
  if(window.XMLHttpRequest)
  {
    xmlhttp = new XMLHttpRequest();
  }
  else{
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
  }
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
      var str = xmlhttp.responseText;
      var i;
      var arr = str.split("~");
    //  if(arr[1]=='set')
    //   {
        if(arr[1]=='notover')
        {
          document.getElementById("formA").reset();
          document.getElementById('message').innerHTML=arr[0];
          document.getElementById('question').innerHTML=arr[2];
        }
        else
        {
          document.getElementById("formA").innerHTML='';
          document.getElementById('message').innerHTML=arr[0];
          document.getElementById('question').innerHTML=arr[2];
        }
        // document.getElementById('optionA_text').innerHTML=arr[3];
        // document.getElementById('optionB_text').innerHTML=arr[4];
        // document.getElementById('optionC_text').innerHTML=arr[5];
        // document.getElementById('optionD_text').innerHTML=arr[6];
        // document.getElementById('optionE_text').innerHTML=arr[7];
        if(arr[3]!='')
        {
          var str1 = "<img alt=\"theimageshouldbehere\"  class=\"img-fluid\" style=\"width: 100%\"  src=\""+arr[3]+"\">";
          document.getElementById('image_question').innerHTML=str1;
        }
        else
        {
          var str1 = "<img alt=\"theimageshouldbehere\" class=\"img-fluid\" style=\"width: 100%\" src=\"./img/2.jpg\">";
          document.getElementById('image_question').innerHTML=str1;
        }

        xmlhttp.abort();

        //enable();
      // }
      // else
      // {
      //
      // }
    }
  }


  parameters = 'text='+document.getElementById('form7').value;//+'&options='+checkedoptions;

  xmlhttp.open('POST','./php/update.inc.php',true);
  xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
  xmlhttp.send(parameters);


}
</script>


<!-- script end here -->





</head>

<body>
<section id="login" style="padding-top: 3cm; padding-bottom: 5cm;" >
   <div class="container" >
     <div class="row justify-content-md-center" >
        <div class="col-md-12">
                <!-- Form login -->
                    <div class="card card-cascade narrower">
                        <div class="view overlay hm-white-slight" id="image_question">
                        <img src="./img/2.jpg" class="img-fluid" style="width: 100%"></div>
                        <div class="card-body">
                             <p class="h4 text-center mb-4"><span id="question">Kya aayush chutiya h?</span></p>
                                <div class="container" >
                                 <div class="row justify-content-md-center" >
                                    <div class="col-md-5">
                                        <div class="md-form">
                                <form id="formA">
                                        <input type="text" id="form7" class="md-textarea"></input>
                                        <label for="form7">Answer</label>
                                    </div>
                                 </div></div>
                               <!--   <p class="h5 font-weight-normal">
                                 <input type="radio"> I Dont Know</p>
                                 <p class="h5 font-weight-normal">
                                 <input type="radio"> You Know</p>
                                 <p class="h5 font-weight-normal">
                                 <input type="radio"> Why </p>
                                 <p class="h5 font-weight-normal">
                                 <input type="radio"> I dont have</p> -->
                                 <div class="text-center">
                                 <input type="button" class="btn btn-primary" value="Submit" id="Submit_button" onclick="insert()">
                              </form>
                                <div id="message"></div>

                                 <!--  <button class="btn btn-primary">Skip</button> -->
                            </div>
                        </div>
                    </div>
                <!-- /Form login -->
          </div>
         </div>
       </div>
    </section>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
