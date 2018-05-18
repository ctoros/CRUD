<?php

include("user.php");

//$method = $_SERVER['REQUEST_METHOD'];
//if($method=="get"){
$user = new User();
$userss = Array();
$users = Array();
//    array_push($users, $user->listUsers());
$userss = $user->listUsers();
//echo count($userss);


//saco el numero de elementos
$longitud = count($userss);

//Recorro todos los elementos
for ($i = 0; $i < $longitud; $i++) {
    $usuario = new User();
//    
    $usuario->id = $userss[$i][0];
    $usuario->username = $userss[$i][1];
    $usuario->password = $userss[$i][2];

//    
//echo $userss[$i][0];
//echo $userss[$i][1];
//echo $userss[$i][2];
    
    
   array_push($users, $usuario);
}

print_r($users);
echo json_encode($users);


//foreach ($userss as $usuarios) {
//    echo "usuario: ";
//    foreach ($usuarios as $usuarios=>) {
//        echo $usuarios .  "\n ";
////    };
//;
//}
?>
