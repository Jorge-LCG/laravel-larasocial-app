@php
    $links = [
        [
            'name' => 'Iniciar Sesión',
            'href' => route('auth.login'),
            'active' => request()->routeIs('auth.login')
        ],
        [
            'name' => 'Registrar Cuenta',
            'href' => route('auth.register'),
            'active' => request()->routeIs('auth.register')
        ],
    ];    
@endphp

<nav class="border-gray-700 bg-gray-800">
    <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('auth.login') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img 
                src="https://flowbite.com/docs/images/logo.svg" 
                class="h-8" 
                alt="Flowbite Logo" 
            />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
                LaraSocial
            </span>
        </a>

        <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-400 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-6000" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        
        <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 border-gray-700 space-y-2">
                @foreach ($links as $link)
                <li>
                    <a 
                        href="{{ $link['href'] }}" 
                        class="block py-2 px-3 rounded-sm {{ $link['active'] ? 'text-white bg-blue-600' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}" aria-current="page"
                    >
                        {{ $link['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>