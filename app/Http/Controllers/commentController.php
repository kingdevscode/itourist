<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Site;

class commentController extends Controller
{

    //Auteur paul
    public function index(){
        // affiche les commentaires
    }

    public function show($id){
        // affiche les commentaires sur un site ayant l'id = $id
    }

    public function store(){
        // stocke les commentaires
    }
}
