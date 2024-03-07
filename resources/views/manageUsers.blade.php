@extends('layout.layout')

@section('content')

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
                {{-- Add more columns as needed --}}
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    {{-- Add more columns as needed --}}
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
