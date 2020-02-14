<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;

class PersonnelController extends Controller
{

    public function index()
    {
        $data = Personnel::all();
        return $data;
    }

}
