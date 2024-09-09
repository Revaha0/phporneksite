<?php
class Database {
    // PDO veritabanı bağlantısı için gerekli bilgiler
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "kart_bilgileri";
    private static $dbConnection = null; // Tek bir static bağlantı değişkeni

    public static function getConnection() {
        if (self::$dbConnection === null) {
            // Yeni bir bağlantı oluşturur
            self::$dbConnection = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password);
            self::$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$dbConnection;
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mesaj_1 = "Başarıyla eklendi"; 

function mesajlar()
{
  echo $GLOBALS["mesaj_1"];
}

try {
    // PDO veritabanı bağlantısı al
    $conn = Database::getConnection();

    // POST verilerini al
    $data = json_decode(file_get_contents("php://input"));

    $cardNumber = $data->cardNumber;
    $cardHolder = $data->cardHolder;
    $expiryDate = $data->expiryDate;
    $cvv = $data->cvv;

    // Veritabanına ekleme işlemi
    $stmt = $conn->prepare("INSERT INTO kartlar (kart_numarasi, kart_sahibi, son_kullanma_tarihi, cvv) VALUES (:cardNumber, :cardHolder, :expiryDate, :cvv)");
    $stmt->bindParam(':cardNumber', $cardNumber);
    $stmt->bindParam(':cardHolder', $cardHolder);
    $stmt->bindParam(':expiryDate', $expiryDate);
    $stmt->bindParam(':cvv', $cvv);
    $stmt->execute();

    echo mesajlar(); // Globals Bağlantısı
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>

<?php
echo $_SERVER['SERVER_NAME']; // Server Name 
?>
