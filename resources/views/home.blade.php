<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Treni:</h1>
                <table class="table table-dark">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Stazione di Arrivo</th>
                        <th scope="col">Orario di Partenza</th>
                        <th scope="col">Orario di Arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">In Orario</th>
                        <th scope="col">Cancellato</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $item)
                            <tr>
                                <th scope="row">{{$item['id']}}</th>
                                <td>{{$item['azienda']}}</td>
                                <td>{{$item['stazione_partenza']}}</td>
                                <td>{{$item['stazione_arrivo']}}</td>
                                <td>{{$item['orario_partenza']}}</td>
                                <td>{{$item['orario_arrivo']}}</td>
                                <td>{{$item['codice_treno']}}</td>
                                <td>{{$item['numero_carrozze']}}</td>
                                <td>
                                    @if ($item['in_orario'] == 0)
                                        No
                                    @else
                                        Si
                                    @endif
                                </td>
                                <td>
                                    @if ($item['cancellato'] == 0)
                                        No
                                    @else
                                        Si
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                
                    
                
            </div>
        </div>
    </div>
    
</body>
</html>