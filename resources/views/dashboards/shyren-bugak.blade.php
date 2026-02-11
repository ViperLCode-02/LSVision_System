{{-- resources/views/dashboards/shyren-bugak.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <span class="text-3xl">🏨</span>
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Shyren Bugak Resort
                    </h2>
                    <p class="text-sm text-gray-600">Welcome back, {{ auth()->user()->name }}!</p>
                </div>
            </div>
            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                Resort Manager
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Resort KPIs --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Today's Revenue</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">₱124,500</p>
                    <span class="text-green-500 text-sm">↑ 12% vs yesterday</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Occupancy Rate</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">72%</p>
                    <span class="text-blue-500 text-sm">45/62 rooms occupied</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Average Daily Rate</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">₱4,850</p>
                    <span class="text-green-500 text-sm">↑ 5% vs target</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">No-Shows Today</p>
                    <p class="text-2xl font-bold text-red-600 mt-1">5</p>
                    <span class="text-red-500 text-sm">⚠️ Above average</span>
                </div>
            </div>

            {{-- Quick Actions --}}
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">⚡ Quick Actions</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button class="p-4 bg-blue-50 hover:bg-blue-100 rounded-lg text-center transition">
                        <span class="text-2xl block mb-2">➕</span>
                        <span class="text-sm font-medium text-gray-700">New Booking</span>
                    </button>
                    <button class="p-4 bg-green-50 hover:bg-green-100 rounded-lg text-center transition">
                        <span class="text-2xl block mb-2">🚪</span>
                        <span class="text-sm font-medium text-gray-700">Check-In</span>
                    </button>
                    <button class="p-4 bg-yellow-50 hover:bg-yellow-100 rounded-lg text-center transition">
                        <span class="text-2xl block mb-2">🧹</span>
                        <span class="text-sm font-medium text-gray-700">Housekeeping</span>
                    </button>
                    <button class="p-4 bg-purple-50 hover:bg-purple-100 rounded-lg text-center transition">
                        <span class="text-2xl block mb-2">📊</span>
                        <span class="text-sm font-medium text-gray-700">Reports</span>
                    </button>
                </div>
            </div>

            {{-- Today's Schedule --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">📅 Today's Arrivals</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-800">John Smith</p>
                                <p class="text-sm text-gray-500">Deluxe Suite • 3 nights • 2 guests</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Check-in: 2:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-800">Maria Santos</p>
                                <p class="text-sm text-gray-500">Family Villa • 2 nights • 4 guests</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Check-in: 3:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-blue-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-800">Robert Chen</p>
                                <p class="text-sm text-gray-500">Standard Room • 1 night • 1 guest</p>
                            </div>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Departing</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">🍽️ F&B Revenue Today</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Restaurant</span>
                                <span class="font-semibold text-gray-800">₱28,450</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Pool Bar</span>
                                <span class="font-semibold text-gray-800">₱8,200</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 35%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Spa</span>
                                <span class="font-semibold text-gray-800">₱12,750</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>