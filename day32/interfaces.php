<?php

interface user_interface
{
    public function getUserInfo();
}

class user implements user_interface
{
    public $username = 'something';
    public $email = 'email@some.cz';

    public function getUserInfo()
    {
        return $this->username.' ('.$this->email.')';
    }
}

class facebookUser implements user_interface
{
    public function getUserInfo()
    {
        return 'Boo!';
    }
}


function displayUserInfo(user_interface $user)
{
    echo $user->getUserInfo();
}

$me = new user();
displayUserInfo($me);

$you = new facebookUser();
displayUserInfo($you);