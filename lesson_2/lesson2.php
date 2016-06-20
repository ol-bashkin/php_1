<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 2</title>
</head>
<body>
   <h1>Добро пожалуйста</h1>
    <?php
    
        define ('MIN_AGE', 18);
    
        $age = 7;
    
        if ($age < MIN_AGE) {
            
            ?>
            
            <p>Молод ишшо</p>
            
            <?php
            
        }
        else {
            ?>
            
            <p>Вельком</p>
            
            <?php
        }
    
    ?>
</body>
</html>