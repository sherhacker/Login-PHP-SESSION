<?php
require_once 'logout.php';
$userSession = new UserSession();
$user = new User();




if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once '../vistas/tabla.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        echo "Existe el usuario";
    
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once '/vistas/tabla.php';

    }else{
        echo "No existe el usuario";
        
$errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once('/vistas/login.php');
    }
}else{
    echo "login";
    include_once 'vistas/login.php';
}

if(isset($_POST['logout'])){

}