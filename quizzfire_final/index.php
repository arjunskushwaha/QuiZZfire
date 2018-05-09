<?php
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
    <title>Log in</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

   <!-- script here -->
   <script>
   function trylogin(){
      console.log("came here");
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
          document.getElementById('message').innerHTML=xmlhttp.responseText;
         }
       }

       parameters = 'username='+document.getElementById('defaultForm-email').value +'&passwd='+ document.getElementById('defaultForm-pass').value;

       xmlhttp.open('POST','./php/login.inc.php',true);
       xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
       xmlhttp.send(parameters);
     }

  </script>
   <!-- script here -->



</head>

<body>
<section id="login" style="padding-top: 5cm; padding-bottom: 8cm;" >
   <div class="container" >
     <div class="row justify-content-md-center" >
        <div class="col-md-5">
                <!-- Form login -->
                    <div class="card card-cascade narrower">
                        <div class="view overlay hm-white-slight">
                        <img src="./img/2.jpg" class="img-fluid" ></div>
                        <div class="card-body">
                             <form>
                               <p class="h4 text-center mb-4">Log in</p>
                                <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control">
                                <label for="defaultForm-email">User Name</label>
                                </div>
                                <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control">
                                <label for="defaultForm-pass">Password</label>
                                </div>
                                <div class="text-center">
                                <input type="button" class="btn btn-default" onclick="trylogin()" value = "Login">
                                </div>
                                <div id="message"></div>
                            </form>
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
