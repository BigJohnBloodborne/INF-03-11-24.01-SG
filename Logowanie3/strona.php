<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Sklemp</title>
        <link rel="stylesheet" href="css/strona.css">
    </head>
    <body>
        <?php
        include ('php/zarządzaj_użytkownikiem.php');
        ?>
        <header>
            <section id="logo">
                <img src="imgsĄvids/bloodborne.jpg" id="bloodborneLogo">
            </section>
            <section id="Onas">
                <a href="#" style="color:white"><h1>O nas</h1></a>
            </section>
            <section id="Aktualności">
                <a href="#" style="color:white"><h1>Aktualności</h1></a>
            </section>
            <section id="Koszyk">
                <a href="#" style="color:white"><h1>Koszyk</h1></a>
            </section>
            <section id="pfp">
                <img src="imgsĄvids/defaultprof.png" id="defaultProf">
            
                <section class="dropdown-nav">
            <a style=color:white>Dane użytkownika</a>
            <form method="POST">
                <button type="submit" name="wyloguj"><a>Wyloguj<span class="icon-logout"></span></button></a>
        </section>
            </section>
            </header>
        <main>
        </main>
        <footer>
            <h2>Autor: adsfasboiadbs</h2>
        </footer>
    </body>
</html>