<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $userName = "Oleg";
        echo "<b>My name is </b> $userName <br>";
    ?>
    <br>
    <?php
        $a = "Hello"; //Строка
        $b = true; //Булево значени
        $c = 45; //Целое число
        $d = 4.2; //Число с плавающей точкой
        echo $a."<br>";
        echo $b."<br>";
        echo $c."<br>";
        echo $d."<br>";
    ?>
   
    <br>
    <?php
        $a = (int)'05';
        $b = (string)145.3;
        $c = (bool)-4;
    
        echo "Строка -> число -> строка: ".$a."<br>";
        /* Целое число не может начинаться с нуля,
        поэтому 05 превращается в 5*/
        
        echo "Число -> строка: ".$b."<br>"; //Очевидно
        
        echo "Число -> булево -> строка: ".$c."<br>";
        /* 1 — значит true. булева переменная становится
        false только при нуле, -4 — true */
    ?>
    <br>
    <?php
        $a = 5;
        $b = '05';
        var_dump($a == $b);
        // Сравнение с приведением типов
        // Одинаково потому что $b приводится к Int и отбрасывается 0
        
        echo '<br>';
    
        var_dump((int)'012345');
        // Целое число не может начинаться с нуля,
        // поэтому 01 превращается в 1
        
        echo '<br>';
    
        var_dump((float)123.00 === (int)123.0);
        // Строгое сравнение, без приведения
        // Значения разных типов
    
        echo '<br>';
    
        var_dump((int)0 === (int)'hello, world');
        // 'hello, world' не содержит цифр и парсится как ноль
    
        echo '<br>';

    ?>
    
    <?php
        
        $a = [1];
        $b = [2];
        
        echo "<br>Было: <br>";
        echo '$a = '.$a[0].'<br>';
        echo '$b = '.$b[0];
    
        $b[1] = $a[0];
        $a = $b[0];
        $b = $b[1];
    
        echo "<br><br>Стало: <br>";
        echo '$a = '.$a.'<br>';
        echo '$b = '.$b;
    ?>
    
    
</body>
</html>