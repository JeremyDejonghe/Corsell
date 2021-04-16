<?php

class CryptPasswordController 
{
protected function cryptPassword($password) {
        // Cryptage mot de passe
        return password_hash($password, PASSWORD_DEFAULT);
    }
}