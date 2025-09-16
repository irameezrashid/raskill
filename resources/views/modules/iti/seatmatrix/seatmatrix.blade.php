@extends('layouts.site')
@section('title', 'ITI Registrations | Directorate of Skill Development, J&K')

@section('content')

<section class="bg-gray-50 py-12 min-h-screen">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Page Title --}}
        <h1 class="text-3xl font-bold text-gray-800 mb-10">Registrations Overview</h1>

        {{-- SCVT Section --}}
        <div class="mb-16">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-amber-600">SCVT Trades</h2>
                <form action="" method="POST"
                      onsubmit="return confirm('Once finalized, SCVT registrations cannot be edited. Continue?')">
                    @csrf
                    <button type="submit"
                        class="bg-amber-100 text-amber-800 px-5 py-2 rounded-lg hover:bg-amber-200 transition font-semibold shadow-sm">
                        🔒 Finalize SCVT Registrations
                    </button>
                </form>
            </div>

            <div class="overflow-hidden border border-gray-200 rounded-xl shadow-md bg-white">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-amber-100 text-amber-800">
                        <tr>
                            <th class="px-6 py-3">Trade</th>
                            <th class="px-6 py-3 text-center">Intake</th>
                            <th class="px-6 py-3 text-center">Admitted</th>
                            <th class="px-6 py-3 text-center">Vacant</th>
                            <th class="px-6 py-3 text-center">Shift</th>
                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-amber-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-900">Electrician</td>
                            <td class="px-6 py-4 text-center">40</td>
                            <td class="px-6 py-4 text-center">35</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">5</td>
                            <td class="px-6 py-4 text-center">Morning</td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('iti.registration.show', 1) }}"
                                   class="inline-block bg-amber-200 text-amber-900 px-4 py-2 rounded-md hover:bg-amber-300 transition">
                                    View
                                </a>
                            </td>
                        </tr>
                        {{-- More SCVT Trades --}}
                    </tbody>
                </table>
            </div>
        </div>

        {{-- NCVT Section --}}
        <div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-blue-600">NCVT Trades</h2>
                <form action="" method="POST"
                      onsubmit="return confirm('Once finalized, NCVT registrations cannot be edited. Continue?')">
                    @csrf
                    <button type="submit"
                        class="bg-blue-100 text-blue-800 px-5 py-2 rounded-lg hover:bg-blue-200 transition font-semibold shadow-sm">
                        🔒 Finalize NCVT Registrations
                    </button>
                </form>
            </div>

            <div class="overflow-hidden border border-gray-200 rounded-xl shadow-md bg-white">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-blue-100 text-blue-800">
                        <tr>
                            <th class="px-6 py-3">Trade</th>
                            <th class="px-6 py-3 text-center">Intake</th>
                            <th class="px-6 py-3 text-center">Admitted</th>
                            <th class="px-6 py-3 text-center">Vacant</th>
                            <th class="px-6 py-3 text-center">Shift</th>
                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-900">Welder</td>
                            <td class="px-6 py-4 text-center">25</td>
                            <td class="px-6 py-4 text-center">18</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">7</td>
                            <td class="px-6 py-4 text-center">Morning</td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('iti.registration.show', 3) }}"
                                   class="inline-block bg-blue-200 text-blue-900 px-4 py-2 rounded-md hover:bg-blue-300 transition">
                                    View
                                </a>
                            </td>
                        </tr>
                        {{-- More NCVT Trades --}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection
