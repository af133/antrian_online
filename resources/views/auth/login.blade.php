@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold text-center mb-6">
        Login Admin
    </h1>

    @if(session('error'))
        <div class="mb-4 text-sm text-red-600 text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.authenticate') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-medium">Email</label>
            <input
                type="email"
                name="email"
                required
                class="w-full border rounded px-3 py-2 focus:ring focus:ring-green-200"
            >
        </div>

        <div>
            <label class="block mb-1 font-medium">Password</label>
            <input
                type="password"
                name="password"
                required
                class="w-full border rounded px-3 py-2 focus:ring focus:ring-green-200"
            >
        </div>

        <button
            class="w-full  bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 active:bg-indigo-900 transition">
            Login
        </button>
    </form>
</div>
@endsection
