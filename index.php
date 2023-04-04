<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Linting</title>
</head>
<body>
    <h1>PHP Basic Linting</h1>
    <hr/>
    <form action="index.php" method="get">
        <input type="text" name="name" placeholder="Naam" />
        <input type="text" name="surname" placeholder="Voornaam" />
        <input type="submit" value="Versturen" />
    </form>
    <?php
    require_once 'controller/getFormData.php';

    if (isset($_GET['name']) && isset($_GET['surname'])) {
        $name = $_GET['name'];
        $surname = $_GET['surname'];

        echo makeWelcomeMessage($name, $surname);
    }
    ?>
</body>
</html>