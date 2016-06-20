<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    /*
     * Функция создающая заголовок с именем и временем суток
     */
    
    function caption($daytime, $name)
    {
        switch ($daytime) {
            case morning:
                echo "<h1>Good morning, ".$name."</h1>";
                break;
            case day:
                echo "<h1>Good afternoon, ".$name."</h1>";
                break;
            case evening:
                echo "<h1>Good evening, ".$name."</h1>";
                break;
            case night:
                echo "<h1>Good night, ".$name."</h1>";
                break;
            default:
                echo "<h1>Hello, ".$name."</h1>";
        }
            
    }
        
    caption("night", "Oleg");
    caption("day", "Max");
    
    ?>
    
    <h2>Вывод чисел от n до нуля с помощью цикла</h2>
    
    <?php
    
    /*
     * Функция выводящая все целые числа от n до нуля
     */
    
    function numerizer($nMax)
    {
        for ($i = $nMax; $i >= 0; $i -= 1) {
            echo $i." ";
        }
    }
    
    numerizer(8);
    
    ?>
    
    <h2>Вывод чиел от n до нуля с помощью рекурсии</h2>
    
    <?php
    
    /*
     * Рекурсивная функция выводящая все целые числа от n до нуля
     */
    
    function recursion($nMax, $mCurrent)
    {
        if ($nMax > $mCurrent) {
            recursion($nMax, $mCurrent + 1);
        }
        
            echo $mCurrent." ";
        
    }
    
    recursion(8, 0);

    ?>
    
</body>
</html>