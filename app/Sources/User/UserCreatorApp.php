<?php

namespace App\Sources\User;

class UserCreatorApp   {

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
     * The constructor of UserCreatorApp class.
     *
     */
    public function __construct()
    {

    }

    public function index()
    {
        try {
            // your code ...
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 400);
        }
    }
}
