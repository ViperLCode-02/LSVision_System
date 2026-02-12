{{-- resources/views/dashboards/lsv-agri.blade.php --}}
<x-dashboard-layout
    title="LSV Agri Supply" 
    businessUnit="agri" 
    businessUnitName="LSV Agri Supply"
>

    {{-- Date Badge --}}
    <div class="flex justify-end mb-6">
        <span class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-sm shadow-sm">
            {{ now()->format('F d, Y') }}
        </span>
    </div>

    {{-- Welcome Banner --}}
    <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl shadow-xl p-8 mb-10 text-white">
        <h3 class="text-3xl font-bold mb-2">LSV Agri Supply Dashboard 🌾</h3>
        <p class="text-green-100">Welcome back, {{ auth()->user()->name }}!</p>
    </div>

    {{-- Agri KPIs --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-500">
            <p class="text-sm text-gray-500 font-medium">Today's Orders</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">₱342,800</p>
            <span class="text-green-500 text-sm">↑ 8% vs yesterday</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-yellow-500">
            <p class="text-sm text-gray-500 font-medium">Pending Deliveries</p>
            <p class="text-3xl font-bold text-gray-800 mt-1">23</p>
            <span class="text-orange-500 text-sm">5 due today</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-red-500">
            <p class="text-sm text-gray-500 font-medium">Overdue Invoices</p>
            <p class="text-3xl font-bold text-red-600 mt.1">₱45,000</p>
            <span class="text-red-500 text-sm">3 accounts > 30 days</span>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-blue-500">
            <p class="text-sm text-gray-500 font-medium">Stock Alert</p>
            <p class="text-3xl font-bold text-yellow-600 mt-1">4 items</p>
            <span class="text-gray-500 text-sm">Below reorder level</span>
        </div>
    </div>

    {{-- Product Performance --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">📦 Top Products (This Week)</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Rice Fertilizer</span>
                        <span class="font-semibold text-gray-800">₱142,500</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Corn Seeds</span>
                        <span class="font-semibold text-gray-800">₱98,200</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">Pesticide</span>
                        <span class="font-semibold text-gray-800">₱65,800</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">⚠️ Credit Risk Monitor</h3>
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="font-medium text-gray-800">San Miguel Farms</p>
                            <p class="text-sm text-gray-500">Overdue: 45 days</p>
                        </div>
                        <span class="text-red-600 font-bold">₱25,000</span>
                    </div>
                </div>
                <div class="p-4 bg-yellow-50 rounded-xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="font-medium text-gray-800">Green Valley Coop</p>
                            <p class="text-sm text-gray-500">Overdue: 15 days</p>
                        </div>
                        <span class="text-yellow-600 font-bold">₱15,000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>