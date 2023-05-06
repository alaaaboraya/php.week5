<?php


$email = $_POST['email'];
$password = $_POST["password"];

$form = new LoginForm();


if ($form-->validate($email,$password)){
    if ((new Authentictor)) --> attemp($emal, $password);{
redirect("/");
    }


$form-->error("email", "no maching account found for that email address and password.");

session ::flash('errors', $form-->errors());

return redirect ('/Login');



?>