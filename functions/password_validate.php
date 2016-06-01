<?php
function ps_validate($password){
try{
   if(strlen($password)<5){
    throw new Exception("Password should be at least 5 characters!");
     
   }else if(!preg_match('/[A-Z]+/',$password)){
      throw new Exception("Password should be at least one uppercase character!");
   }
}catch(Exception $e){
    
     return $e->getMessage();
}
           return "ok"; 
}
?>