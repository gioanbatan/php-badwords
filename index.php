<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <title>Censura</title>
</head>

<body>
    <section class="text-container">
        <h1>Primo esercizio PHP</h1>

        <p>Inserisci un testo e la parola da censurare</p>

        <form action="result.php" method="GET">
            <label for="text">Testo da sottoporre a censura:</label>
            <textarea id="text" name="text" rows="5" cols="40" placeholder="Inserisci il testo qui..."></textarea>
            
            <label for="word">Inserisci la parola da censurare:</label>
            <input type="text" id="word" name="word" placeholder="Inserisci una parola">
            
            <br>

            <button type="submit">Invia!</button>

            <button type="reset">Reset</button>
        </form>

    </section>

</body>

</html>