@extends('layout.layout')

@section('content')

    <section class="flex items-center justify-center flex-col h-screen" style="background: rgba(255, 255, 255, 0.8) url('eventwlp.png') no-repeat center center fixed; background-size: cover">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>
        <div class="flex justify-center items-center">
            <div class="grid m-auto">
                <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0 animate__animated animate__fadeIn animate__delay-1s">
                    <div class="container mx-auto p-8 bg-white bg-opacity-80 rounded-md shadow-md">
                        <h1 class="text-3xl font-semibold mb-6">Gérer les catégories</h1>
                        <!-- Ajoutez ici le code pour afficher et gérer les catégories -->
                        <form action="{{ route('createcategory') }}" method="post" class="max-w-md mx-auto">
                            @csrf
                            <div class="mb-4">
                                <label for="categoryName" class="block text-gray-600 text-sm font-medium">Nom de la catégorie</label>
                                <input type="text" id="categoryName" name="categoryName" class="mt-1 p-2 w-full border rounded-md">
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Ajouter</button>
                            </div>
                        </form>
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
    </script>

@endsection