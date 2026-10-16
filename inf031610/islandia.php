<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1><a href="islandia.php">Zwiedzaj Islandię</a></h1>
    </header>

    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady
                <ol>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'islandia');
                    $query1 = "SELECT nazwa FROM obiekty WHERE idRodzaj = 10;";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "<li>" . $row['nazwa'] . "</li>";
                    }
                    ?>
                </ol>
            </li>
            <li>Siedliska zwierząt
                <ol>
                    <?php
                    $query2 = "SELECT nazwa FROM obiekty WHERE idRodzaj = 14;";
                    $result2 = mysqli_query($conn, $query2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<li>" . $row['nazwa'] . "</li>";
                    }

                    mysqli_close($conn);
                    ?>
                </ol>
            </li>
        </ul>
        <br>
    </aside>
    <main>
        <h2>Galeria</h2>
        <section>
            <img src="Strokkur.jpg" alt="">
        </section>
    </main>
    <footer>
        <p>Autor: xDabloy</p>
    </footer>
</body>

</html>