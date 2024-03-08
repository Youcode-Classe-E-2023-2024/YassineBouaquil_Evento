@extends('layout.layout')

@section('content')

    <section class="flex items-center justify-center flex-col h-screen" style="background: rgba(255, 255, 255, 0.8) url('eventwlp.png') no-repeat center center fixed; background-size: cover">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>

        <div class="flex justify-center items-center">
            <div class="grid m-auto">
                <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0 animate__animated animate__fadeIn animate__delay-1s">
                    <div class="container mx-auto p-8 bg-white bg-opacity-80 rounded-md shadow-md">
                        <h1 class="text-3xl font-semibold mb-6">Créer un événement</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('createevent') }}" method="post" class="max-w-md mx-auto">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-600 text-sm font-medium">Title</label>
                                <input type="text" id="name" name="title" class="mt-1 p-2 w-full border rounded-md">
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-gray-600 text-sm font-medium">Description</label>
                                <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500 resize-none" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-600 text-sm font-medium">Place</label>
                                <input type="text" id="place" name="place" class="mt-1 p-2 w-full border rounded-md">
                            </div>

                            <label for="name" class="block text-gray-600 text-sm font-medium">Price</label>
                            <input type="text" id="price" name="price" class="mt-1 p-2 w-full border rounded-md">


                            <div class="mb-4">
                                <label for="category" class="block text-gray-600 text-sm font-medium">Category</label>
                                <select id="category" name="category" class="mt-1 p-2 w-full border rounded-md">
                                    @foreach($categories as $category)

                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="startDate" class="block text-gray-600 text-sm font-medium">Start Date</label>
                                    <input type="date" name="startDate" id="startDate" class="mt-1 p-2 w-full border rounded-md">
                                </div>

                                <div>
                                    <label for="endDate" class="block text-gray-600 text-sm font-medium">End Date</label>
                                    <input type="date" name="endDate" id="endDate" class="mt-1 p-2 w-full border rounded-md">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="guestCapacity" class="block text-gray-600 text-sm font-medium">Event Guest Capacity</label>
                                    <input type="number" name="guestCapacity" id="guestCapacity" class="mt-1 p-2 w-full border rounded-md">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="autoApproval" class="block text-gray-600 text-sm font-medium">Auto Approval</label>
                                <select id="autoApproval" name="autoApproval" class="mt-1 p-2 w-full border rounded-md">
                                    <option value="1" selected>Auto Approval</option>
                                    <option value="0">Manual Approval</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Créer l'evenement</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
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


        fetch('https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json')
            .then(response => response.json())
            .then(data => {

                console.log(data);
            })
            .catch(error => console.error('Erreur de chargement des données:', error));
    </script>

@endsection
