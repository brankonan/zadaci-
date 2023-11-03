
<?php
echo "<pre>";
//zadatak1


function deljiviSa3(){
    for ($i = 0; $i <=30; $i ++){
        if($i % 3 === 0){
            echo $i, "deljiv sa 3" ."<br>";
        }

    }
}

deljiviSa3();
echo "</pre>";
//zadatak2

echo "<pre>";

$brojevi = [];
function brojevi(){
    for($i = 0; $i <=30; $i++){
$brojevi = $i;
echo $i, "je broj u nizu" . "<br>" ;
    }
}

foreach($brojevi as $broj){
    echo $broj ;
}

brojevi();


echo "</pre>";

//zadatak3 
echo "<pre>";


function zbirCifara($broj){
    $zbir = 0;
while ($broj > 0 ){
    $cifra = $broj % 10;
    $zbir += $cifra;
    $broj = (int)($broj /10);

}
return $zbir;
}
$broj1 = 14;
$broj2 = 123;

echo "zbir cifara broj1 je" . zbirCifara($broj1) . "<br>";
echo "zbir cifara broj2 je" . zbirCifara($broj2);

echo "</pre>";

//zadatak4 

echo "<pre>";

function parniBrojevi(){
    for($i = 1; $i <= 30 ; $i ++){
        if($i % 2 === 0){
            echo $i . "je paran broj". "<br>";
        }
    }
}
parniBrojevi();

echo "</pre>";

//zadatak5 

echo "<pre>";

function deljivost(){
    for($i = 1; $i <= 30 ; $i ++){
        if($i % 3 === 0 && $i % 5 === 0){
            echo "foobar". "<br>";
        }elseif($i % 3 === 0){
            echo "foo" . "<br>";
        } elseif($i % 5 === 0){
            echo "bar". "<br>";
        } 

    }
}
deljivost();

echo "</pre>";

//zadatak6 JS

echo "<pre>";


