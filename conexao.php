<?php
    function conexao(){
      $host = "localhost";
      $user = "root";
      $senha = "";
      $banco = "aulaphp";
  
      $con2 =mysqli_connect($host, $user, $sernha, $banco);

      return $con2;
    }
?>
