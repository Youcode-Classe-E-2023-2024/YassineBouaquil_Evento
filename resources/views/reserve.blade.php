@extends('layout.layout')
@section('content')

<div class="bg-dark" style="background:url('BG.jpg') no-repeat center center fixed ; background-size: cover">


    <!-- Ajoutez ceci à l'intérieur de la balise <body> -->

    <style>
        /* Styling for the search form */
        .search-form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        /* Styling for the search input */
        .search-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        /* Styling for the search button */
        .search-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        /* Hover effect for the search input and button */
        .search-input:hover,
        .search-button:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Animation for the search input and button */
        .search-input,
        .search-button {
            transform: translateY(0);
            animation: translateYAnimation 1s ease-in-out infinite alternate;
        }

        @keyframes translateYAnimation {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-5px);
            }
        }
    </style>

    <div class="py-6 sm:py-12 dark:text-gray-100">
        <div class="container p-6 mx-auto space-y-8">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">Reserve a ticket</h2>
            </div>
            <form action="{{ route('searchEvent') }}" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Rechercher par titre" class="search-input text-black">
                <button type="submit" class="search-button">Rechercher</button>
            </form>
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                @forelse ($events as $event)
                <article class="flex flex-col dark:bg-gray-900">
                <a href="{{ url('events')}}/{{$event->id}}">
                    <img alt="" class="object-cover w-full h-52 dark:bg-gray-500" src="{{ $event->image_url }}">
    </a>
                    <div class="flex flex-col  space-y-2 flex-1 p-6">


                        <h3 class="flex-1 py-2 text-lg font-semibold leadi">{{ $event->title }}</h3>
                        <br>
                        <a rel="noopener noreferrer" href="#" class="text-xs tracki uppercase hover:underline dark:text-violet-400">
                            {{ optional(\App\Models\Category::find($event->category))->name }}
                        </a>

                        <button class="bg-green-500 text-white rounded-full transition duration-300 ease-in-out hover:bg-green-600">
                            <h1 class="flex-1 py-2 text-lg font-semibold">{{ $event->price }} DH</h1>
                        </button>
                        @if($event->available_places == 0)
                        <button disabled class="text-white bg-gray-400 cursor-not-allowed focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600">Full</button>
                        @else
                        <a href="{{ url('events')}}/{{$event->id}}" target="_blank" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reserve</a>
                        @endif

                        <a class="flex-1 py-2 ">{{ $event->description }}</a>
                        <div>
                            <a class="flex-1 py-2 "> In : {{ $event->place }}</a>
                        </div>

                    </div>

                </article>
                @empty
                <p>Aucun événement disponible pour le moment.</p>
                @endforelse
            </div>
        </div>
    </div>


</div>


</section>

@endsection