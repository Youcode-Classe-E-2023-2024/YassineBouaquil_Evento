@extends('layout.layout')

@section('content')
    <section class="flex items-center bg-dark justify-center flex-col h-screen">
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
                            <button class="dark:bg-red-500/10" type="submit">Delete</button>
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

@endsection
