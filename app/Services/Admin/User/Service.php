<?php

namespace App\Services\Admin\User;

use App\Models\User;

class Service
{
    public function store($data){
        User::create($data);
    }


    public function update($user, $data){
        $user->update($data);

    }
}
