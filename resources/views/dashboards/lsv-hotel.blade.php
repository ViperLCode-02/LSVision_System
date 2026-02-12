{{-- resources/views/dashboards/lsv-hotel.blade.php --}}
<x-dashboard-layout 
    title="LSV Hotel" 
    businessUnit="hotel" 
    businessUnitName="LSV Hotel"
>


    {{-- Date Badge --}}
    <div class="flex justify-end mb-6">
        <span class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm shadow-sm">
            {{ now()->format('F d, Y') }}
        </span>
    </div>

    {{-- Welcome Banner --}}
    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl shadow-xl p-8 mb-10 text-white">
        <h3 class="text-3xl font-bold mb-2">LSV Hotel Dashboard 🏢</h3>
        <p class="text-purple-100">Welcome back, {{ auth()->user()->name }}!</p>
    </div>

    {{-- Hotel KPIs --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-purple-500">
            <p class="text-sm text-gray-500 font-medium">Today's Revenue</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">₱87,200</p>
            <span class="text-red-500 text-sm">↓ 3% vs yesterday</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-indigo-500">
            <p class="text-sm text-gray-500 font-medium">Occupancy</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">80%</p>
            <span class="text-green-500 text-sm">✓ Target exceeded</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-pink-500">
            <p class="text-sm text-gray-500 font-medium">Corporate Accounts</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">45</p>
            <span class="text-gray-500 text-sm">12 active this week</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-orange-500">
            <p class="text-sm text-gray-500 font-medium">Events Today</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">3</p>
            <span class="text-gray-500 text-sm">Conference, Meeting, Dinner</span>
        </div>
    </div>

    {{-- Corporate Credit Monitoring --}}
    <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
            <span class="text-yellow-500 mr-2">⚠️</span>
            Corporate Credit Exposure
        </h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Outstanding</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Credit Limit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">ABC Corporation</td>
                        <td class="px-6 py-4 text-sm text-gray-900">₱125,000</td>
                        <td class="px-6 py-4 text-sm text-gray-500">₱200,000</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Good</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">XYZ Trading</td>
                        <td class="px-6 py-4 text-sm text-gray-900">₱178,000</td>
                        <td class="px-6 py-4 text-sm text-gray-500">₱150,000</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">Over Limit</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>