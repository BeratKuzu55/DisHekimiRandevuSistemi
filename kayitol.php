<?php 
   require ('mysqlbaglan.php'); 
   if (isset($_POST['kullaniciadi']) && isset($_POST['password'])){ 
    extract($_POST); 
    // sifre metni SHA256 ile şifreleniyor. 
    $password = hash('sha256', $password); 

    $sql="INSERT INTO `kullanicilar` (kullaniciadi, sifre, eposta)"; 
    $sql = $sql . "VALUES ('$kullaniciadi', '$password', '$email')"; 

       $cevap = mysqli_query($baglanti, $sql); 
   
       if ($cevap){ 
           $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>"; 
       }else{ 
           $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>"; 
       } 
   } 
   
   ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist</title>

    <style>

        *{
            font-family: 'MonteCarlo', cursive;
            font-family: 'Montez', cursive;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Moo Lah Lah', cursive;
        }

        body{
            margin: 0px;
        }

        .main{
            background-image: url(https://images.pexels.com/photos/8842704/pexels-photo-8842704.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
                
                min-height: 760px;
                position: relative;
                background-position-x: center;
                background-position: "center";
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
               
                
        }

        .form{

            position: relative;
            left:80px;
            top:100px;
            
        }

        .container1 {
        position: absolute;
        left: 30;
        margin: 0px;
        width: 250px;
        padding: 16px;
        background-color: #8E9479;
        border: 2px white;
        border-radius: 35px;
        }

        input[type=text], input[type=password] {
        width: 200px;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 92%;
        opacity: 0.65;
        }

        .btn:hover {
        opacity: 1;
        }

        a:link {
        color: yellow;
        }
        a:visited {
        color: purple;
        }

        a:visited {
        background-color: cyan;
        }
    </style>

</head>
<body >
    <div class= "main">

        
        <div class="form">
            
            <form action="<?php $_PHP_SELF ?>" method="POST" class="container1"> 
            <h1>Kayıt Ol</h1> </br>
            <label for kullaniciadi><b>Kullanıcı adı</b></label>  </br>
            <input type="text" placeholder="Kullanıcı adınızı giriniz" name="kullaniciadi" required>
            
            
            <label for="email"><b>Email</b></label>    </br>    
            <input type="text" placeholder="Mail Adresinizi Giriniz"  name="email" required  >
            
            </br> 
            <label for="psw"><b>Password</b></label>
            </br> 
            <input type="password" placeholder="Şifrenizi Giriniz" name="password" required>
            </br> 
            <button type="submit" class="btn">Kaydet</button>
            </br> 
            <a href="anasayfa.php">Griş Yap</a> 
        </form>
    </div>
    
           

    </div>
</body>
</html>
