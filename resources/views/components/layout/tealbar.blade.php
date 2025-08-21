<!-- Desktop teal menu (with rotating arrow and singleton behavior) -->
  <div id="important-links" class="hidden md:block w-full bg-teal-600 text-white text-sm hide-on-scroll z-30">
    <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between gap-4">

      <!-- left group -->
      <div class="flex items-center gap-2">
        <a :class="$store.menu.isActive('/index.php') ? 'active-link rounded px-3 py-2 flex items-center gap-2' : 'px-3 py-2 flex items-center gap-2 hover:bg-teal-700 transition rounded'"
           href="index.php">
           <i class="fa-solid fa-house w-4"></i><span class="text-sm">Home</span>
        </a>

        <!-- Schemes dropdown -->
        <div class="relative" x-data>
          <button  @click="$store.menu.toggle('schemes')"
                  :class="['flex items-center gap-2 px-3 py-2 rounded transition',
                  ($store.menu.isActive('/schemes.php') ||
                    $store.menu.isActive('/scholarships.php') ||
                    $store.menu.isActive('/training.php'))
                    ? 'active-link rounded px-3 py-2 flex items-center gap-2'
                    : 'hover:bg-teal-700']">

            <i class="fa-solid fa-gift w-4"></i><span class="text-sm">Schemes</span>
            <i :class="$store.menu.open==='schemes' ? 'rotate-180 fa-solid fa-caret-down ml-1 text-xs' : 'fa-solid fa-caret-down ml-1 text-xs'"></i>
          </button>

          <div x-show="$store.menu.open==='schemes'" @click.away="$store.menu.close()" x-transition:enter="menu-enter menu-enter-active" x-transition:leave="menu-leave menu-leave-active"
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow w-56 z-50" style="display:none;">
            <a href="schemes.php" class="block px-4 py-2 hover:bg-teal-50">All Schemes</a>
            <a href="scholarships.php" class="block px-4 py-2 hover:bg-teal-50">Scholarships</a>
            <a href="training.php" class="block px-4 py-2 hover:bg-teal-50">Training Programs</a>
          </div>
        </div>

        <!-- Organisation dropdown -->
        <div class="relative" x-data>
          <button @click="$store.menu.toggle('org')"
                  :class="['flex items-center gap-2 px-3 py-2 rounded transition',
                          ($store.menu.isActive('/orghierarchy.php') ||
                          $store.menu.isActive('/polytechnics.php') ||
                          $store.menu.isActive('/itis.php'))
                          ? 'active-link rounded px-3 py-2 flex items-center gap-2'
                          : 'hover:bg-teal-700']">
            <i class="fa-solid fa-building w-4"></i><span class="text-sm">Organisation</span>
            <i :class="$store.menu.open==='org' ? 'rotate-180 fa-solid fa-caret-down ml-1 text-xs' : 'fa-solid fa-caret-down ml-1 text-xs'"></i>
          </button>

          <div x-show="$store.menu.open==='org'" @click.away="$store.menu.close()" x-transition:enter="menu-enter menu-enter-active" x-transition:leave="menu-leave menu-leave-active"
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow w-60 z-50" style="display:none;">
            <a href="orghierarchy.php" class="block px-4 py-2 hover:bg-teal-50">Organisation Structure</a>
            <a href="polytechnics.php" class="block px-4 py-2 hover:bg-teal-50">Polytechnics</a>
            <a href="ic.php#itis" class="block px-4 py-2 hover:bg-teal-50">ITIs</a>
          </div>
        </div>

        <a :class="$store.menu.isActive('/directory.php') ? 'active-link rounded px-3 py-2 flex items-center gap-2' : 'px-3 py-2 flex items-center gap-2 hover:bg-teal-700 transition rounded'"
           href="directory.php">
          <i class="fa-solid fa-phone w-4"></i><span class="text-sm">Contact</span>
        </a>

        <!-- Announcements -->
        <div class="relative" x-data>
          <button @click="$store.menu.toggle('ann')"
          :class="['flex items-center gap-2 px-3 py-2 rounded transition',
                          ($store.menu.isActive('/tenders.php') ||
                          $store.menu.isActive('/notifications.php'))
                          ? 'active-link rounded px-3 py-2 flex items-center gap-2'
                          : 'hover:bg-teal-700']">
            <i class="fa-solid fa-bullhorn w-4"></i><span class="text-sm">Announcements</span>
            <i :class="$store.menu.open==='ann' ? 'rotate-180 fa-solid fa-caret-down ml-1 text-xs' : 'fa-solid fa-caret-down ml-1 text-xs'"></i>
          </button>

          <div x-show="$store.menu.open==='ann'" @click.away="$store.menu.close()" x-transition:enter="menu-enter menu-enter-active" x-transition:leave="menu-leave menu-leave-active"
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow w-48 z-50" style="display:none;">
            <a href="notifications.php#notifications" class="block px-4 py-2 hover:bg-teal-50">Notifications</a>
            <a href="notifications.php#orders" class="block px-4 py-2 hover:bg-teal-50">Orders</a>
            <a href="notifications.php#circulars" class="block px-4 py-2 hover:bg-teal-50">Circulars</a>
            <a href="tenders.php" class="block px-4 py-2 hover:bg-teal-50">Tenders</a>
          </div>
        </div>

        <!-- Admissions -->
        <div class="relative" x-data>
          <button @click="$store.menu.toggle('adm')" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-teal-700 transition">
            <i class="fa-solid fa-user-graduate w-4"></i><span class="text-sm">Admissions</span>
            <i :class="$store.menu.open==='adm' ? 'rotate-180 fa-solid fa-caret-down ml-1 text-xs' : 'fa-solid fa-caret-down ml-1 text-xs'"></i>
          </button>

          <div x-show="$store.menu.open==='adm'" @click.away="$store.menu.close()" x-transition:enter="menu-enter menu-enter-active" x-transition:leave="menu-leave menu-leave-active"
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow w-72 z-50" style="display:none;">
            <a href="#" class="block px-4 py-2 hover:bg-teal-50">3 Year Polytechnic Diploma Courses</a>
            <a href="#" class="block px-4 py-2 hover:bg-teal-50">ITI - Craftsmen Training Courses</a>
          </div>
        </div>

        <a :class="$store.menu.isActive('/grv.php') ? 'active-link rounded px-3 py-2 flex items-center gap-2' : 'px-3 py-2 flex items-center gap-2 hover:bg-teal-700 transition rounded'"
           href="grv.php">
          <i class="fa-solid fa-message w-4"></i><span class="text-sm">Grievances</span>
        </a>

        <!-- Others -->
        <div class="relative" x-data>
          <button @click="$store.menu.toggle('oth')" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-teal-700 transition">
            <i class="fa-solid fa-ellipsis w-4"></i><span class="text-sm">Others</span>
            <i :class="$store.menu.open==='oth' ? 'rotate-180 fa-solid fa-caret-down ml-1 text-xs' : 'fa-solid fa-caret-down ml-1 text-xs'"></i>
          </button>

          <div x-show="$store.menu.open==='oth'" @click.away="$store.menu.close()" x-transition:enter="menu-enter menu-enter-active" x-transition:leave="menu-leave menu-leave-active"
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow w-48 z-50" style="display:none;">
            <a href="rti.php" class="block px-4 py-2 hover:bg-teal-50">RTI</a>
            <a href="directory.php" class="block px-4 py-2 hover:bg-teal-50">Directory</a>
            <a href="charter.php" class="block px-4 py-2 hover:bg-teal-50">Citizen Charter</a>
             <a href="initiatives.php" class="block px-3 py-2 rounded hover:bg-gray-50 text-sm">Initiatives and Programs</a>
          </div>
        </div>
      </div>

      <!-- right compact utilities -->
      <div class="flex items-center gap-2">
        <a :class="$store.menu.isActive('/faq.php') ? 'active-link rounded px-3 py-2 flex items-center gap-2' : 'px-3 py-2 flex items-center gap-2 hover:bg-teal-700 transition rounded'"
           href="faq.php">
          <i class="fa-solid fa-circle-question w-4"></i><span class="text-sm">FAQs</span>
        </a>

        <div class="relative" x-data>
          <button @click="$store.menu.toggle('utilities')" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-teal-700 transition bg-teal-500/30">
            <i class="fa-solid fa-ellipsis-vertical w-4"></i>
          </button>
          <div x-show="$store.menu.open==='utilities'" @click.away="$store.menu.close()" x-transition class="absolute right-0 mt-2 bg-white text-gray-800 rounded shadow w-48 z-50" style="display:none;">
            <a href="rti.php" class="block px-4 py-2 hover:bg-teal-50">RTI</a>
            <a href="charter.php" class="block px-4 py-2 hover:bg-teal-50">Citizen Charter</a>
            <a href="tenders.php" class="block px-4 py-2 hover:bg-teal-50">Site Map</a>
            <a href="ext.php" class="block px-4 py-2 hover:bg-teal-50">External Links</a>
          </div>
        </div>

      </div>
    </div>
  </div>
