<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Четвертый урок</title>
</head>
<body>
    
    <?php
    $file = 'test.txt';
    $data = 'hello, world!';
    $stream = fopen($file, 'w+');
    fwrite($stream, $data);
    fclose($stream);
    ?>
    
    <?php
    $file = 'test.txt';
    $stream = fopen($file, 'r');
    $buffer = '';
    while (!feof($stream)) {
        $buffer .= fread($stream, 1);
    }
    fclose($stream);
    echo $buffer;
    ?>
    
    <?php
    $file = 'test.txt';
    $stream = fopen($file, 'r');
    $buffer = fread($stream, filesize($file));
    fclose($stream);
    echo $buffer;
    ?>
    
    
    
    <?php
    
    /*
     * Чаще всего достаточно этого:
     */
    
    $file = 'test.txt';
    $data = 'hello, world';
    file_put_contents($file, $data);
    echo file_get_contents($file);
    
    ?>
    
    <?php
    
    $dir = './';
    $stream = opendir($dir);
    while ($item = readdir($stream)) {
        echo $item . "<br>";
    }
    
    closedir($stream);
    
    ?>
    
</body>
</html>