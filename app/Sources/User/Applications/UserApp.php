<?php

namespace App\Sources\User\Applications;

use App\Sources\User\Entities\UserEntity;

class UserApp
{
    /*
    |--------------------------------------------------------------------------
    | Application's Pattern
    |--------------------------------------------------------------------------
    |
    | The application's pattern is a layer which is the link between the model
    | and the controller. Here is the place to define the method action needed.
    | Recommended for always implement ONE METHOD ONE ACTION.
    | Rules: must be using TRY CATCH.
    |
    */

    /**
     * The constructor of UserApp class.
     *
     */
    public function __construct()
    {
        $this->user = new UserEntity;
    }

    public function createUser($request)
    {
        try {
            $user = $this->user->create($request);
            if (empty($user)) throw new \Exception("Error Processing Request", 400);
            return $user;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 400);
        }
    }

    public function updateUser($userId, $request)
    {
        try {
            $user = $this->user->whereId($userId)->update($request);
            if (! $user) throw new \Exception("Error Processing Request", 400);
            return $user;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 400);
        }
    }

    public function deleteUser($userId)
    {
        try {
            $user = $this->user->whereId($userId)->delete();
            if (! $user) throw new \Exception("Error Processing Request", 400);
            return $user;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 400);
        }
    }
}
