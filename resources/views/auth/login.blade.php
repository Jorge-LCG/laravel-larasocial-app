@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="md:flex md:justify-center md:items-center gap-10">
        <div class="md:w-5/12 mb-6">
            <img 
                src="{{ asset('img/login.jpg') }}" 
                alt="image login" 
                class="rounded-lg"
            />
        </div>
        
        <div class="md:w-4/12 bg-white shadow p-8 rounded-lg border border-gray-400">
            <h1 class="text-2xl font-black text-center mb-4">
                Iniciar Sesión
            </h1>

            <form class="space-y-4 text-start">
                <div>
                    <label for="name" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Nombre
                    </label>
                    
                    <input 
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Ingresa tu nombre completo"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700"
                    />
                </div>
                
                <div>
                    <div class="flex justify-between items-center">
                        <label for="password" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                            Contraseña
                        </label>

                        <a href="" class="text-xs text-gray-700 font-medium hover:text-gray-950">
                            Olvidaste tu contraseña?
                        </a>
                    </div>
                    
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="********"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700"
                    />
                </div>

                <div class="flex items-center justify-start gap-2">
                    <input type="checkbox" class="rounded border-gray-700">
                    <span class="text-sm">Recuérdame</span>
                </div>

                <input 
                    type="submit" 
                    class="bg-sky-700 text-white p-2 w-full rounded hover:bg-sky-800 transition-colors duration-200 cursor-pointer"
                    value="Iniciar Sesión" 
                />

                <hr class="border-gray-400">

                <div class="text-center">
                    <a href="{{ route('auth.register') }}" class="text-sm font-medium hover:text-gray-900">
                        No tienes una cuenta? <span class="text-gray-700">Regístrate.</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection