<?php

function onErrorFunction()
{
   echo 'Enter correct value';
}

set_error_handler('onErrorFunction');

class User
{

}

    function getFullName(User $user) //контоль типов
    {
    }

    $user1 = new User;


echo getFullName($user1);
echo getFullName('string');

