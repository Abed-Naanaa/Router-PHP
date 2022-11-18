
<?
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

echo $_SERVER;

function urlIs($value){
     $_SERVER['REQUEST_URI'] === $value;
}