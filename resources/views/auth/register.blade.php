@extends('layouts.app')

@section('title', 'Registrar Cuenta')

@section('content')
    <div class="md:flex md:justify-center md:items-center gap-10">
        <div class="md:w-5/12 mb-6">
            <img 
                src="{{ asset('img/registrar.jpg') }}" 
                alt="image login" 
                class="rounded-lg"
            />
        </div>
        
        <div class="md:w-4/12 bg-white shadow p-8 rounded-lg border border-gray-400">
            <h1 class="text-2xl font-black text-center mb-4">
                Registrar Cuenta
            </h1>

            <form method="POST" action="{{ route('auth.register.store') }}" class="space-y-4 text-start" novalidate>
                @csrf
                <div>
                    <label for="name" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Nombre
                    </label>
                    
                    <input 
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Ingresa tu nombre completo"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('name') border-red-600 @enderror"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="username" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Username
                    </label>
                    
                    <input 
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Ingresa tu nombre de usuario"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('username') border-red-600 @enderror"
                        value="{{ old('username') }}"
                    />
                    @error('username')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="username" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Correo electrónico
                    </label>
                    
                    <input 
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Ingresa tu correo electrónico"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('email') border-red-600 @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="password" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Contraseña
                    </label>
                    
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="********"
                        class="px-3 py-2.5 rounded w-full text-sm focus:outline-none focus:ring-1 focus:border-gray-700 focus:ring-gray-700 text-gray-700 @error('password') border-red-600 @enderror"
                    />
                    @error('password')
                        <p class="text-sm text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="password" class="text-gray-700 text-sm uppercase font-bold block mb-1">
                        Confirmar contraseña
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
                    value="Registrar Cuenta" 
                />

                <hr class="border-gray-400">

                <div class="text-center">
                    <a href="{{ route('auth.login') }}" class="text-sm font-medium hover:text-gray-900">
                        Ya tienes una cuenta? <span class="text-gray-700">Inicia Sesión.</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection