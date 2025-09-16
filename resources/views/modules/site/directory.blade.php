@extends('layouts.site')
@section('title', 'Directory | Directorate of Skill Development, J&K')

@section('content')

<section
    class="bg-transparent rounded-2xl p-6 md:p-10 space-y-8"
    id="directorySection"
    x-data="directoryApp()"
>

  <!-- Header -->
  <div class="flex flex-wrap items-center justify-between mb-6 gap-4">
    <h1 class="text-3xl font-bold flex items-center gap-2">
      📇 Institute Directory
      <span class="ml-2 text-sm font-semibold bg-teal-100 text-teal-700 px-2 py-0.5 rounded-full"
        x-text="institutes.length"></span>
    </h1>
    <button @click="exportToExcel"
      class="bg-green-50 border border-green-300 hover:bg-green-100 text-green-700 font-semibold px-4 py-2 rounded-md flex items-center gap-2">
      <i class="fas fa-file-excel text-green-600 text-lg"></i>
      Export to Excel
    </button>
  </div>

  <!-- Search + Category Tags -->
  <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
    <input type="text" x-model.debounce.500ms="search" placeholder="🔍 Search institutes..."
      class="w-full sm:w-96 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-teal-400" />

    <div class="flex flex-wrap gap-2">
      <template x-for="cat in categories" :key="cat.name">
        <button
          @click="filterCategory(cat.name)"
          :class="category === cat.name
                   ? categoryColor(cat.name)+' text-white scale-105'
                   : categoryColor(cat.name)+' '+categoryHoverColor(cat.name)+' text-gray-800'"
          class="transition-all px-3 py-1 rounded-full text-sm font-medium shadow-sm"
        >
          <span x-text="cat.name"></span>
          <span class="ml-1 text-xs font-semibold bg-white text-teal-700 px-1.5 py-0.5 rounded-full"
                x-text="getCount(cat.name)"></span>
        </button>
      </template>
    </div>
  </div>

  <!-- Institute Cards Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <template x-for="inst in paginatedInstitutes" :key="inst.id">
      <div
        x-transition:enter="transition transform ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition duration-300"
      >
        <!-- Top Badge / Category -->
        <div :class="categoryColor(inst.category)+' text-white px-3 py-1 text-xs font-semibold uppercase tracking-wide'">
          <span x-text="inst.category"></span>
        </div>

        <!-- Card Content -->
        <div class="p-4 space-y-2">
          <h2 class="text-lg font-bold text-gray-800" x-text="inst.name"></h2>
          <p class="text-sm text-gray-600">
            <span class="font-medium" x-text="inst.hoi"></span>
            <span class="text-gray-500"> — </span>
            <span x-text="inst.designation"></span>
          </p>
          <p class="text-sm text-gray-600" x-text="inst.address"></p>
          <p class="text-sm text-gray-600">
            <strong>Mobile:</strong> <span x-text="inst.mobile"></span>
          </p>
          <p class="text-sm text-gray-600">
            <strong>Email:</strong> <span x-text="inst.email"></span>
          </p>
          <p class="text-sm text-teal-600 font-medium hover:underline">
            <a :href="inst.website" target="_blank" x-text="inst.website"></a>
          </p>
        </div>
      </div>
    </template>
  </div>

  <!-- Infinite Scroll Loader -->
  <div x-show="hasMore" class="flex justify-center mt-6">
    <span class="px-6 py-2 bg-teal-100 text-teal-700 rounded-lg animate-pulse">
      Loading more...
    </span>
  </div>

  <!-- End Message -->
  <div x-show="!hasMore && filteredInstitutes.length > 0" class="flex justify-center mt-6">
    <span class="px-6 py-2 bg-gray-200 text-gray-600 rounded-lg">
      🎉 You’ve reached the end!
    </span>
  </div>

  <!-- Back to Top Button -->
  <button
    x-show="showTopButton"
    @click="scrollTop()"
    class="fixed bottom-6 right-6 p-3 bg-teal-600 text-white rounded-full shadow-lg hover:bg-teal-700 transition opacity-80 hover:opacity-100"
  >
    ↑ Top
  </button>

</section>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
  Alpine.data('directoryApp', () => ({
    search: '',
    category: 'All',
    visibleCount: 9,
    step: 6,
    showTopButton: false,
    institutes: @json($institutes),

    init() {
      window.addEventListener('scroll', () => {
        // Infinite scroll
        if (this.hasMore && (window.innerHeight + window.scrollY) >= document.body.offsetHeight - 200) {
          this.loadMore();
        }
        // Show back to top button
        this.showTopButton = window.scrollY > 300;
      });
    },

    scrollTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    },

    get categories() {
      const all = [...new Set(this.institutes.map(i => i.category))];
      return [{ name: 'All' }, ...all.map(c => ({ name: c }))];
    },

    filterCategory(cat) {
      this.category = cat;
      this.visibleCount = 9;
    },

    getCount(cat) {
      if (cat === 'All') return this.institutes.length;
      return this.institutes.filter(i => i.category === cat).length;
    },

    get filteredInstitutes() {
      const searchStr = this.search.toLowerCase();
      return this.institutes.filter(i => {
        const matchesCategory = this.category === 'All' || i.category === this.category;
        return matchesCategory &&
          (i.name.toLowerCase().includes(searchStr) ||
           i.hoi.toLowerCase().includes(searchStr) ||
           i.designation.toLowerCase().includes(searchStr) ||
           i.address.toLowerCase().includes(searchStr));
      });
    },

    get paginatedInstitutes() {
      return this.filteredInstitutes.slice(0, this.visibleCount);
    },

    get hasMore() {
      return this.visibleCount < this.filteredInstitutes.length;
    },

    loadMore() {
      if (this.hasMore) this.visibleCount += this.step;
    },

    exportToExcel() {
      const data = this.filteredInstitutes.map(i => ({
        Name: i.name,
        HOI: i.hoi,
        Designation: i.designation,
        Category: i.category,
        Email: i.email,
        Mobile: i.mobile,
        Address: i.address,
        Website: i.website,
      }));
      const worksheet = XLSX.utils.json_to_sheet(data);
      const workbook = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(workbook, worksheet, "Institutes");
      XLSX.writeFile(workbook, "institutes_directory.xlsx");
    },

    // Base color per category (brighter pastels)
categoryColor(cat) {
  switch(cat.toLowerCase()) {
    case 'iti': return 'bg-teal-300';
    case 'polytechnic': return 'bg-indigo-300';
    case 'directorate': return 'bg-amber-300';
    default: return 'bg-gray-300';
  }
},

// Hover color per category (slightly brighter)
categoryHoverColor(cat) {
  switch(cat.toLowerCase()) {
    case 'iti': return 'hover:bg-teal-400';
    case 'polytechnic': return 'hover:bg-indigo-400';
    case 'directorate': return 'hover:bg-amber-400';
    default: return 'hover:bg-gray-400';
  }
}


  }));
});
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
@endpush

@endsection
