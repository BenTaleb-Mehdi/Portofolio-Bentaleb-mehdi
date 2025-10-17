<?php

namespace App\Http\Controllers; // NOT Portfolio\App\Http\Controllers
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use App\Services\DevelopServices;



Class ControllerServices extends Controller {
    protected $developerServices;
         public function __construct(DevelopServices $developerServices){
            $this->developerServices = $developerServices;
         }


         public function home(){
            $developer = $this->developerServices->getProfile();
            return view('home',compact('developer'));
         }
    
}


