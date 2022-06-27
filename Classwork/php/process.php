<?php
// echo "sent";
$arr =[

    'test'=> "testing",
]
echo $_POST[''];



function dump($data){
    echo"<pre>";
    var_dump($data);
    echo"</pre>";
    echo "<br>";
}
// dump($_SERVER);
// dump($_REQUEST);
// dump($_FILES);
// dump($_FILES);



if($_SERVER['REQUEST_SCHEME']=="http"){
    echo "using http";

}else{
    echo "not using http";
}
?>