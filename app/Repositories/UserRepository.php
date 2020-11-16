<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{

    public function __construct(User $model){

        $this->model=$model;

    }

    public function getAllTeachers(){
        return $this->model->where('type','teacher')->orderBy('name','asc')->get();
    }
}
?>