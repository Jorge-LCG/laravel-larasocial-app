@php
    $guest_links = [
        [
            'name' => 'Iniciar Sesión',
            'href' => route('login'),
            'route_name' => 'login',
        ],
        [
            'name' => 'Registrar Cuenta',
            'href' => route('register'),
            'route_name' => 'register',
        ],
    ];

    $auth_links = [
        [
            'name' => 'Inicio',
            'href' => route('posts.index'),
            'route_name' => 'posts.index',
        ],
    ];

    $isActive = function ($routeName) {
        return request()->routeIs($routeName) ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white';
    };
@endphp

<nav class="border-gray-700 bg-gray-800">
    <div class="container mx-auto flex flex-wrap items-center justify-between p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img 
                src="https://flowbite.com/docs/images/logo.svg" 
                class="h-8" 
                alt="LaraSocial Logo" 
            />
            <span class="self-center whitespace-nowrap text-2xl font-semibold text-white">
                LaraSocial
            </span>
        </a>

        <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-400 rounded-lg lg:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Abrir menú principal</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        
        <div class="hidden w-full lg:block lg:w-auto" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 border-gray-700 space-y-2 lg:mt-0 lg:flex-row lg:space-x-4 lg:space-y-0 lg:border-0 lg:bg-gray-800">

                @guest
                    @foreach ($guest_links as $link)
                        <li>
                            <a 
                                href="{{ $link['href'] }}" 
                                class="block px-3 py-2 rounded-lg {{ $isActive($link['route_name']) }}" 
                                aria-current="{{ request()->routeIs($link['route_name']) ? 'page' : 'false' }}"
                            >
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                @endguest

                @auth
                    <li class="hidden lg:block">
                        <span class="block px-3 py-2 text-white font-semibold rounded-lg">
                            Hola: {{ Auth::user()->username }}
                        </span>
                    </li>

                    @foreach ($auth_links as $link)
                        <li>
                            <a 
                                href="{{ $link['href'] }}" 
                                class="cursor-pointer block px-3 py-2 rounded-lg {{ $isActive($link['route_name']) }}" 
                                aria-current="{{ request()->routeIs($link['route_name']) ? 'page' : 'false' }}"
                            >
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                    
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="w-full lg:w-auto">
                            @csrf
                            <button
                                type="submit"
                                class="cursor-pointer block w-full text-left rounded-lg px-3 py-2 text-gray-400 hover:bg-red-700 hover:text-white transition duration-150"
                            >
                                Cerrar Sesión
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>