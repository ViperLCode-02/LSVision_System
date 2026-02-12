{{-- resources/views/dashboards/enterprise.blade.php --}}
<x-dashboard-layout 
    title="Enterprise Command Center" 
    businessUnit="enterprise" 
    businessUnitName="Enterprise Command Center"
>

    {{-- Date Badge --}}
    <div class="flex justify-end mb-6">
        <div class="flex items-center space-x-2">
            <span class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                {{ now()->format('F d, Y') }}
            </span>
        </div>
    </div>

    {{-- Welcome Banner --}}
    <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl shadow-xl p-8 mb-10 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-16 -mt-16"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-12 -mb-12"></div>
        <div class="relative z-10 flex items-center justify-between">
            <div>
                <h3 class="text-3xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}! 👋</h3>
                <p class="text-blue-100 text-lg">Here's what's happening across your businesses today.</p>
            </div>
            <div class="hidden md:flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                <span class="text-2xl">{{ auth()->user()->role === 'owner' ? '👑' : '👩‍💼' }}</span>
                <span class="font-medium">{{ auth()->user()->role === 'owner' ? 'Owner Access' : 'Co-Admin Access' }}</span>
            </div>
        </div>
    </div>

    {{-- Quick Stats Row --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
        {{-- Shyren Bugak Resort --}}
        <div class="stat-card bg-white rounded-2xl shadow-sm p-6 border-l-4 border-blue-500 hover:border-blue-600 transition-all">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm text-gray-500 font-medium mb-1">Shyren Bugak Resort</p>
                    <p class="text-3xl font-bold text-gray-800">₱124.5k</p>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            12%
                        </span>
                        <span class="text-gray-400 text-xs ml-2">vs yesterday</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-blue-500/20">
                    🏨
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-100">
                <a href="{{ route('shyren-bugak.dashboard') }}" class="text-sm text-blue-600 hover:text-blue-700 font-medium inline-flex items-center group">
                    View Details 
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        {{-- LSV Hotel --}}
        <div class="stat-card bg-white rounded-2xl shadow-sm p-6 border-l-4 border-purple-500 hover:border-purple-600 transition-all">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm text-gray-500 font-medium mb-1">LSV Hotel</p>
                    <p class="text-3xl font-bold text-gray-800">₱87.2k</p>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 text-xs font-medium rounded-full">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                            3%
                        </span>
                        <span class="text-gray-400 text-xs ml-2">vs yesterday</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-purple-500/20">
                    🏢
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-100">
                <a href="{{ route('lsv-hotel.dashboard') }}" class="text-sm text-purple-600 hover:text-purple-700 font-medium inline-flex items-center group">
                    View Details 
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        {{-- LSV Agri Supply --}}
        <div class="stat-card bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-500 hover:border-green-600 transition-all">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm text-gray-500 font-medium mb-1">LSV Agri Supply</p>
                    <p class="text-3xl font-bold text-gray-800">₱342.8k</p>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-700 text-xs font-medium rounded-full">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            8%
                        </span>
                        <span class="text-gray-400 text-xs ml-2">vs yesterday</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-green-500/20">
                    🌾
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-100">
                <a href="{{ route('lsv-agri.dashboard') }}" class="text-sm text-green-600 hover:text-green-700 font-medium inline-flex items-center group">
                    View Details 
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Total Enterprise --}}
        <div class="stat-card bg-gradient-to-br from-yellow-400 via-orange-400 to-red-400 rounded-2xl shadow-lg p-6 text-white border-l-4 border-yellow-300 hover:border-white transition-all">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm font-medium text-yellow-100 mb-1">TOTAL REVENUE</p>
                    <p class="text-3xl font-bold">₱554.5k</p>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center px-2 py-1 bg-white/30 text-white text-xs font-medium rounded-full backdrop-blur-sm">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            6%
                        </span>
                        <span class="text-yellow-100 text-xs ml-2">vs yesterday</span>
                    </div>
                </div>
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-2xl">
                    💰
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Row --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <span class="w-1 h-6 bg-blue-500 rounded-full mr-3"></span>
                    📈 Revenue Trend
                </h3>
                <span class="text-xs text-gray-500 bg-gray-100 px-3 py-1 rounded-full">Last 7 days</span>
            </div>
            <div class="h-64 bg-gradient-to-b from-gray-50 to-white rounded-xl flex items-center justify-center border-2 border-dashed border-gray-200">
                <div class="text-center">
                    <span class="text-5xl text-gray-300">📊</span>
                    <p class="text-gray-400 mt-3 font-medium">Chart coming soon</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <span class="w-1 h-6 bg-purple-500 rounded-full mr-3"></span>
                    🥧 Revenue Distribution
                </h3>
                <span class="text-xs text-gray-500 bg-gray-100 px-3 py-1 rounded-full">By business unit</span>
            </div>
            <div class="h-64 bg-gradient-to-b from-gray-50 to-white rounded-xl flex items-center justify-center border-2 border-dashed border-gray-200">
                <div class="text-center">
                    <span class="text-5xl text-gray-300">🥧</span>
                    <p class="text-gray-400 mt-3 font-medium">Chart coming soon</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Alerts and Transactions --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Active Alerts --}}
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></span>
                    Active Alerts
                </h3>
                <span class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full font-medium">3 critical</span>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-red-50 to-orange-50 rounded-xl border-l-4 border-red-500">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-3">⚠️</div>
                        <div>
                            <p class="font-semibold text-gray-800">LSV Agri: Overdue Invoices</p>
                            <p class="text-sm text-gray-500">3 invoices • Aging > 30 days</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="font-bold text-gray-900">₱45,000</span>
                        <span class="block text-xs text-red-600 font-medium mt-1">High Priority</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-xl border-l-4 border-yellow-500">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600 mr-3">⚠️</div>
                        <div>
                            <p class="font-semibold text-gray-800">Shyren Bugak: No-Shows</p>
                            <p class="text-sm text-gray-500">5 guests • Above average</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="font-bold text-gray-900">₱28,000</span>
                        <span class="block text-xs text-yellow-600 font-medium mt-1">Loss Estimate</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 mr-3">📈</div>
                        <div>
                            <p class="font-semibold text-gray-800">LSV Hotel: Occupancy</p>
                            <p class="text-sm text-gray-500">80% • 15 rooms available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-green-600 font-medium text-sm bg-green-100 px-3 py-1 rounded-full">Target Achieved</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Recent Transactions --}}
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                    <span class="w-1 h-6 bg-green-500 rounded-full mr-3"></span>
                    📋 Recent Transactions
                </h3>
                <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full">Last 24 hours</span>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-all duration-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center text-white mr-3">🏨</div>
                        <div>
                            <p class="font-semibold text-gray-800">Shyren Bugak Resort</p>
                            <p class="text-xs text-gray-500">Check-in #2845 • Deluxe Suite • 3 nights</p>
                        </div>
                    </div>
                    <span class="font-bold text-gray-900 bg-blue-50 px-3 py-1 rounded-lg">₱8,400</span>
                </div>
                <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-all duration-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center text-white mr-3">🏢</div>
                        <div>
                            <p class="font-semibold text-gray-800">LSV Hotel</p>
                            <p class="text-xs text-gray-500">Corporate • Conference Hall • ABC Corp</p>
                        </div>
                    </div>
                    <span class="font-bold text-gray-900 bg-purple-50 px-3 py-1 rounded-lg">₱22,500</span>
                </div>
                <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-all duration-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center text-white mr-3">🌾</div>
                        <div>
                            <p class="font-semibold text-gray-800">LSV Agri Supply</p>
                            <p class="text-xs text-gray-500">Fertilizer • Bulk • San Miguel Farms</p>
                        </div>
                    </div>
                    <span class="font-bold text-gray-900 bg-green-50 px-3 py-1 rounded-lg">₱45,000</span>
                </div>
            </div>
            <div class="mt-5 pt-4 border-t border-gray-100">
                <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium inline-flex items-center group">
                    View all transactions
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-dashboard-layout>