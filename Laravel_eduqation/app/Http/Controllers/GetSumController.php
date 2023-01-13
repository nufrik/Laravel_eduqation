<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetSumController extends Controller
{
    public function result(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $salary = $request->input('salary');

        return view('getsum.result', [
            'name' => $name,
            'age' => $age,
            'salary' => $salary,
        ]);
    }
    public function form()
    {
        return view('getsum.form');
    }
}
