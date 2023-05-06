<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus14</h1>

        <?php

        //Harjutus 14
        //Kevin Joarand
        //04.05.2023

        $dir = "/Pildid"; // kausta nimi, kus pildid asuvad
		$files = glob($dir . "*.jpg"); // otsime kõik JPG-formaadis pildid kaustast
		$file = array_rand($files); // valime suvalise pildi
        ?>
        
        <img src="<?php echo $files[$file]; ?>" alt="Suvaline pilt">

        <?php
        $dir = "/Pildid"; // kausta nimi, kus pildid asuvad
        $cols = 3; // veergude arv

        $files = glob($dir . "*.jpg"); // otsime kõik JPG-formaadis pildid kaustast

        // loome tabeli, kus on veerud vastavalt $cols väärtusele
        echo "<table>";
        for ($i = 0; $i < count($files); $i++) {
            if ($i % $cols == 0) {
                echo "<tr>"; // uus rida
            }
            // loome pisipildi, mis linkib suuremale pildile
            echo "<td><a href='" . $files[$i] . "'><img src='" . $files[$i] . "' width='100'></a></td>";
            if ($i % $cols == $cols-1) {
                echo "</tr>"; // rida täis
            }
        }
        echo "</table>";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>