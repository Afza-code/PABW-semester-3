<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = [[
            'name' => 'yudi',
            'major' => 'sikc',
            'age' => 23,
            'courses' => ['Pemrograman Web', 'Database', 'Cloude Computing']
        ],[
            'name' => 'Siti',
            'major' => 'Manajemen',
            'age' => 21,
            'courses' => ['Manajemen Data', 'Akutansi', 'Matematika']
        ]
        ];

        return view('students.index', compact('students'));
    }
}
