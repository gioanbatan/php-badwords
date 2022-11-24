<?php
$user_text = $_GET['text'];
$user_word = trim($_GET['word']);
$censored_text = str_replace($user_word, "***", $user_text);

echo "<pre>";
echo "Debug: <br>";
var_dump($user_text);
echo "<br>";
var_dump($user_word);
echo "</pre>";
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
    
        <h2>Testo inserito:</h2>

        <p class="result-text">
            <?php echo $user_text; ?>
        </p>

        <p>Il testo è costituito da <?php echo strlen($user_text); ?> caratteri.</p>
        
        <h2>Testo censurato:</h2>

        <p class="result-text beep">
            <?php echo $censored_text; ?>
        </p>

        <p>
            Il nuovo testo è lungo <?php echo strlen($censored_text); ?> caratteri.
        </p>
        
    </section>
</body>
</html>