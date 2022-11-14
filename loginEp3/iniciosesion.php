<?php 
    require_once("config.php");
    $usuario ="diego";
    $clave = "diegoisil";
    $rs = mysqli_query($cn,"SELECT * from cliente where usuario ='$usuario'");
    if($rs->num_rows == 1){
        $row = $rs->fetch_assoc();
        if($row["clave"] == $clave){
            $res[] = $row;
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
        }
        else{
            echo "-2";
        }
    }
    else{
        echo "-1";
    }
    $cn->close();
?>