<?php
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condtion, $status = Response::FORBIDDEN)
{
    if (!$condtion) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}
function view($path, $attribute = [])
{
    extract($attribute);
    // it parse the assoc array and give us a key = variableName and value in value of that variable 
    // dd(base_path('views/') . $path);
    include_once base_path('views/' . $path);
}
