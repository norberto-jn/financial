{{------------------------------------------------------------------------}}
{{-------------------------- TABELA DE PLAYERS ---------------------------}}
{{------------------------------------------------------------------------}}
<section>
    <div class="l-table">
        <div class="l-header">
            <div class="c-header">
                <span colspan="5" class="c-title">TVs</span>
            </div>
            <div class="l-header-tr">
                <div class="c-header-th">Quant.</div>
                <div class="c-header-th">TVs</div>
                <div class="c-header-th">Valor Unitario</div>
                <div class="c-header-th">Valor Total</div>
            </div>
        </div>
        <div class="l-tbody">
            @foreach ($financialPlayersModel as $data )
            <form action="/players/update" method="POST"  onsubmit="return formatMoney('money-{{$data->id}}')">
                @csrf
                <input type="number" name="playersId" value="{{$data->id}}" style="display: none" />
                <div  class="l-tbody-tr">

                    <div class="c-tbody-td">
                        <input type="number" name='playersAmount' value="{{$data->amount}}" class="c-update-product" />
                    </div>

                    <div class="c-tbody-td">
                        <input type="text" name='playersProduct' value="{{$data->product}}" class="c-update-product" readonly />
                    </div>

                    <div class="c-tbody-td">
                        R$
                        <input type="text" name='playersMoney' value="{{number_format($data->money, 2, ',', '.')}}" class="c-update-product" id="money-{{$data->id}}" />
                    </div>


                    <div class="c-tbody-td">
                        R$
                        <input type="text" name='playersTotal' value="{{number_format($data->total, 2, ',', '.')}}" class="c-update-product"readonly />
                    </div>

                    <div class="c-btn-update">
                        <input type="submit" value="Salvar" class="" />
                    </div>

                    <div class="c-btn-delete">
                        <a href="/players/delete/{{$data->id}}">Deletar</a>
                    </div>

                </div>
            </form>
            @endforeach
        </div>
    </div>

    <div class="c-btn-add" onclick="show('players')"></div>

    <div class="l-save-product" id="players">
       <form action="/players/save" method="POST">
            @csrf
            <div>
                <input type="number" name="playersAmount" class="c-input-save" id="">
            </div>
            <div>
                <input type="text" name="playersProduct" class="c-input-save" id="">
            </div>
            <div>
                <input type="text" name="playersMoney" class="c-input-save" id="">
            </div>
            <div>
                <input type="submit" class="c-input-save c-btn-save" value="salvar">
            </div>
       </form>
    </div>
</section>
