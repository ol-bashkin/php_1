<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
   
   <h1>Массивы</h1>
    <?php
        $array = [
        '123',
        '456',
        '789'
        ];

        $array[] = '012';
    
        print_r($array);
        
    ?>
    
    <h2>Ассоциированные массивы</h2>
    
    <?php
    
        $users = [];
        
        $users[0] = [
            'name' => 'Alex',
            'email' => 'alex@example.com'
        ];
    
        $users[1] = [
            'name' => 'George',
            'email' => 'george@domain.ru',
            'additionalData' => 'Всем привет'
        ];
    
        $users[3] = [
            'name' => 'Michael',
            'email' => 'mich@test.com'
        ];
    
        function userExists($id)
        {
            global $users;
            return isset($users[$id]);
        }
    
        function getUser($id)
        {
            global $users;
            if (isset($users[$id])) {
                echo $users[$id]['name']. '<br />';
                echo $users[$id]['email']. '<br />';
                if (isset($users[$id]['additionalData'])) {
                    echo $users[$id]['additionalData'];
                }
            }
            return false;
        }
    
        if (userExists(3)) {
            getUser(3);
        }
    
    ?>
    
    <h2>Суперглобальные массивы</h2>
    
    <?php
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'index';
    
    switch ($page) {
        case 'about':
            echo 'О сайте';
            break;
        case 'index':
            echo 'Главная страница';
            break;
    }
    ?><br><br><?php
    var_dump($_GET);
    
    ?>
    
    
    <h2>Циклы</h2>
    
    <?php
    
    foreach ($users as $id) {
        foreach ($id as $key => $value) {
            echo $key.' = '.$value.'<br>';
        }
        echo '<br>';
    }
    
    ?>
    
    
</body>
</html>