<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Poznaj Europe</title>
        <link rel="stylesheet" href="styl9.css">
    </head>
    <body>
        <header>
            <h1>BIURO PORDÓŻY</h1>
        </header>
        <aside>
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200zł</td>
                </tr>
            </table>
        </aside>
        <main>
            <h2>Wtym roku jedziemy do...</h2>
            <?php
            $db = mysqli_connect('localhost',  'root', '', 'podróże');
            $q = 'SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis;';
            $result = mysqli_query($db, $q);

            while($row = mysqli_fetch_array($result)){
               echo '<img src="'.$row['nazwaPliku'].'" alt="'.$row['podpis'].'" title"'.$row['podpis'].'">';
            }
            ?>

        </main>
        <aside>
            <h2>Kontakt</h2>
            <a href="mailto: biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </aside>
        <section>
            <h3>W poprzednich latach byliśmy...</h3>
            <ol>
                <?php
                $q = 'SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0;';
                $result = mysqli_query($db, $q);
                while($row = mysqli_fetch_array($result)){
                    echo '<li>Dnia'.$row["dataWyjazdu"].' pojechalismy do '.$row["cel"].'</li>';
                } 
                ?>
            </ol>
        </section>
        <footer>
            <p>Strone wykonał:dfbghnm</p>
        </footer>
    </body>
</html>