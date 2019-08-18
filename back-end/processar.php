<?php
require_once 'database.php';
                                                        
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$select = $_POST['select'];
$description = $_POST['description'];

$banco = new Database();
$banco->adicionar($nome, $sobrenome, $email, $select, $description);