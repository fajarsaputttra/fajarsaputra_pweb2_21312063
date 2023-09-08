<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Peran;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index',compact('peran')); 
    }
}