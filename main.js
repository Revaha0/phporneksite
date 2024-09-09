function submitForm() {
  var cardNumber = document.getElementById("cardNumber").value;
  var cardHolder = document.getElementById("cardHolder").value;
  var expiryDate = document.getElementById("expiryDate").value;
  var cvv = document.getElementById("cvv").value;

  var data = {
      cardNumber: cardNumber,
      cardHolder: cardHolder,
      expiryDate: expiryDate,
      cvv: cvv
  };

  //PHP'ye verileri gönderme
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "process.php", true);
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhr.send(JSON.stringify(data));

  xhr.onload = function () {
      if (xhr.status === 200) {
          alert(xhr.responseText); // Başarı veya hata mesajını göster
      } else {
          alert("Bir hata oluştu, tekrar deneyin.");
      }
  };
}
