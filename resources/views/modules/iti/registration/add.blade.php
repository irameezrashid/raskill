@extends('layouts.site')
@section('title', 'Add New Trainee | Directorate of Skill Development, J&K')

@section('content')

<section class="bg-gray-50 py-12 min-h-screen">
    <div class="max-w-6xl mx-auto px-6"> {{-- Wider container --}}

        {{-- Trade Info Header --}}
        <div class="bg-white shadow-sm rounded-xl border border-gray-200 p-6 mb-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Add New Trainee</h1>
            <p class="text-gray-600 text-lg">
                Trade: <span class="font-semibold text-sky-700">{{ $trade['name'] }}</span>
                <span class="ml-3 text-sm bg-sky-100 text-sky-800 px-3 py-1 rounded-full">
                    {{ $trade['type'] }}
                </span>
            </p>
        </div>

        {{-- Trainee Form --}}
        <form action="#" method="POST" class="bg-white shadow-sm rounded-xl p-10 space-y-10 border border-gray-200">
            @csrf

            {{-- Section: Personal Info --}}
            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-6">Personal Information</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Full Name</label>
                        <input type="text" name="name"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-1 focus:ring-sky-400 focus:border-sky-400 transition"
                               placeholder="Enter full name" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Date of Birth</label>
                        <input type="date" name="dob"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-1 focus:ring-sky-400 focus:border-sky-400 transition"
                               required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Gender</label>
                        <select name="gender"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-1 focus:ring-sky-400 focus:border-sky-400 transition"
                                required>
                            <option value="">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Mobile Number</label>
                        <input type="text" name="mobile"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-1 focus:ring-sky-400 focus:border-sky-400 transition"
                               placeholder="Enter mobile number" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Email (optional)</label>
                        <input type="email" name="email"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-1 focus:ring-sky-400 focus:border-sky-400 transition"
                               placeholder="Enter email">
                    </div>
                </div>
            </div>

            {{-- Section: Photo Upload --}}
            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-6">Profile Photo</h2>
                <div class="flex items-center space-x-8">
                    <div class="w-24 h-24 rounded-full bg-gray-100 border border-gray-200 overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 text-sm">No Image</span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-3">Upload Photo</label>
                        <input type="file" name="photo"
                               class="block text-sm text-gray-700 file:mr-4 file:py-2 file:px-4
                               file:rounded-md file:border-0
                               file:text-sm file:font-medium
                               file:bg-sky-50 file:text-sky-700
                               hover:file:bg-sky-100">
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-sky-600 hover:bg-sky-700 text-white px-8 py-3 rounded-lg font-semibold shadow-sm transition">
                    Save Trainee
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
