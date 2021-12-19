<?php

namespace App\Http\Controllers;

use App\Models\LaborValue;
use Illuminate\Http\Request;

class LaborValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laborValueTotal=$request->laborValueTotal;

        $data=[
            'labor_values' => $laborValueTotal,
        ];

        LaborValue::insert($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaborValue  $laborValue
     * @return \Illuminate\Http\Response
     */
    public function show(LaborValue $laborValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaborValue  $laborValue
     * @return \Illuminate\Http\Response
     */
    public function edit(LaborValue $laborValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaborValue  $laborValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaborValue $laborValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaborValue  $laborValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaborValue $laborValue)
    {
        //
    }
}
