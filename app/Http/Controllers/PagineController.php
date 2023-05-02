<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class PagineController extends Controller
{
    public function index()
    {
        $data=Tache::paginate(4);
        return view("pagine",['data'=>$data]);
    }
}
