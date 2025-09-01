@extends('layouts.site')
@section('title', $trade['name'] . ' Trainees | Directorate of Skill Development, J&K')

@section('content')

<section class="bg-gradient-to-br from-blue-50 via-white to-purple-50 py-12 min-h-screen">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-10">
            <h1 class="text-3xl font-bold text-gray-800">
                {{ $trade['name'] }} ({{ $trade['type'] }}) – Trainees
            </h1>
            <a href="{{ route('iti.registration.add', $trade['id']) }}"
               class="bg-gradient-to-r from-green-400 to-green-600 text-white px-5 py-2.5 rounded-lg shadow hover:opacity-90 transition font-semibold">
                + Add New Trainee
            </a>
        </div>

        {{-- Tabs --}}
        <div x-data="{ tab: 'pending' }" class="space-y-8">

            {{-- Tab Headers --}}
            <div class="flex space-x-6 border-b border-gray-200">
                <button @click="tab = 'pending'"
                        :class="tab === 'pending' ? 'border-b-4 border-blue-500 text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500'"
                        class="pb-3 transition flex items-center space-x-2">
                    <span>Pending</span>
                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-0.5 rounded-full">
                        {{ count($trainees['pending']) }}
                    </span>
                </button>
                <button @click="tab = 'verified'"
                        :class="tab === 'verified' ? 'border-b-4 border-green-500 text-green-600 font-semibold' : 'text-gray-600 hover:text-green-500'"
                        class="pb-3 transition flex items-center space-x-2">
                    <span>Verified</span>
                    <span class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded-full">
                        {{ count($trainees['verified']) }}
                    </span>
                </button>
                <button @click="tab = 'rejected'"
                        :class="tab === 'rejected' ? 'border-b-4 border-red-500 text-red-600 font-semibold' : 'text-gray-600 hover:text-red-500'"
                        class="pb-3 transition flex items-center space-x-2">
                    <span>Rejected</span>
                    <span class="bg-red-100 text-red-700 text-xs px-2 py-0.5 rounded-full">
                        {{ count($trainees['rejected']) }}
                    </span>
                </button>
            </div>

            {{-- Status-wise Cards --}}
            @php
                $statuses = [
                    'pending' => ['color' => 'blue', 'label' => 'Pending'],
                    'verified' => ['color' => 'green', 'label' => 'Verified'],
                    'rejected' => ['color' => 'red', 'label' => 'Rejected'],
                ];
            @endphp

            @foreach($statuses as $key => $status)
                <div x-show="tab === '{{ $key }}'" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($trainees[$key] as $trainee)
                        <div class="bg-white rounded-xl shadow-md hover:shadow-lg border border-gray-100 p-6 transition">
                            <div class="flex items-center gap-4">
                                {{-- Profile Image --}}
                                <img src="{{ $trainee['photo'] ?? 'https://ui-avatars.com/api/?name=' . urlencode($trainee['name']) . '&background=E5E7EB&color=374151&size=64' }}"
                                     alt="{{ $trainee['name'] }}"
                                     class="w-16 h-16 rounded-full border-2 border-{{ $status['color'] }}-300 object-cover">

                                {{-- Basic Info --}}
                                <div>
                                    <h2 class="text-lg font-bold text-gray-800">{{ $trainee['name'] }}</h2>
                                    <p class="text-sm text-gray-500">{{ $trainee['gender'] }} | DOB: {{ $trainee['dob'] }}</p>
                                    <p class="text-sm text-gray-500">📞 {{ $trainee['mobile'] }}</p>
                                </div>
                            </div>

                            {{-- Actions --}}
                            <div class="mt-4 flex gap-3">
                                <a href=""
                                   class="text-sm bg-{{ $status['color'] }}-100 text-{{ $status['color'] }}-700 px-3 py-1 rounded-md hover:bg-{{ $status['color'] }}-200 transition">
                                   View
                                </a>
                                <a href=""
                                   class="text-sm bg-yellow-100 text-yellow-700 px-3 py-1 rounded-md hover:bg-yellow-200 transition">
                                   Edit
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center text-gray-500 py-8">
                            No {{ strtolower($status['label']) }} trainees found.
                        </div>
                    @endforelse
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
