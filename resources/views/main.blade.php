@extends('layout.layout')
@section('content')
    <!-- component -->
    <section class="flex items-center h-full w-full flex-col  "
             style="background:url('BG.jpg') no-repeat center center fixed; background-size: cover">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>

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
