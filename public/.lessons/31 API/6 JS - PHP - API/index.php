<!DOCTYPE html>
<html lang="en">
<body>

    <h1>Currency Exchange</h1>
    <input type="number" id="number" placeholder="Məbləğ daxil edin">

    <select id="currency">
        <option value="EUR">EUR</option>
        <option value="AZN">AZN</option>
        <option value="GBP">GBP</option>
    </select>

    <button id="show_exchange_btn">Hesabla</button>

    <p id="show_exchange">Nəticə burada göstəriləcək...</p>


    <script>
        document.getElementById("show_exchange_btn").addEventListener("click", function () {
            const amount = document.getElementById("number").value;
            const currency = document.getElementById("currency").value;

            if (amount && currency) {
                // 1) PHP-ə sorğu göndər (fetch() metodu, məlumat göndərmək və qəbul etmək üçün istifadə olunur)
                fetch("process_exchange.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    // 2) body: Göndərilən məlumatdır. JSON.stringify(): JavaScript obyektini JSON formatına çevirir ki, server tərəfindən oxunsun.
                    body: JSON.stringify({ amount: amount, currency: currency })    // Göndərilən data:  { "amount": 10, "currency": "EUR" }
                }) // 3) Serverdən cavab Promise olaraq qaytarılır. Cavabı işləmək üçün .then() və ya async/await istifadə edilir.
                .then(response => response.json())
                .then(data => {
                    // Nəticəni göstər
                    document.getElementById("show_exchange").innerText = `${amount} USD -> ${data.convertedAmount} ${currency}`; 
                    // document.getElementById("show_exchange").innerHTML = JSON.stringify(data);      // {"convertedAmount":0.95}

                })
                .catch(error => {
                    console.error("Xəta:", error);
                    document.getElementById("show_exchange").innerText = 
                        "Hesablama zamani xəta baş verdi.";
                });
            } else {
                alert("Xahiş olunur məbləğ və valyutani seçin!");
            }
        });
    </script>
</body>
</html>
