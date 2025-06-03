<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreatePM;

class PMController extends Controller
{
    public function index() {
        // return view('pages.create-pokemon');
    }
    public function create() {
        return view('pages.create-pokemon');
    }
    public function update() {
        return view('pages.edit-pokemon');
    }
}