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
            <form action="/update" method="POST">
                @csrf
                <input type="number" name="laborValueId" value="{{$data->id}}" style="display: none" />
                <tr>
                    <td>
                        R$
                        <input type="text" name='laborValueTotal' value="{{number_format($data->labor_values, 2, ',', '.')}}" class="c-update-product" readonly />
                    </td>
                    <td>
                        <input type="submit" value="salvar" />
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
    <div class="c-btn-add" onclick="show('orcamento')"></div>
    <div class="l-save-product" id="orcamento">
       <form action="/labor-value/save" method="POST">
            @csrf
            <div>
                <input type="number" name="laborValueId" class="c-input-save" id="" style="display: none;">
            </div>
            <div>
                <input type="text" name="laborValueTotal" class="c-input-save" id="">
            </div>
            <div>
                <input type="submit" class="c-input-save c-btn-save" value="salvar">
            </div>
       </form>
    </div>
</section>
