<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main >
        <div class="container">
            
            <table class="table">
                <thead class="bg-black text-white">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Ora di arrivo</th>
                    <th scope="col">Ora di partenza</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero carrozza</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->azienda}}</td>
                        <td>{{$train->stazione_di_partenza}}</td>
                        <td>{{$train->stazione_di_arrivo}}</td>
                        <td>{{$train->data_di_partenza}}</td>
                        <td>{{$train->ora_di_arrivo}}</td>
                        <td>{{$train->ora_di_partenza}}</td>
                        <td>{{$train->codice_treno}}</td>
                        <td>{{$train->n_carrozza}}</td>
                        <td>{{$train->in_orario}}</td>
                        <td>{{$train->cancellato}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </main>

</body>

</html>
