@extends('templates.base')

@section('pageTitle', 'Home')

@section('mainContent')
<main> 
    <h1>Sono la home</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train['Azienda']}} -- {{$train['Stazione di partenza']}} -- {{$train['Stazione di arrivo']}} -- {{$train['Orario di partenza']}} -- {{$train['Orario di arrivo']}} -- {{$train['Codice Treno']}} -- {{$train['Numero Carrozze']}} -- {{$train['In orario']}} -- {{$train['Cancellato']}}
            </li>
        @endforeach
    </ul>
</main>
@endsection