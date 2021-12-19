<?php

namespace App\Http\Controllers;

use App\Models\FinancialPlayers;
use Illuminate\Http\Request;

class FinancialPlayersController extends Controller
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
        //Salva o novo item na tabela

        $playersAmount=$request->playersAmount;
        $playersProduct=$request->playersProduct;
        $playersMoney=(double)$request->playersMoney;
        $playersTotal=$playersAmount*$playersMoney;

        $data=[
            'amount' => $playersAmount,
            'product' => $playersProduct,
            'money'=>$playersMoney,
            'total'=>$playersTotal
        ];


        FinancialPlayers::insert($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialPlayers  $financialPlayers
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialPlayers $financialPlayers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialPlayers  $financialPlayers
     * @return \Illuminate\Http\Response
     */
    public function edit(FinancialPlayers $financialPlayers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialPlayers  $financialPlayers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialPlayers $financialPlayers)
    {
        $request->validate([
            'playersAmount'=>'required',
            'playersProduct'=>'required',
            'playersMoney'=>'required',
        ]);

        FinancialPlayers::where('id','=',$request->playersId)->update([
            "amount"=>$request->playersAmount,
            "product"=>$request->playersProduct,
            "money"=>$request->playersMoney,
            "total"=>(double)($request->playersAmount*$request->playersMoney),
        ]);

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialPlayers  $financialPlayers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FinancialPlayers::where('id', '=',$id)->delete();
        return redirect('/');
    }
}
