<?php 

if(isset($_POST['saving_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    echo 'saved';
   
    echo $description;

    $query = "INSERT INTO productos(nombre,detalle) VALUES($title,$description)";

}
?>