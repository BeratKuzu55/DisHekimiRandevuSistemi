<?php 
session_start(); 
   
require('mysqlbaglan.php'); 

 

if (isset($_POST['username']) and isset($_POST['password'])){ 

extract($_POST); 

 

// sifre metni SHA256 ile şifreleniyor. 

$password = hash('sha256', $password); 

$sql = "SELECT * FROM `kullanicilar` WHERE "; 
// kullanıcılar tablosunu getirdik

$sql= $sql . "kullaniciadi='$username' and sifre='$password'"; 
// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulmaya calıstık
 // yukarıdaki sql degiskenine ekleme yaptık

$cevap = mysqli_query($baglanti, $sql); 
//baglanti degiskenindeki database e baglandık ve sql formunu gonderdik 
//eger cevap FALSE ise hata yazdiriyoruz.       

if(!$cevap ){ 

    echo '<br>Hata:' . mysqli_error($baglanti); 

} 

//veritabanindan dönen satır sayısını bul 

$say = mysqli_num_rows($cevap); 
// tablodan kullanıcı adı ve şifresi eşleşen kullanıcıyı bulduk
if ($say == 1){ 

    $_SESSION['username'] = $username; 

 }else{ 

$mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 

 } 

} 

if (isset($_SESSION['username'])){ 

header("Location: uyesayfasi.php"); 

}else
{ 

//oturum yok ise login formu görüntüle  
   
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
            background-image: url(https://images.pexels.com/photos/1018425/pexels-photo-1018425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
                
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
            left:50px;
            top:80px;
            
        }

        .container1 {
        position: absolute;
        left: 30;
        margin: 0px;
        width: 250px;
        padding: 16px;
        background-color: #C7C7C7;
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

    </style>

</head>
<body >
    <div class= "main">

        
        <div class="form">
            
            <form action="<?php $_PHP_SELF ?>" method="POST" class="container1"> 
            <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            
            ?> 
            <h1>Kullanıcı Girişi</h1> </br>
            <label for="username"><b>Kullanıcı adı</b></label>  </br>
            <input type="text" placeholder="Kullanıcı adınızı giriniz" name="username" required>
            
            <!--
            <label for="email"><b>Email</b></label>    </br>    
            <input type="text" placeholder="Mail Adresinizi Giriniz"  name="email" required  >
            -->
            </br> 
            <label for="password"><b>Password</b></label>
            </br> 
            <input type="password" placeholder="Şifrenizi Giriniz" name="password" required>
            </br> 
            <button type="submit" class="btn">Giriş Yap</button>
            </br> 
            <a href="kayitol.php">Kayıt Ol</a> 
        </form>
    </div>
    
           

    </div>
</body>
</html>
<?php } ?>