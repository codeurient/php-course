<!-- 


<input type="file"> HTML-də istifadə olunan bir form elementi növüdür və istifadəçiyə bir və ya 
daha çox fayl yükləmə imkanı verir. Faylları seçdikdən sonra, bu fayllar serverə göndərilə bilər.


1. name:
Serverdə faylın adını əldə etmək üçün istifadə olunur:  <input type="file" name="file">


2. accept:
Yalnız müəyyən tipdə faylları qəbul etmək üçün istifadə olunur (məsələn, şəkillər, PDF-lər): <input type="file" name="file" accept=".jpg, .jpeg, .png">


3. multiple:
Bir neçə fayl yükləməyə imkan verir: <input type="file" name="files[]" multiple>


-->

<!DOCTYPE html>
<html lang="en">
<body>


    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Fayl seçin:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Yüklə</button>
    </form>




</body>
</html>

