<?php 
  error_reporting(0);
  require 'conx.php';
  $sql = "SHOW PROCESSLIST";
  $query = $conexao->query($sql);
  $query->execute();
  for($i = 0; $row = $query->fetch(); $i++){
    $pid[$i] = $row["Id"];
    $pid_info[$i] = $row["Info"];
  }
  for($i = 0; $i < sizeof($pid); $i++){
    // echo $pid_info[$i] ."<br>";
    $pid_to_kill = $pid[$i];
    if($pid_info[$i] == "SHOW PROCESSLIST"){
        // echo $pid_to_kill . "<br>";
        // echo "<br>" . $pid_info[$i] . "<br>";
    }else{   
      $sql_kill = "KILL $pid_to_kill";
      $query_kill = $conexao->query($sql_kill);
      // $query_kill->execute();
    }
  }
?>
