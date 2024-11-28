<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <TITLE>Rejestracja</TITLE>
    <link rel="stylesheet" href="css/rejestracja.css">
</head>
<body>
    <?php
    include ('php/zarządzaj_użytkownikiem.php')
    
    ?>
    <main>
        <section>
            <h2>Rejestracja</h2>
            <form method="post">
            <div>
                <div class="blok-lewy">
                <p>Login</p>
                <input type="text" name="login" required>
                <p>Email</p>
                <input type="email" name="email" required>
                <p>Imie</p>
                <input type="text" name="imie" required>
            </div>
            <div class="blok-prawy">
                <p>Nazwisko</p>
                <input type="text" name="nazwisko" required>
                <p>haslo</p>
                <input type="password" name="haslo1" required>
                <p>powtorz haslo</p>
                <input type="password" name="haslo2" required>
            </div>
        </div>
            <button type="submit" name="rejestracja-form">Zarejestruj</button>
            </form>
            <p>Jeżeli masz juz konto zaloguj sie: <br><a href="logowanie.php">Zaloguj sie</a></p>
        </section>
    </main>
</body>
</html>