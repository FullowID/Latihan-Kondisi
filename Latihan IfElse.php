<!DOCTYPE html>
<html>
    <head>
        <title>
            Latihan Konversi Nilai
        </title>
    </head>

    <body>
        <h1>Konversi Nilai</h1>
        <form action = "" method = "POST">
            <input type = "text" name = "nilai" placeholder = "Nilai">
            <input type = "submit" value = "Submit">
        </form>
    </body>
</html>

<?php
    $nilai = $_POST['nilai'];
    if ($nilai >= 0 and $nilai <= 49){

        echo "Anda mendapat nilai E";
    }
    else if ($nilai >= 50 and $nilai <= 59){

        echo "Anda mendapat nilai D";
    }
    else if ($nilai >= 60 and $nilai <= 69){
        echo "Anda mendapat nilai C";
    }
    else if ($nilai >= 70 and $nilai <= 79){
        echo "Anda mendapat nilai B";
    }
    else if ($nilai >= 80 and $nilai <= 100){
        echo "Anda mendapat nilai A";
    } else {
        echo "Nilai Tidak Valid";
    }

?>