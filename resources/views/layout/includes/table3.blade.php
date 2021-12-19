{{------------------------------------------------------------------------}}
{{------------------------ TABELA DE MAO DE OBRA -------------------------}}
{{------------------------------------------------------------------------}}
<section>
    <table class="l-table">
        <thead>
            <tr class="c-header">
                <th colspan="5" class="c-title">Orçamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laborValueModel as $data )
            <form action="/labor-value/update" method="POST" onsubmit="return formatMoney('laborValueModel-money-{{$data->id}}')">
                @csrf
                <input type="number" name="laborValueId" value="{{$data->id}}" style="display: none" />
                <tr>
                    <td>
                        R$
                        <input type="text" name='laborValueTotal' value="{{number_format($data->labor_values, 2, ',', '.')}}" class="c-update-product" id="laborValueModel-money-{{$data->id}}"/>
                    </td>
                    <td>
                        <input type="submit" value="salvar" />
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
    <div class="c-btn-add" onclick="show('orcamento')" title="Clique aqui para adicionar um produto">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
          </svg>
    </div>
    <div class="l-save-product" id="orcamento">
       <form action="/labor-value/save" method="POST" onsubmit="return formatMoney('laborValueModel-money')">
            @csrf
            <div>
                <input type="number" name="laborValueId" class="c-input-save" id="" style="display: none;">
            </div>
            <div>
                <input type="text" name="laborValueTotal" class="c-input-save" id="laborValueModel-money">
            </div>
            <div>
                <input type="submit" class="c-input-save c-btn-save" value="salvar">
            </div>
       </form>
    </div>
</section>
