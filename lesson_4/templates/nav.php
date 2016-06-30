<?php
        
$pages = [
    'Главная страница' => 'main',
    'Каталог' => 'catalog',
    'Контакты' => 'contacts'
];



foreach ($pages as $name => $route) {
    if ($_GET['route'] == $route) {
        echo '<li><a href="#" class="passive">' . $name . '</a></li>';
    } else {
        echo '<li><a href="?route=' . $route . '" class="active">' . $name . '</a></li>';
    }
}
