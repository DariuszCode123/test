<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository{

    
    protected $model;

    public function getAll($columns=array('*')){     //podranie wszystkich rekordów z tabeli
        return $this->model->get($columns); 
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($data, $id){
        return $this->model->where("id",'=',$id)->update($data);
    }

    public function delete($id){
        return $modelthis->model->destroy($id);
    }

    public function find($id){
        return $this->model->find($id);
    }

}
?>