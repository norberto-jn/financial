{{------------------------------------------------------------------------}}
{{--------------------------- TABELA DE TVs ------------------------------}}
{{------------------------------------------------------------------------}}
<section>
    <div class="l-table">
        <div class="l-header">

            <div class="c-header">
                <p class="c-title">TVs</p>
            </div>

            <div class="l-header-tr">
                <div class="c-header-th">Quant.</div>
                <div class="c-header-th">TVs</div>
                <div class="c-header-th">Valor Unitario</div>
                <div class="c-header-th">Valor Total</div>
            </div>

        </div>


        <div class="l-tbody">
            @foreach ($financialModel as $data )
            <form action="/update" method="POST">
                @csrf
                <input type="number" name="id" value="{{$data->id}}" style="display: none" />
                <div  class="l-tbody-tr">

                    <div class="c-tbody-td">
                        <input type="number" name='amount' value="{{$data->amount}}" class="c-update-product" />
                    </div>

                    <div class="c-tbody-td">
                        <input type="text" name='product' value="{{$data->product}}" class="c-update-product" readonly />
                    </div>

                    <div class="c-tbody-td">
                        R$
                        <input type="text" name='money' value="{{number_format($data->money, 2, ',', '.')}}" class="c-update-product" >
                    </div>


                    <div class="c-tbody-td">
                        R$
                        <input type="text" name='total' value="{{number_format($data->total, 2, ',', '.')}}" class="c-update-product" readonly />
                    </div>

                    <div class="c-btn-update">
                        <input type="submit" value="Salvar" class="" />
                    </div>

                    <div class="c-btn-delete">
                        <a href="/delete/{{$data->id}}">Deletar</a>
                    </div>

                </div>
            </form>
            @endforeach
        </div>
    </div>


    <div class="c-btn-add" onclick="show('tvs')"></div>
    <div class="l-save-product" id="tvs">
       <form action="/save" method="POST">
            @csrf
            <div>
                <input type="number" name="amount" class="c-input-save" id="">
            </div>
            <div>
                <input type="text" name="product" class="c-input-save" id="">
            </div>
            <div>
                <input type="text" name="money" class="c-input-save" id="">
            </div>
            <div>
                <input type="submit" class="c-input-save c-btn-save" value="salvar">
            </div>
       </form>
    </div>


</section>
