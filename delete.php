<?php
    require_once('Expired.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `expired` WHERE = 0";

        if($sql->expired($id) == TRUE){
             echo "Delete the data";
        }else{
             echo "something went wrong";
        }

    }else{
        //redirect to show
        die('id not provide');
    }

?>