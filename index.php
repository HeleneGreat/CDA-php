<?php require_once "song.php" ;?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Des bolées de cidre pour un CDA</title>
</head>
<body>
    
<form action="Song.php" method="post">
    <label for="quantity"></label>
    <input type="number" id="quantity" name="nbBolee" placeholder="Nombre de bolées">

    <input type="submit" value="Chante-moi ça !">
</form>


<!-- <?php if(isset($song)){ ;?> -->

    <div>
        <?= $partOne ;?>
        <?= $partTwo ;?>
    </div>


<!-- <?php } ;?> -->

</body>
</html>