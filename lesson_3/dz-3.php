<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание по PHP урок 3</title>
    
    
</head>
<body>
  
    <style>
    
        .passive {
            text-decoration: none;
            color: #ccc;
            cursor: default;
        }
        
        .active {
            color: #39c;
        }
        
    </style>
  
   
   <?php
    
    $page = [];
    
    $page[0] = [
        'link' => "#"
    ];
    
    $page[1] = [
        'link' => 'dz-3.php?page=1',
        'text' => 'Lorem ipsum dolores est'
    ];
    
    $page[2] = [
        'link' => 'dz-3.php?page=2',
        'text' => 'Это текст второй страницы'
    ];
    
    $page[3] = [
        'link' => 'dz-3.php?page=3',
        'text' => 'Это текст третьей страницы'
    ];
    
    $page[4] = [
        'link' => 'dz-3.php?page=4',
        'text' => 'Это текст четвертой страницы'
    ];
    
    
    

    
    function linker($pageArray)
    {
        if (substr($pageArray['link'], -1) == $_GET['page']) {
            
            return '#';
            
        } else {
            
            return $pageArray['link'];
            
        }
        
    }
    
    
    function texter($pageArray)
    {
        return $pageArray[$_GET['page']]['text'];
    }
    
    function classer($pageArray)
    {
        if (substr($pageArray['link'], -1) == $_GET['page']) {
            
            return 'passive';
            
        } else {
            
            return 'active';
            
        }
    }
    
    ?>
    
    <ul>
        <li><a href="<?php echo linker($page[1]) ?>" class="<?php echo classer($page[1]) ?>">Главная страница</a></li>
        <li><a href="<?php echo linker($page[2]) ?>" class="<?php echo classer($page[2]) ?>">Вторая страница</a></li>
        <li><a href="<?php echo linker($page[3]) ?>" class="<?php echo classer($page[3]) ?>">Третья страница</a></li>
        <li><a href="<?php echo linker($page[4]) ?>" class="<?php echo classer($page[4]) ?>">Четвертая страница</a></li>
    </ul>
    
    <p>
        <?php echo texter($page) ?>
    </p>
    
    
    
    
</body>
</html>