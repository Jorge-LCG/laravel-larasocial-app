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

<div class="w-full container mx-auto p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LaraSocial</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-400 sm:mb-0">
            @foreach ($links as $link)
                <li>
                    <a 
                        href="{{ $link['href'] }}" 
                        class="hover:underline me-4 md:me-6 {{ $link['active'] ? 'text-white' : 'text-gray-400 hover:text-white' }}" aria-current="page"
                    >
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <hr class="my-6 border-gray-700 sm:mx-auto lg:my-8" />
    <span class="block text-sm text-gray-400 sm:text-center">
        © {{ now()->year }} 
        <a href="{{ route('auth.login') }}" class="hover:underline">LaraSocial™</a>. 
        Todos los derechos reservados.
    </span>
</div>