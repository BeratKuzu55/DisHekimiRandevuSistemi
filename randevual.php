<?php
session_start(); 
if ( !isset($_SESSION['username']) ) { 
    header("Location: anasayfa.php"); 
    exit(); 
   } 


echo "merhaba " . $_SESSION['username'];
/*
if(isset($_POST['randevubutonu']))
{
    echo "merhaba2";
    $telefon = $_POST['telefon'];
    echo $telefon;
    $secilengun = $_POST['Selectgun'];
    $secilensaat = $_POST['Selectsaat'];
    echo "randevu olusturuldu";



}*/

?>
<!DOCTYPE html>
<html lang="en">
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

        .links{
            margin-left:40px;
        }
    </style>
</head>
<body>
        
            <form action="randevukaydet.php" method="POST">
                <div class="form-group fprm-group-sm">
                    <label for="exampleFormControlInput1">Telefon Numarası</label>
                    <input type="text" class="form-control" name="telefon" id="exampleFormControlInput1" placeholder="05xxxxxxxxx">
                </div>
                <div class="form-group fprm-group-sm">
                    <label for="exampleFormControlInput1">Gün</label>
                    <input type="text" class="form-control" name="Selectgun" id="exampleFormControlInput1" placeholder="Pazartesi">
                </div>
                <div class="form-group fprm-group-sm">
                    <label for="exampleFormControlInput1">Saat</label>
                    <input type="text" class="form-control" name="Selectsaat" id="exampleFormControlInput1" placeholder="11:50">
                </div>
                <div class="form-group fprm-group-sm">
                    <label for="exampleFormControlInput1">Kullanıcı Adınızı Giriniz</label>
                    <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="kullanıcı adı">
                </div>
               
                <!--
                <div class="form-group">
                    <label for="Selectgun">Randevu Günü Seçiniz</label>
                    <select class="form-control form-control-sm" id="Selectgun">
                    <option>Pazartesi</option>
                    <option>Salı</option>
                    <option>Çarşamba</option>
                    <option>Perşembe</option>
                    <option>Cuma</option>
                    <option>Cumartesi</option>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="Selectsaat">Randevu Saati Seçiniz</label>
                    <select multiple class="form-control" id="Selectsaat">
                    <option>10:30-11:30</option>
                    <option>13:30-14:30</option>
                    <option>14:50-15:50</option>
                    <option>16:20-17:20</option>
                    <option>17:30-18:30</option>
                    </select>
                </div>-->
                
                <input type="submit" class="btn btn-outline-success" name="submit" id="randevubutonuid" value="Randevu Oluştur">
            </form>

            <div class="links">
                <a href='cikis.php'>Oturumu Kapat|</a>
                <a href='uyesayfasi.php'>|uye sayfasina dön</a>
            </div>
            
        <script>
            var select1 = document.getElementById('Selectgun');
            var value1 = select1.options[select1.selectedIndex].value;
        </script>
</body>
</html>