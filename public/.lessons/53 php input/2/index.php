<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>API Test</title>
</head>
<body>
  <h2>PHP API Test</h2>
  <button id="send">API-yə Məlumat Göndər</button>
  <pre id="result"></pre>

  <script>
    document.getElementById("send").addEventListener("click", async () => {
      try {
        const response = await fetch("http://localhost/php-course/api.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            id: 1,
            name: "Ali",
            email: "ali@example.com"
          })
        });

        const data = await response.json();
        document.getElementById("result").textContent = JSON.stringify(data, null, 2);
      } catch (error) {
        console.error("Xəta:", error);
      }
    });
  </script>
</body>
</html>
