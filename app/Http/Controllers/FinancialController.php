<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use App\Models\FinancialPlayers;
use App\Models\LaborValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{

    public function index()
    {
        // Lista os dados da tabela
        $financialModel = Financial::all();
        $financialPlayersModel=FinancialPlayers::all();
        $laborValueModel=LaborValue::all();
        $total=$this->generateTotal();
        return view(
            'welcome',
            [
                'financialModel' => $financialModel,
                'financialPlayersModel'=>$financialPlayersModel,
                'laborValueModel'=>$laborValueModel,
                'total'=>$total
            ]
        );
    }

    public function create()
    {
        //Retorna a View para criar um item da tabela

    }

    public function store(Request $request)
    {
        //Salva o novo item na tabela

        $amount=$request->amount;
        $product=$request->product;
        $money=(double)$request->money;
        $total=$amount*$money;

        $data=[
            'amount' => $amount,
            'product' => $product,
            'money'=>$money,
            'total'=>$total
        ];


        Financial::insert($data);

        return redirect('/');
    }

    public function show(Financial $financial)
    {
        //Mostra um item específco
    }

    public function edit(Financial $financial)
    {
        //Retorna a View para edição do dado
    }

    public function update(Request $request, Financial $financial)
    {
        //Salva a atualização do dado
        $request->validate([
            'amount'=>'required',
            'product'=>'required',
            'money'=>'required',
            'total'=>'required'
        ]);

        Financial::where('id','=',$request->id)->update([
            "amount"=>$request->amount,
            "product"=>$request->product,
            "money"=>$request->money,
            "total"=>(double)($request->amount*$request->money),
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        Financial::where('id', '=',$id)->delete();
        return redirect('/');
    }

    public function generateTotal(){
        $sum1 = Financial::all()->sum('total');
        $sum2=FinancialPlayers::all()->sum('total');
        $sum3=LaborValue::all()->sum('labor_values');
        $total=$sum1+$sum2+$sum3;
        return number_format($total, 2, ',', '.');
    }
}
