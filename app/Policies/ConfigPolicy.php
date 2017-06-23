<?php

namespace App\Policies;

use App\User;
use App\Config;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConfigPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the config.
     *
     * @param  \App\User  $user
     * @param  \App\Config  $config
     * @return mixed
     */
    public function view(User $user, Config $config)
    {
        //
    }

    /**
     * Determine whether the user can create configs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == 1 ? true : false;
    }

    /**
     * Determine whether the user can update the config.
     *
     * @param  \App\User  $user
     * @param  \App\Config  $config
     * @return mixed
     */
    public function update(User $user, Config $config)
    {
        return $user->id == 1 ? true : false;
    }

    /**
     * Determine whether the user can delete the config.
     *
     * @param  \App\User  $user
     * @param  \App\Config  $config
     * @return mixed
     */
    public function delete(User $user, Config $config)
    {
        return $user->id == 1 ? true : false;
    }
}
