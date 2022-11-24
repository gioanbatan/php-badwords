<?php
$user_text = $_GET['text'];
$user_word = $_GET['word'];

echo "Debug: <br>";
var_dump($user_text);
echo "<br>";
var_dump($user_word);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Censura - <?php echo"{$user_world}" ?></title>
</head>
<body>
    <section class="text-container">
        <h1>Risultato:</h1>
    
        <p>Testo inserito:</p>

        <?php echo "test";?>
        <?php echo"{$user_text} <br>" ?>
        <?php echo"{$user_word}" ?>
        
    </section>
</body>
</html>