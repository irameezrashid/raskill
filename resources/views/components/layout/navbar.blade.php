  <!-- Top nav -->
  <nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <div class="flex items-center space-x-3">

        <!-- Mobile hamburger & sidebar state -->
        <div class="md:hidden" x-data>
          <button @click="$store.menu.setSidebar(true)" aria-label="Open menu" class="mr-2 p-2 rounded hover:bg-gray-100">
            <i class="fa-solid fa-bars text-xl text-teal-700"></i>
          </button>

          <!-- Mobile Sidebar -->
          <div
            x-show="$store.menu.sidebarOpen"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            @click.away="$store.menu.setSidebar(false)"
            class="fixed inset-y-0 left-0 w-72 bg-white shadow-2xl z-50 p-4 overflow-y-auto"
            style="display: none;"
          >
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full shadow-sm">
                <div>
                  <div class="text-sm font-semibold text-teal-700">Directorate of</div>
                  <div class="text-xs text-gray-600">Skill Development</div>
                </div>
              </div>
              <button @click="$store.menu.setSidebar(false)" aria-label="Close menu" class="p-2 rounded hover:bg-gray-100">
                <i class="fa-solid fa-xmark text-lg text-gray-600"></i>
              </button>
            </div>

            <!-- Primary links -->
            <nav class="space-y-1 text-gray-800">
              <a :class="$store.menu.isActive('/index.php') ? 'active-link rounded px-3 py-2 block' : 'px-3 py-2 block hover:bg-teal-50 rounded'"
                 href="index.php"> <i class="fa-solid fa-house mr-2"></i> Home</a>

              <a :class="$store.menu.isActive('/news.php') ? 'active-link rounded px-3 py-2 block' : 'px-3 py-2 block hover:bg-teal-50 rounded'"
                 href="news.php"> <i class="fa-solid fa-newspaper mr-2"></i> News</a>

              <a :class="$store.menu.isActive('/directory.php') ? 'active-link rounded px-3 py-2 block' : 'px-3 py-2 block hover:bg-teal-50 rounded'"
                 href="directory.php"> <i class="fa-solid fa-phone mr-2"></i> Directory</a>

              <a :class="$store.menu.isActive('/contact.php') ? 'active-link rounded px-3 py-2 block' : 'px-3 py-2 block hover:bg-teal-50 rounded'"
                 href="contact.php"> <i class="fa-solid fa-envelope mr-2"></i> Contact</a>
            </nav>

            <hr class="my-3">

            <!-- Collapsible grouped menu items (mobile) — use same store.toggle but with mobile-specific names -->
            <div class="space-y-2">

              <!-- Schemes -->
              <div>
                <button @click="$store.menu.toggle('mobile_schemes')"
                        class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded">
                  <div class="flex items-center gap-3"><i class="fa-solid fa-gift text-teal-600 w-5"></i><span>Schemes</span></div>
                  <i :class="$store.menu.open==='mobile_schemes' ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'"></i>
                </button>
                <div x-show="$store.menu.open==='mobile_schemes'" x-transition class="mt-1 space-y-1 pl-8">
                  <a href="schemes.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">All Schemes</a>
                  <a href="scholarships.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Scholarships</a>
                  <a href="training.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Training Programs</a>
                </div>
              </div>

              <!-- Organisation -->
              <div>
                <button @click="$store.menu.toggle('mobile_org')" class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded">
                  <div class="flex items-center gap-3"><i class="fa-solid fa-building text-teal-600 w-5"></i><span>Organisation</span></div>
                  <i :class="$store.menu.open==='mobile_org' ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'"></i>
                </button>
                <div x-show="$store.menu.open==='mobile_org'" x-transition class="mt-1 space-y-1 pl-8">
                  <a href="orghierarchy.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Organisation Structure</a>
                  <a href="polytechnics.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Polytechnics</a>
                  <a href="ic.php#itis" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">ITIs</a>
                </div>
              </div>

              <!-- Announcements -->
              <div>
                <button @click="$store.menu.toggle('mobile_ann')" class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded">
                  <div class="flex items-center gap-3"><i class="fa-solid fa-bullhorn text-teal-600 w-5"></i><span>Announcements</span></div>
                  <i :class="$store.menu.open==='mobile_ann' ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'"></i>
                </button>
                <div x-show="$store.menu.open==='mobile_ann'" x-transition class="mt-1 space-y-1 pl-8">
                  <a href="notifications.php#notifications" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Notifications</a>
                  <a href="notifications.php#orders" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Orders</a>
                  <a href="notifications.php#circulars" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Circulars</a>
                  <a href="tenders.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Tenders</a>
                </div>
              </div>

              <!-- Admissions -->
              <div>
                <button @click="$store.menu.toggle('mobile_adm')" class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded">
                  <div class="flex items-center gap-3"><i class="fa-solid fa-user-graduate text-teal-600 w-5"></i><span>Admissions</span></div>
                  <i :class="$store.menu.open==='mobile_adm' ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'"></i>
                </button>
                <div x-show="$store.menu.open==='mobile_adm'" x-transition class="mt-1 space-y-1 pl-8">
                  <a href="#" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">3 Year Polytechnic Diploma Courses</a>
                  <a href="#" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">ITI - Craftsmen Training Courses</a>
                </div>
              </div>

              <!-- Others -->
              <div>
                <button @click="$store.menu.toggle('mobile_oth')" class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded">
                  <div class="flex items-center gap-3"><i class="fa-solid fa-ellipsis text-teal-600 w-5"></i><span>Others</span></div>
                  <i :class="$store.menu.open==='mobile_oth' ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'"></i>
                </button>
                <div x-show="$store.menu.open==='mobile_oth'" x-transition class="mt-1 space-y-1 pl-8">
                  <a href="rti.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">RTI</a>
                  <a href="directory.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Directory</a>
                  <a href="charter.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Citizen Charter</a>
                </div>
              </div>

            </div>

            <div class="mt-4">
              <a href="dashboard.php" class="block text-center px-3 py-2 bg-teal-500 text-white rounded shadow hover:bg-teal-600">Login / Dashboard</a>
            </div>
          </div>
        </div>

        <!-- Logos (desktop) -->
        <img src="{{ asset('images/embelem.png') }}" alt="Emblem" class="hidden md:block h-10 md:h-12">
        <img src="{{ asset('images/skill-india-big-logo.svg') }}" alt="Skill India" class="hidden md:block h-8 md:h-10">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 md:w-12 md:h-12">
        <div class="ml-2">
          <div class="font-bold text-teal-800 text-sm sm:text-base md:text-xl">
            Directorate of <span class="text-orange-600">Skill Development</span>
          </div>
          <div class="text-sm sm:text-sm md:text-base text-gray-800">
            <span class="sm:hidden">Government of J&K</span>
            <span class="hidden sm:inline">Government of Jammu and Kashmir</span>
          </div>
        </div>
      </div>

      <!-- Right utilities (desktop) -->
      <div class="hidden md:flex items-center gap-3">
        <a href="dashboard.php" class="inline-flex items-center gap-2 bg-teal-500 text-white px-3 py-2 rounded shadow hover:bg-teal-600 text-sm">
          <i class="fa-solid fa-gauge"></i><span>Login</span>
        </a>
      </div>
    </div>
  </nav>
