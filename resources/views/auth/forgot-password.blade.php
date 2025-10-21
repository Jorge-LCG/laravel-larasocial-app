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
                Olvidaste tu contraseña?
            </h1>

            @if (session('status'))
                <div id="correct-message" class="bg-green-600 rounded-lg w-full p-2.5 mb-4 text-center text-sm shadow" role="alert">
                    <p class="text-white">{{ session('status') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.store') }}" class="space-y-4 text-start" novalidate>
                @csrf
                <div>
                    <label for="email" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Correo electrónico
                    </label>
                    
                    <input 
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Ingresa tu correo electrónico"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('email') border-red-600 @enderror"
                    />
                    @error('email')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <input 
                    type="submit" 
                    class="bg-sky-700 text-white p-2 w-full rounded hover:bg-sky-800 transition-colors duration-200 cursor-pointer"
                    value="Enviar correo" 
                />

                <hr class="border-gray-400">

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-sm font-medium hover:text-gray-900">
                        Recordaste tu contraseña? <span class="text-gray-700">Inicia Sesión.</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctMessage = document.getElementById('correct-message');

            if (correctMessage) {
                setTimeout(() => {
                    correctMessage.remove();
                }, 4000);
            }
        });
    </script>
@endpush