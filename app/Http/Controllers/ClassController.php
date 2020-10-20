<?php
namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\SubClass;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $class = Classes::all();
        return response()->json([
                'class' => $class,
                'code' => 200,
                'message' => 'ok'
            ]);

    }

    public function classdetail($class)
    {
        $classdetail = Classes::with([
                            'subclass' => function($sub){
                                $sub->with('materies');
                            }
                        ])
                        ->where('idclass',$class)
                        ->first();
        
        return response()->json([
            'classdetail' => $classdetail,
            'code' => 200,
            'message' => 'ok'
        ]);

    }
}