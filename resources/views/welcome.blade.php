@extends('layout.app')
@section('maincontent')
    

<main class="container text-center justify-content-center py-5 text-uppercase">
    <h1>Laravel Migration Seeder</h1>
    <div>
        <ul>
        @foreach ($trains as $train)
            <li>{{ $train->Azienda }}</li>
        @endforeach
    </ul>
    </div>
</main>

@endsection