<?php


//Константы ошибок

define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);


function layout($layoutName, $meta, $title, $body)
{
    render($layoutName, [
        "title" => $title,
        "body" => $body
    ]);
};

function render($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit(ERROR_NOT_FOUND);
    }
    
    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit(ERROR_TEMPLATE_EMPTY);
    }
    
    ob_start();
    extract($variables);
    include $file;
    return ob_get_clean();
};


function renderPage($route, $params)
{
    $out = layout(
        LAYOUT,
        TITLE,
        render(TPL_DIR . DIRECTORY_SEPARATOR . "")
    )
}
