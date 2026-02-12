{{-- resources/views/dashboards/shyren-bugak.blade.php --}}
<x-dashboard-layout
    title="Shyren Bugak Resort" 
    businessUnit="resort" 
    businessUnitName="Shyren Bugak Resort"
>

    {{-- Date Badge --}}
    <div class="flex justify-end mb-6">
        <span class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm shadow-sm">
            {{ now()->format('F d, Y') }}
        </span>
    </div>

    {{-- Welcome Banner --}}
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-xl p-8 mb-10 text-white">
        <h3 class="text-3xl font-bold mb-2">Shyren Bugak Resort Dashboard 🏨</h3>
        <p class="text-blue-100">Welcome back, {{ auth()->user()->name }}!</p>
    </div>

    {{-- Resort KPIs --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-blue-500">
            <p class="text-sm text-gray-500 font-medium">Today's Revenue</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">₱124,500</p>
            <span class="text-green-500 text-sm">↑ 12% vs yesterday</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-500">
            <p class="text-sm text-gray-500 font-medium">Occupancy Rate</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">72%</p>
            <span class="text-blue-500 text-sm">45/62 rooms occupied</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-yellow-500">
            <p class="text-sm text-gray-500 font-medium">Average Daily Rate</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">₱4,850</p>
            <span class="text-green-500 text-sm">↑ 5% vs target</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-red-500">
            <p class="text-sm text-gray-500 font-medium">No-Shows Today</p>
            <p class="text-3xl font-bold text-red-600 mt-1">5</p>
            <span class="text-red-500 text-sm">⚠️ Above average</span>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">⚡ Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <button class="p-4 bg-blue-50 hover:bg-blue-100 rounded-xl text-center transition-all">
                <span class="text-2xl block mb-2">➕</span>
                <span class="text-sm font-medium text-gray-700">New Booking</span>
            </button>
            <button class="p-4 bg-green-50 hover:bg-green-100 rounded-xl text-center transition-all">
                <span class="text-2xl block mb-2">🚪</span>
                <span class="text-sm font-medium text-gray-700">Check-In</span>
            </button>
            <button class="p-4 bg-yellow-50 hover:bg-yellow-100 rounded-xl text-center transition-all">
                <span class="text-2xl block mb-2">🧹</span>
                <span class="text-sm font-medium text-gray-700">Housekeeping</span>
            </button>
            <button class="p-4 bg-purple-50 hover:bg-purple-100 rounded-xl text-center transition-all">
                <span class="text-2xl block mb-2">📊</span>
                <span class="text-sm font-medium text-gray-700">Reports</span>
            </button>
        </div>
    </div>

    {{-- Today's Schedule --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">📅 Today's Arrivals</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-3 bg-green-50 rounded-xl">
                    <div>
                        <p class="font-medium text-gray-800">John Smith</p>
                        <p class="text-sm text-gray-500">Deluxe Suite • 3 nights</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">2:00 PM</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-green-50 rounded-xl">
                    <div>
                        <p class="font-medium text-gray-800">Maria Santos</p>
                        <p class="text-sm text-gray-500">Family Villa • 2 nights</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">3:00 PM</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm p-6">
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

</x-dashboard-layout>