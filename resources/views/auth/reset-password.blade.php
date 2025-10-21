@extends('layouts.app')

@section('title', 'Olvidé mi contraseña')

@section('content')
    <div class="md:flex md:justify-center md:items-center gap-10">
        <div class="md:w-5/12 mb-6">
            <img 
                src="{{ asset('img/password.jpg') }}" 
                alt="image password" 
                class="rounded-lg"
            />
        </div>
        
        <div class="md:w-4/12 bg-white shadow p-8 rounded-lg border border-gray-400">
            <h1 class="text-2xl font-black text-center mb-4">
                Recuperar Contraseña
            </h1>

            @if (session('status'))
                <div id="error-message" class="bg-green-600 rounded-lg w-full py-2 px-2.5 mb-4 text-center text-sm shadow" role="alert">
                    <p class="text-white">{{ session('status') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}" class="space-y-4 text-start" novalidate>
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ old('email', $email ?? '') }}">
                
                <div>
                    <label for="password" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Nueva contraseña
                    </label>
                    
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="********"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('email') border-red-600 @enderror"
                    />
                    @error('password')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Confirmar nueva contraseña
                    </label>
                    
                    <input 
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="********"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700"
                    />
                </div>

                <input 
                    type="submit" 
                    class="bg-sky-700 text-white p-2 w-full rounded hover:bg-sky-800 transition-colors duration-200 cursor-pointer"
                    value="Restablecer Contraseña" 
                />
            </form>
        </div>
    </div>
@endsection