@extends('layout.layout')
@section('content')
    <!-- component -->
    <section class="flex items-center h-full w-full flex-col  "
             style="background:url('BG.jpg') no-repeat center center fixed; background-size: cover">

        <div class=" mt-8 h-full">
            <div
                class="mx-auto mt-8 h-[213px] w-[213px] overflow-hidden rounded-full bg-gradient-to-tr from-[#FF8660] to-[#8000FF] animate-bounce">
                <img src="https://i.imgur.com/4U5tBXC.png" class="w-full" alt="" />
            </div>
            <h1 class="max-w-screen-sm text-center text-[55px] font-extrabold text-white">
                EVENTO <br />
                best tecketing <span
                    class="text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">plateform.</span>
            </h1>
            <p class="mx-auto mt-[40px] mb-[54px] text-[18px] font-white text-[#ffff] text-center max-w-lg">
                The objective is to provide an optimal user experience for participants, organisers, and administrators.
                This plate is enabled for users to discover, reserve and generate tickets for a variety of events, as the
                organizers have the possibility of creating and generating more suitable events.
            </p>
        </div>



    </section>
    <div class="py-6 sm:py-12 dark:text-gray-100"
         style="background:url('BG.jpg') no-repeat center center fixed; background-size: cover"
    >

        <div class="container p-6 mx-auto space-y-8">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl text-white font-bold">All tickets</h2>
            </div>
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                @forelse ($events as $event)
                    <article class="flex flex-col dark:bg-gray-900">
                        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500" src="{{ $event->image_url }}">
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
                                <button disabled
                                        class="text-white bg-gray-400 cursor-not-allowed focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600">Full</button>
                            @else
                                <a href="{{ route('generateTicket', $event->id) }}" target="_blank" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reserve</a>
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

    <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>

    <script>
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#ffffff'
                },
                shape: {
                    type: 'circle',
                    stroke: {
                        width: 0,
                        color: '#000000'
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ffffff',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'grab'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    },
                    remove: {
                        particles_nb: 2
                    }
                }
            },
            retina_detect: true
        });
    </script>

@endsection
{{-- bg-[#161513] --}}
