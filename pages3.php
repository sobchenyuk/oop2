<?php

class User
{
    public $firstname;
    public $lastname;

}

function getFullName(User $user)
{
    return $user->firstname .' '. $user->lastname .' ';
}

$user1 = new User;
$user1->firstname = 'Alex';
$user1->lastname = 'Jones';
echo getFullName($user1);

class SuoerUser extends User
{
}

$user2 = new SuoerUser;
$user2->firstname = 'Jack';
$user2->lastname = 'Sparrow';
echo getFullName($user2);