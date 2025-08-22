@extends('layouts.site')
@section('title', 'Directory | Directorate of Skill Development, J&K')

@section('content')

<section
    class="bg-transparent rounded-2xl p-6 md:p-10 space-y-8"
    id="notificationsSection"
    x-data="contactsApp()"
>

  <div class="flex flex-wrap items-center justify-between mb-6 gap-4">
    <h1 class="text-3xl font-bold flex items-center gap-2">
      📇 Contact Directory
    </h1>
    <button @click="exportToExcel" class="bg-teal-50 border border-teal-500 hover:bg-teal-50 text-teal-700 font-semibold px-4 py-2 rounded-md flex items-center gap-2">
      <i class="fas fa-file-excel text-teal-600 text-lg"></i>
      Export to Excel
    </button>
  </div>

  <!-- Search + Category Filters -->
  <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
    <!-- Search -->
    <input type="text" x-model.debounce.500ms="search" placeholder="🔍 Search contacts..." class="w-full sm:w-80 px-4 py-2 border border-gray-300 rounded-md shadow-sm" />

    <!-- Categories -->
    <div class="flex flex-wrap gap-2">
      <template x-for="cat in categories" :key="cat.name">
        <button
          @click="filterCategory(cat.name)"
          :class="category === cat.name ? 'bg-teal-600 text-white ring-2 ring-teal-300 scale-105 animate-pulse' : 'bg-gray-100 text-gray-800'"
          class="transition-all px-3 py-1 rounded-full text-sm font-medium shadow-sm hover:bg-teal-200"
        >
          <span x-text="cat.name"></span>
          <span class="ml-1 text-xs font-semibold bg-white text-teal-700 px-1.5 py-0.5 rounded-full" x-text="getCount(cat.name)"></span>
        </button>
      </template>
    </div>
  </div>

  <!-- Contact Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <template x-for="(contact, index) in filteredContacts.slice(0, visibleCount)" :key="contact.id">
      <div class="bg-gradient-to-br from-teal-50 to-white p-4 rounded-xl shadow hover:shadow-lg transition-all border border-teal-100">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold" x-text="contact.name"></h2>
          <span class="text-sm px-2 py-0.5 bg-teal-100 text-blue-700 rounded-full" x-text="contact.category"></span>
        </div>
        <p class="text-sm text-gray-600" x-text="contact.designation"></p>
        <p class="text-sm text-gray-600" x-text="contact.department"></p>

        <!-- Expandable Details -->
        <button @click="toggleDetails(index)" class="text-sm mt-2 text-teal-700 hover:underline">View Details...</button>
        <div x-show="expandedIndex === index" x-transition class="mt-2 text-sm space-y-1 border-t pt-2 text-gray-700">
          <p><strong>Email:</strong> <span x-text="contact.email"></span></p>
          <p><strong>Mobile:</strong> <span x-text="contact.mobile"></span></p>
          <p><strong>Address:</strong> <span x-text="contact.address"></span></p>
        </div>
      </div>
    </template>
  </div>

  <!-- Load More -->
  <div class="mt-8 flex justify-center">
    <button
      x-show="visibleCount < filteredContacts.length"
      @click="visibleCount += 6"
      class="px-6 py-2 bg-teal-600 text-white rounded-md hover:bg-teal-700"
    >
      Load More
    </button>
  </div>
</section>

@push('scripts')
    <script>
document.addEventListener('alpine:init', () => {
    Alpine.data('contactsApp', () => ({
        search: '',
        category: 'All',
        visibleCount: 6,
        expandedIndex: null,

        // Load live data from Blade
        contacts: @json($employees),

        get categories() {
            const all = [...new Set(this.contacts.map(c => c.category))];
            return [{ name: 'All' }, ...all.map(cat => ({ name: cat }))];
        },

        filterCategory(cat) {
            this.category = cat;
            this.visibleCount = 6;
        },

        getCount(cat) {
            return cat === 'All'
                ? this.contacts.length
                : this.contacts.filter(c => c.category === cat).length;
        },

        get filteredContacts() {
            return this.contacts.filter(c => {
                const matchesCategory = this.category === 'All' || c.category === this.category;
                const searchStr = this.search.toLowerCase();
                const matchesSearch = c.name.toLowerCase().includes(searchStr) || c.designation.toLowerCase().includes(searchStr) || c.address.toLowerCase().includes(searchStr);
                return matchesCategory && matchesSearch;
            });
        },

        toggleDetails(index) {
            this.expandedIndex = this.expandedIndex === index ? null : index;
        },

        exportToExcel() {
            const data = this.filteredContacts.map(c => ({
                Name: c.name,
                Designation: c.designation,
                Department: c.department,
                Category: c.category,
                Email: c.email,
                Mobile: c.mobile,
                Address: c.address,
            }));
            const worksheet = XLSX.utils.json_to_sheet(data);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, "Contacts");
            XLSX.writeFile(workbook, "filtered_contacts.xlsx");
        },
    }));
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
@endpush

@endsection
