<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Country;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Filesystem;
use App\Submission;

class SubmissionController extends Controller
{
    public function __construct() {    
        $this->middleware('auth');
    }

    //show absrtact submssion form 
     public function index(){
    $countries = App\Country::get()->all();
    //dd($countries);
    return view('submission_form')->with('countries', $countries);
    }
}
