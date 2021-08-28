<?php
// 1)Policy File Generated

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    // 3)Defining Policy Rules
    // public function isAdmin(User $user)
    // {
    //     return $user->email === 'admin@gmail.com';
    // } 
    // Note: This Way You can Add multiple Policy for Authorization

    // 8)Modify Policy Response During Defining Policy Rules
    public function isAdmin(User $user)
    {
        return $user->email === 'admin@gmail.com'
        ? Response::allow()
        : Response::deny('You are not allowed'); 
    } 
    // Note: It works with only authorize() Method
}
