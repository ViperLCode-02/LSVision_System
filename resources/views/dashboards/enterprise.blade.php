{{-- resources/views/dashboards/enterprise.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <span class="text-3xl">🌍</span>
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        LSVision Enterprise Command Center
                    </h2>
                    <p class="text-sm text-gray-600">
                        {{ auth()->user()->role === 'owner' ? '👑 Owner Access' : '👩‍💼 Co-Admin Access' }}
                    </p>
                </div>
            </div>
            <div class="flex space-x-2">
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                    {{ now()->format('F d, Y') }}
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Welcome Banner --}}
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow-lg p-6 mb-8 text-white">
                <h3 class="text-2xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}! 👋</h3>
                <p class="text-blue-100">Here's what's happening across your businesses today.</p>
            </div>

            {{-- Quick Stats Row --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                {{-- Shyren Bugak Resort --}}
                <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-gray-500 font-medium">Shyren Bugak Resort</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">₱124,500</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm">↑ 12%</span>
                                <span class="text-gray-400 text-sm ml-1">vs yesterday</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🏨</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-gray-100">
                        <a href="{{ route('shyren-bugak.dashboard') }}" class="text-sm text-blue-600 hover:text-blue-800">View Details →</a>
                    </div>
                </div>

                {{-- LSV Hotel --}}
                <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500 hover:shadow-lg transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-gray-500 font-medium">LSV Hotel</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">₱87,200</p>
                            <div class="flex items-center mt-2">
                                <span class="text-red-500 text-sm">↓ 3%</span>
                                <span class="text-gray-400 text-sm ml-1">vs yesterday</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🏢</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-gray-100">
                        <a href="{{ route('lsv-hotel.dashboard') }}" class="text-sm text-purple-600 hover:text-purple-800">View Details →</a>
                    </div>
                </div>

                {{-- LSV Agri Supply --}}
                <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500 hover:shadow-lg transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-gray-500 font-medium">LSV Agri Supply</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">₱342,800</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm">↑ 8%</span>
                                <span class="text-gray-400 text-sm ml-1">vs yesterday</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🌾</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-gray-100">
                        <a href="{{ route('lsv-agri.dashboard') }}" class="text-sm text-green-600 hover:text-green-800">View Details →</a>
                    </div>
                </div>

                {{-- Total Enterprise --}}
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg shadow-md p-6 text-white hover:shadow-lg transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-yellow-100">TOTAL REVENUE</p>
                            <p class="text-2xl font-bold mt-1">₱554,500</p>
                            <div class="flex items-center mt-2">
                                <span class="text-white text-sm">↑ 6%</span>
                                <span class="text-yellow-100 text-sm ml-1">vs yesterday</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-white bg-opacity-30 rounded-full flex items-center justify-center">
                            <span class="text-2xl">💰</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Charts Row (Placeholders) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">📈 Revenue Trend - Last 7 Days</h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-200">
                        <div class="text-center">
                            <span class="text-4xl text-gray-300">📊</span>
                            <p class="text-gray-400 mt-2">Chart placeholder - Coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">🥧 Revenue by Business Unit</h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-200">
                        <div class="text-center">
                            <span class="text-4xl text-gray-300">🥧</span>
                            <p class="text-gray-400 mt-2">Chart placeholder - Coming soon</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Alerts and Recent Transactions --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Active Alerts
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-red-50 rounded-lg">
                            <div class="flex items-center">
                                <span class="text-red-500 mr-3">⚠️</span>
                                <div>
                                    <p class="font-medium text-gray-800">LSV Agri: 3 overdue invoices</p>
                                    <p class="text-sm text-gray-500">Aging > 30 days • Total: ₱45,000</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">High</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-yellow-50 rounded-lg">
                            <div class="flex items-center">
                                <span class="text-yellow-500 mr-3">⚠️</span>
                                <div>
                                    <p class="font-medium text-gray-800">Shyren Bugak: 5 no-shows today</p>
                                    <p class="text-sm text-gray-500">Above average • Estimated loss: ₱28,000</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full">Medium</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg">
                            <div class="flex items-center">
                                <span class="text-green-500 mr-3">📈</span>
                                <div>
                                    <p class="font-medium text-gray-800">LSV Hotel: 80% occupancy</p>
                                    <p class="text-sm text-gray-500">Target achieved • 15 rooms available</p>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Good</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">📋 Recent Transactions</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-3">🏨</span>
                                <div>
                                    <p class="font-medium text-gray-800">Shyren Bugak Resort</p>
                                    <p class="text-sm text-gray-500">Check-in #2845 • Deluxe Suite • 3 nights</p>
                                </div>
                            </div>
                            <span class="font-semibold text-gray-900">₱8,400</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                            <div class="flex items-center">
                                <span class="text-purple-500 mr-3">🏢</span>
                                <div>
                                    <p class="font-medium text-gray-800">LSV Hotel</p>
                                    <p class="text-sm text-gray-500">Corporate Account • Conference Hall • ABC Corp</p>
                                </div>
                            </div>
                            <span class="font-semibold text-gray-900">₱22,500</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                            <div class="flex items-center">
                                <span class="text-green-500 mr-3">🌾</span>
                                <div>
                                    <p class="font-medium text-gray-800">LSV Agri Supply</p>
                                    <p class="text-sm text-gray-500">Fertilizer • Bulk Order • San Miguel Farms</p>
                                </div>
                            </div>
                            <span class="font-semibold text-gray-900">₱45,000</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-gray-100 text-center">
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View all transactions →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>