<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; //model User

use App\Repositories\UserRepository;

class nauczycielController extends Controller
{
    public function index(UserRepository $userRepo){
        
        $users=$userRepo->getAllTeachers();

        return view('nauczyciele.list',["nauczycieleList"=>$users,
                        "footerYear"=>date("Y"),
                        "title"=>"moduł nauczycieli"]);
    }

    public function show(UserRepository $userRepo, $id){
        
        $nauczyciel=$userRepo->find($id);

        return view('nauczyciele.show',["nauczyciel"=>$nauczyciel,
                        "footerYear"=>date("Y"),
                        "title"=>"moduł nauczyciele"]);        
    }

    public function create(UserRepository $userRepo){
        
        $userRepo->create([
            'name'=>'JAnek Kowalewskytttttt',
            'email'=>'liooopyrtyowa7s000@tam.plk',
            'password'=>bcrypt('ZAQ!2wsx'),
            'phone'=>79245000,
            'adress'=>" Katowice Wolności 7",
            'status'=>'on',
            'pesel'=>'7005003170',
            'type'=>'teacher'                              
            ]);
            
        return redirect('nauczyciele');
                 
    }

    public function edit(UserRepository $userRepo, $id){

        $nauczyciel=$userRepo->update(["name"=>"Nowy Modyfikator"], $id);

        return redirect('nauczyciele');

}
}