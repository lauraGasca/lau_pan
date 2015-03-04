<?php namespace Panaderia\Repositories;

use Panaderia\Entities\User;

class UserRepo extends BaseRepo
{
        
    public function getModel()
    {
        return new User();
    }

    public  function newUser()
    {
        $user = new User();
        return $user;
    }
}
