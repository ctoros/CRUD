<?php
    include("user.php");

  //$method = $_SERVER['REQUEST_METHOD'];
  
  //if($method=="get"){
    //echo "paso por geeeet";
    $user = new User();
    $resp = Array($user->listUsers());
    

    
    //echo json_encode($resp);
//    $jsonArray = json_encode($resp);
//	foreach($resp as &$valor) {
//    echo $valor;
//  }
 // }
  
	  
?>
