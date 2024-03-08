@extends('layout.layout')

@section('content')

    <h1>Ticket for {{ $event->title }}</h1>
    <p>Event details: {{ $event->description }}</p>
    <!-- Ajoutez d'autres détails du ticket selon vos besoins -->
@endsection
