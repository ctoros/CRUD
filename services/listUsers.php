<?php
    include("user.php");

  //$method = $_SERVER['REQUEST_METHOD'];
  
  //if($method=="get"){
    //echo "paso por geeeet";
    $user = new User();
    $users = Array();
//    $users = $user->listUsers2();
//    array_push($users, $user->listUsers());
    $users = $user->listUsers();
    
    echo json_encode($users);
    
    

    
    //echo json_encode($resp);
//    $jsonArray = json_encode($resp);
//	foreach($resp as &$valor) {
//    echo $valor;
//  }
 // }
  
	  
?>
