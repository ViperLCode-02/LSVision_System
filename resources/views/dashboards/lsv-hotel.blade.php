{{-- resources/views/dashboards/lsv-hotel.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <span class="text-3xl">🏢</span>
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        LSV Hotel
                    </h2>
                    <p class="text-sm text-gray-600">Corporate & Business Travel Hub</p>
                </div>
            </div>
            <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">
                Hotel Manager
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Hotel KPIs --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Today's Revenue</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">₱87,200</p>
                    <span class="text-red-500 text-sm">↓ 3% vs yesterday</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Occupancy</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">80%</p>
                    <span class="text-green-500 text-sm">✓ Target exceeded</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Corporate Accounts</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">45</p>
                    <span class="text-gray-500 text-sm">12 active this week</span>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-sm text-gray-500 font-medium">Events Today</p>
                    <p class="text-2xl font-bold text-gray-800 mt-1">3</p>
                    <span class="text-gray-500 text-sm">Conference, Meeting, Dinner</span>
                </div>
            </div>

            {{-- Corporate Credit Monitoring --}}
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="text-yellow-500 mr-2">⚠️</span>
                    Corporate Credit Exposure
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Outstanding</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Credit Limit</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilization</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ABC Corporation</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱125,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱200,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">62%</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Good</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">XYZ Trading</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱178,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱150,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">118%</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">Over Limit</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>