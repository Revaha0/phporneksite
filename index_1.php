<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reva Kart Bilgi Girişi</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="card-form">
        <h2>Yeni Nesil Reva Kart Bilgi Girişi</h2>
        <form id="cardForm">
            <label for="cardNumber">Kart Numarası:</label>
            <input type="text" id="cardNumber" name="cardNumber" maxlength="9" required>

            <label for="cardHolder">Kart Sahibi:</label>
            <input type="text" id="cardHolder" name="cardHolder" required>

            <label for="expiryDate">Son Kullanma Tarihi:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" maxlength="7" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" maxlength="3" required>

            <button type="button" onclick="submitForm()">Bilgileri Kaydet</button>

            <br>
            
<?php                                           // Random Sayı Üreteci
$x=rand(1,1000);
echo "<br>Rastgele Sayı:".$x."<br>";

echo "<br>";
echo"<br>";
echo "<br>";

$users = array("kullanici1"=>                   //İlişkisel  Dizi Oluşturma
    array(
        "id" => 1,
        "username" => "Revaha Öztekin 123428004",
        "email" => "Revaha@email.com",
    ),
    "kullanici2"=>array(
        "id" => 2,
        "username" => "Bilgi Üniversitesi ",
        "email" => "Bilgi.Üniversitesi@bilgiedu.tr",
    ),

);

echo "Kullanıcı adı: " . $users["kullanici1"]["username"]."<br>";
echo "E-posta: " . $users["kullanici2"]["email"];

?>

        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>