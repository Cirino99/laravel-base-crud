@extends('templates.base')

@section('pageTitle', 'Home')

@section('mainContent')
<main> 
    <h1>Sono la home</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{$comic->title}} -- {{$comic->price}} -- {{$comic->sale_date}}
            </li>
        @endforeach
    </ul>
</main>
@endsection