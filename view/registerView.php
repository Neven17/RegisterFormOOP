<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registracija</title>
</head>
<body>

    <form action="../controller/registerController.php" method="post">

    Ime: <input type="text" name="ime" required><br>
    Prezime: <input type="text" name="prezime" required><br>
    Broj mobitela: <input type="text" name="brojMob" required><br>
    Lozinka: <input type="password" name="lozinka" required><br>
    Ponovljena lozinka: <input type="password" name="ponLozinka" required><br>
    <input type="submit" value="REGISTRIRAJ">
</form>

</body>
</html>