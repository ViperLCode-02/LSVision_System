{{-- resources/views/components/enhanced-navbar.blade.php --}}
@props(['businessUnit' => 'enterprise'])

<nav class="bg-white/90 backdrop-blur-md fixed w-full z-20 top-0 start-0 border-b border-gray-200/50 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
        {{-- Premium Logo with Gradient --}}
        <a href="{{ route('enterprise.dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse group">
            <div class="h-9 w-9 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-sm shadow-md shadow-blue-500/20 group-hover:shadow-lg group-hover:shadow-blue-500/30 transition-all duration-300">
                LS
            </div>
            <div class="flex flex-col">
                <span class="self-center text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">LSVision</span>
                <span class="text-xs text-gray-500 -mt-1">
                    @if($businessUnit == 'enterprise')
                        Enterprise Command Center
                    @elseif($businessUnit == 'resort')
                        Shyren Bugak Resort
                    @elseif($businessUnit == 'hotel')
                        LSV Hotel
                    @elseif($businessUnit == 'agri')
                        LSV Agri Supply
                    @endif
                </span>
            </div>
        </a>
        
        {{-- Right side - User menu and mobile button --}}
        <div class="flex items-center md:order-2 space-x-2 md:space-x-1 rtl:space-x-reverse">
            {{-- Notification Bell --}}
            <button type="button" class="hidden sm:flex p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 transition-all duration-200 relative">
                <span class="sr-only">View notifications</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h0m0 7h0m8-3.9A8 8 0 0 0 4 9c0 6 4 8 4 8h8s4-2 4-8a8 8 0 0 0-8-8Z"/>
                </svg>
                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 border-2 border-white rounded-full"></span>
            </button>
            
            {{-- User menu button --}}
            <button type="button" class="flex items-center space-x-2 text-sm bg-gray-50 rounded-full md:me-0 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 transition-all duration-200 pl-1 pr-3 py-1" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white font-semibold text-sm shadow-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <span class="hidden sm:block text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            
            {{-- Premium Dropdown menu --}}
            <div class="z-50 hidden bg-white border border-gray-200 rounded-xl shadow-xl w-56 backdrop-blur-md" id="user-dropdown">
                <div class="px-4 py-4 text-sm border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white font-semibold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="block text-gray-900 font-semibold truncate">{{ Auth::user()->name }}</span>
                            <span class="block text-gray-500 text-xs truncate">{{ Auth::user()->email }}</span>
                            <span class="inline-flex items-center mt-1 px-2 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">
                                {{ Auth::user()->role === 'owner' ? '👑 Owner' : '👩‍💼 Co-Admin' }}
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="p-2 text-sm text-gray-700" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('enterprise.dashboard') }}" class="flex items-center space-x-3 w-full p-3 hover:bg-gray-50 rounded-lg transition-all duration-200 group">
                            <span class="text-gray-400 group-hover:text-blue-600 transition-colors">📊</span>
                            <span>Enterprise Dashboard</span>
                        </a>
                    </li>
                    @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'resort_manager']))
                    <li>
                        <a href="{{ route('shyren-bugak.dashboard') }}" class="flex items-center space-x-3 w-full p-3 hover:bg-gray-50 rounded-lg transition-all duration-200 group">
                            <span class="text-gray-400 group-hover:text-blue-600 transition-colors">🏨</span>
                            <span>Resort Dashboard</span>
                        </a>
                    </li>
                    @endif
                    @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'hotel_manager']))
                    <li>
                        <a href="{{ route('lsv-hotel.dashboard') }}" class="flex items-center space-x-3 w-full p-3 hover:bg-gray-50 rounded-lg transition-all duration-200 group">
                            <span class="text-gray-400 group-hover:text-purple-600 transition-colors">🏢</span>
                            <span>Hotel Dashboard</span>
                        </a>
                    </li>
                    @endif
                    @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'agri_manager']))
                    <li>
                        <a href="{{ route('lsv-agri.dashboard') }}" class="flex items-center space-x-3 w-full p-3 hover:bg-gray-50 rounded-lg transition-all duration-200 group">
                            <span class="text-gray-400 group-hover:text-green-600 transition-colors">🌾</span>
                            <span>Agri Dashboard</span>
                        </a>
                    </li>
                    @endif
                    <li class="border-t border-gray-100 my-1"></li>
                    <li>
                        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 w-full p-3 hover:bg-gray-50 rounded-lg transition-all duration-200 group">
                            <span class="text-gray-400 group-hover:text-blue-600 transition-colors">⚙️</span>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center space-x-3 w-full p-3 hover:bg-red-50 rounded-lg text-red-600 transition-all duration-200 group">
                                <span class="text-gray-400 group-hover:text-red-600 transition-colors">🚪</span>
                                <span>Sign out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            
            {{-- Mobile menu button --}}
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 transition-all duration-200" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                </svg>
            </button>
        </div>
        
        {{-- Navigation menu --}}
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-200 rounded-xl bg-white md:flex-row md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                {{-- Enterprise --}}
                <li>
                    <a href="{{ route('enterprise.dashboard') }}" 
                       class="flex items-center space-x-2 px-4 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('enterprise.dashboard') 
                           ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 md:bg-transparent md:text-blue-600 md:font-semibold' 
                           : 'text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:hover:text-blue-600' }}">
                        <span>🏢</span>
                        <span>Enterprise</span>
                        @if(request()->routeIs('enterprise.dashboard'))
                            <span class="w-1.5 h-1.5 bg-blue-600 rounded-full ml-1 animate-pulse"></span>
                        @endif
                    </a>
                </li>
                
                {{-- Resort --}}
                @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'resort_manager']))
                <li>
                    <a href="{{ route('shyren-bugak.dashboard') }}" 
                       class="flex items-center space-x-2 px-4 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('shyren-bugak.dashboard') 
                           ? 'bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 md:bg-transparent md:text-blue-600 md:font-semibold' 
                           : 'text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:hover:text-blue-600' }}">
                        <span>🏨</span>
                        <span>Resort</span>
                        @if(request()->routeIs('shyren-bugak.dashboard'))
                            <span class="w-1.5 h-1.5 bg-blue-600 rounded-full ml-1 animate-pulse"></span>
                        @endif
                    </a>
                </li>
                @endif
                
                {{-- Hotel --}}
                @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'hotel_manager']))
                <li>
                    <a href="{{ route('lsv-hotel.dashboard') }}" 
                       class="flex items-center space-x-2 px-4 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('lsv-hotel.dashboard') 
                           ? 'bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 md:bg-transparent md:text-purple-600 md:font-semibold' 
                           : 'text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:hover:text-purple-600' }}">
                        <span>🏢</span>
                        <span>Hotel</span>
                        @if(request()->routeIs('lsv-hotel.dashboard'))
                            <span class="w-1.5 h-1.5 bg-purple-600 rounded-full ml-1 animate-pulse"></span>
                        @endif
                    </a>
                </li>
                @endif
                
                {{-- Agri --}}
                @if(in_array(Auth::user()->role, ['owner', 'co_admin', 'agri_manager']))
                <li>
                    <a href="{{ route('lsv-agri.dashboard') }}" 
                       class="flex items-center space-x-2 px-4 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('lsv-agri.dashboard') 
                           ? 'bg-gradient-to-r from-green-50 to-emerald-50 text-green-700 md:bg-transparent md:text-green-600 md:font-semibold' 
                           : 'text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:hover:text-green-600' }}">
                        <span>🌾</span>
                        <span>Agri</span>
                        @if(request()->routeIs('lsv-agri.dashboard'))
                            <span class="w-1.5 h-1.5 bg-green-600 rounded-full ml-1 animate-pulse"></span>
                        @endif
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

{{-- Add padding to body content --}}
<div class="pt-20"></div>