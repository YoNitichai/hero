<?php
    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM nitichai WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>