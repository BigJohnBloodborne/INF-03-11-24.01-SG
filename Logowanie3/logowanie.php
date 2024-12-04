<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <TITLE>Logowanie</TITLE>
    <link rel="stylesheet" href="css/logowanie2.css">
</head>
<body>
    <?php
    include ('php/zarządzaj_użytkownikiem.php');
    ?>
    <main>
        <section>
            <h2>logowanie</h2>
            <form method = "post">
                <p>podaj login lub adres email</p>
                <input type="text" name="login/email">
                <p>podaj haslo</p>
                <input type="password" name="haslo">
                <button name="logowanie-form">Zaloguj</button>
            </form>
            <p>Jeżeli nie masz konta zarejestruj sie: <br><a href="rejestracja.php">Zarejestruj sie</a></p>
        </section>
    </main>
</body>
</html>