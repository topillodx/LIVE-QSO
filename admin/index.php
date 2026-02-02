<?php
$message = '';
if(isset($_GET['msg'])) $message = $_GET['msg'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Admin LIVEQSOs</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body { font-family: Arial, sans-serif; background:#0b1220; color:#e5e7eb; padding: 20px;}
h1 { color:#22c55e; }
form { background:#020617; padding:20px; border-radius:12px; margin-bottom:20px; }
input[type="file"], textarea { width: 100%; padding:10px; margin-bottom:10px; border-radius:8px; border:none; }
input[type="submit"] { background:#22c55e; color:#000; padding:10px 18px; border:none; border-radius:10px; font-weight:bold; cursor:pointer; }
input[type="submit"]:hover { filter: brightness(1.1); }
.message { margin-bottom: 15px; color:#38bdf8; }
</style>
</head>
<body>

<h1>Panel Admin LIVEQSOs</h1>
<?php if($message) echo "<div class='message'>$message</div>"; ?>

<!-- SUBIR BASES -->
<form action="upload.php" method="post">
<h2>Subir nuevas bases</h2>
<textarea name="bases_text" rows="10" placeholder="Escribe o pega las bases aquí..."></textarea>
<input type="submit" name="submit_bases" value="Guardar Bases">
</form>

<!-- SUBIR BANNER -->
<form action="upload.php" method="post" enctype="multipart/form-data">
<h2>Cambiar Banner</h2>
<input type="file" name="banner_file" accept="image/*" required>
<input type="submit" name="submit_banner" value="Subir Banner">
</form>

<!-- SUBIR DIPLOMA -->
<form action="upload.php" method="post" enctype="multipart/form-data">
<h2>Cambiar Diploma</h2>
<input type="file" name="diploma_file" accept="image/*" required>
<input type="submit" name="submit_diploma" value="Subir Diploma">
</form>

</body>
</html>
