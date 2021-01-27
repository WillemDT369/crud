<?php 
require 'setup.php';
if (!empty($_POST['update'])) {    
   
    $id = $_GET['id'];
    $updateGame = $_POST['edit'];
    
    $cardRepository->update($id, $updateGame);
    header('location: index.php');
}

if (!empty($_POST['delete'])) {

    $id = $_GET['id'];
    $cardRepository->delete($id);
    header('location: index.php');
}
    

 require 'edit-view.php';