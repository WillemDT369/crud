<?php 
require 'setup.php';
if (!empty($_POST['update'])) {    
   
    $id = $_GET['id'];
    $updateGame = $_POST['edit'];
    
    $cardRepository->update($id, $updateGame);
}

 require 'edit-view.php';