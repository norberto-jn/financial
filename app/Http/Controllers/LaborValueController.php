<?php

namespace App\Http\Controllers;

use App\Models\LaborValue;
use Illuminate\Http\Request;

class LaborValueController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $laborValueTotal=$request->laborValueTotal;

        $data=[
            'labor_values' => $laborValueTotal,
        ];

        LaborValue::insert($data);

        return redirect('/');
    }

    public function show(LaborValue $laborValue)
    {
        //
    }


    public function edit(LaborValue $laborValue)
    {
        //
    }

    public function update(Request $request, LaborValue $laborValue)
    {
        $request->validate([
            'laborValueTotal'=>'required',
        ]);

        LaborValue::where('id','=',$request->laborValueId)->update([
            "labor_values"=>$request->laborValueTotal,
        ]);

        return redirect('/');
    }

    public function destroy(LaborValue $laborValue)
    {
        //
    }
}
