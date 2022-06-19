<?php     
  session_start(); 
   if ( !isset($_SESSION['username']) ) { 
     header("Location: anasayfa.php"); 
     exit(); 
    } 
   
   ?> 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>

        .btn-outline-success{
            position: relative;
            margin-left:40px;
        }
        
        .container1{
            position: relative;
            display: flex;
            justify-content: center;
            margin-top:100px;
        }
    </style>
</head>

      <div class="container1">
         <input type="button" value="Randevu Al" onClick=randevual() name="buttonRandevuAL">
         <input type="button" value="Randevularımı Görüntüle" onClick=randevugoruntule() name="buttonRandevularimiGoruntule">
         <a href='cikis.php'>[Oturumu Kapat]</a> 
      </div>
     

     
      <script>

      function randevual(){
         window.location="randevual.php";
      }

      function randevugoruntule(){
        
         window.location="randevulistele.php";
      }

      </script>
</html>