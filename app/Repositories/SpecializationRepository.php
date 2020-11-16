<?php

namespace App\Repositories;

use App\Models\User;

class SpecializationRepository extends BaseRepository{

    public function __construct(Specialization $model){

        $this->model=$model;
    
    }
    
}
?>