<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlatController extends Controller
{
    public function index() {

        return view('admin.alat.alat',[
            'alats' => Alat::all(),
            'categories' => Category::all()
        ]);
    }
}