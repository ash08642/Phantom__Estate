<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-primary-50 font-main">
    <nav class="py-1 bg-gradient-to-r from-primary-700 to-secondary-500 shadow-xl">
        <div class="px-10 mx-auto text-gray-700">
            <div class="flex justify-between">
                <div class="hidden sm:flex space-x-6 items-center">
                    <a class="py-1 px-2 bg-secondary-300 text-secondary-950 rounded shadow hover:text-secondary-50 hover:bg-secondary-500 transition-all" href="/Properties/create">Post New Property</a>
                </div>
                <div>
                    <a class="flex items-center" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary-100 w-10 h-10 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="text-secondary-100 hidden md:inline font-bold">Phantom Estate</span>
                        <span class="text-secondary-100 sm:hidden font-bold">Phantom Estate</span>
                    </a>
                </div>
                <div class="hidden sm:flex space-x-6 items-center">
                    @auth
                    <a class="py-1 px-2 bg-primary-500 text-primary-50 rounded shadow hover:text-slate-50 hover:bg-primary-600 transition-all" href="/Properties/MyProperties">My Properties</a>
                    <div class="flex justify-center">
                        <a class="p-2 hover:bg-primary-500 hover:text-primary-50 border-r-2 border-primary-600" href="/profile">{{Auth::user()->first_name}}</a>
                        <form class="p-2 hover:bg-primary-500 hover:text-primary-50 border-l-2 border-primary-600" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                    @else
                    <div class="flex justify-center">
                        <a class="p-2 hover:bg-primary-500 hover:text-primary-50 border-r-2 border-primary-600" href="/login">Login</a>
                        <a class="p-2 hover:bg-primary-500 hover:text-primary-50 border-l-2 border-primary-600" href="{{ route('register') }}">Register a new Account</a>
                    </div>
                    @endauth
                </div>
                <div class="sm:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary-200 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-menu hidden sm:hidden">
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/">Home</a>
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/Property/create">Post new Property</a>
                @auth
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/Properties/MyProperties">My Properties</a>
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/profile">{{Auth::user()->first_name}} <span class="bg-primary-200 text-primary-800 ml-2 p-1">Edit Profile</span></a>
                <form class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/login">Login</a>
                <a class="block p-2 text-secondary-50 hover:bg-secondary-100 hover:text-secondary-950 border-b-2 border-primary-400" href="/register">Register new Account</a>
                @endauth
            </div>
        </div>
        <script>
            const btn = document.querySelector('button.mobile-menu-button');
            const menu = document.querySelector('.mobile-menu');

            btn.addEventListener('click', () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
    {{$slot}}
    <footer class="mt-auto bg-gradient-to-r from-primary-700 to-secondary-500 rounded-lg shadow m-2">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-primary-50 sm:text-center"><span>Ahmad Abeer Ahsan</span>. Copyright Free
        </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-secondary-50 sm:mt-0">
                <li>
                    <a href="https://www.linkedin.com/in/ahmadabeerahsan/" class="mr-4 hover:underline md:mr-6 ">Linkden</a>
                </li>
                <li>
                    <a href="https://github.com/ash08642" class="mr-4 hover:underline md:mr-6">Github</a>
                </li>
                <li>
                    <a href="https://fitnessbuddy-mern.netlify.app/" class="mr-4 hover:underline md:mr-6">MERN Application</a>
                </li>
                <li>
                    <a href="https://traffic-game-threejs.netlify.app" class="hover:underline">Three.js Game</a>
                </li>
            </ul>
        </div>
    </footer>
    <x-flash-message />
</body>
</html>