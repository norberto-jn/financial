<?php

namespace App\Http\Controllers;

use App\Models\FinancialPlayers;
use Illuminate\Http\Request;

class FinancialPlayersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    function store(Request $request)
    {
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

    public function show(FinancialPlayers $financialPlayers)
    {
        //
    }

    public function edit(FinancialPlayers $financialPlayers)
    {
        //
    }

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

    public function destroy($id)
    {
        FinancialPlayers::where('id', '=',$id)->delete();
        return redirect('/');
    }
}
