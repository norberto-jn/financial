<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <title>Document</title>
</head>
<body class="home">
    @include('layout.includes.table1')
    @include('layout.includes.table2')
    @include('layout.includes.table3')
    <table class="l-table">
        <thead>
          <tr>
            <th scope="col" colspan="2">Orçamento</th>
          </tr>
          <tr>
            <th scope="col">Investimento Incial</th>
            <th scope="col">Mensalidade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                R$
                {{$total}}
            </td>
            <td></td>
          </tr>
        </tbody>
    </table>
    <script src="js/main.js"></script>
</body>
</html>
