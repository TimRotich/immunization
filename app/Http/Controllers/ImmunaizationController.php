<?php

namespace App\Http\Controllers;

use App\Models\immunaization;
use Illuminate\Http\Request;

class ImmunaizationController extends Controller
{



    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'disease' => 'required',
            'medicine' => 'required',

        ]);

        $store = immunaization::create(request(['name', 'age', 'sex','disease','medicine',]));

//        auth()->login($user);

        return redirect()->to('/newimmune');
    }
}
