@extends('layout.layout')

@section('content')

    <section class="flex items-center bg-dark justify-center flex-col h-screen" style="background: rgba(255, 255, 255, 0.8) url('bgAdmin.jpg') no-repeat center center fixed; background-size: cover">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>

        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>

        <div class="flex justify-center items-center">
            <div class="grid m-auto">
                <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0 animate__animated animate__fadeIn animate__delay-1s">
                    <div class="container mx-auto p-8 bg-white bg-opacity-80 rounded-md shadow-md">

    <div class="container mx-auto py-8">

        <h2 class="text-2xl font-bold mb-4">Manage Users</h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2">User ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Role</th>
                {{-- Add more columns as needed --}}
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->role }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('manageUsers.delete', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                        </form>
                    </td>
                    <td class="border px-4 py-2">
                        @if ($user->is_banned)
                            <form action="{{ route('manageUsers.unban', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit">Unban</button>
                            </form>
                        @else
                            <form action="{{ route('manageUsers.ban', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit">Ban</button>
                            </form>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('manageUsers.editRole', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Role</a>
                    </td>
                    {{-- Add more columns as needed --}}
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
                    </div>
                </div>
            </div>
        </div>
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
