<?php

namespace App\Repositories;

use App\Models\User;

class VisitRepository extends BaseRepository{

    public function __construct(Visit $model){

        $this->model=$model;
    
    }
    
}
?>