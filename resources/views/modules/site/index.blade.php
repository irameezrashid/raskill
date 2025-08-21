@extends('layouts.site')
@section('title', 'Home | Directorate of Skill Development, J&K')


@section('content')

<!-- Hero -->
<section class="relative w-full">
  <div class="hero-swiper swiper w-full">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="relative w-full h-[300px] md:h-[450px] rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
          <img src="{{ asset('images/hero1.jpg') }}" alt="Skill Development Banner" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-2xl md:text-4xl font-bold">Empowering Youth Through <span class="text-orange-400">Skill Development</span></h1>
            <p class="mt-2 max-w-xl">Providing technical training and opportunities across Jammu and Kashmir.</p>

          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="relative w-full h-[300px] md:h-[450px] rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
          <img src="{{ asset('images/hero2.jpg') }}" alt="Technical Training" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-center text-white px-16">
            <h1 class="text-2xl md:text-4xl font-bold">Empowering Youth Through <span class="text-orange-400">Skill Development</span></h1>
            <p class="mt-2 max-w-xl">Providing technical training and opportunities across Jammu and Kashmir.</p>
          </div>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="relative w-full h-[300px] md:h-[450px] rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
          <img src="{{ asset('images/hero3.jpg') }}" alt="Skill India Certified" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-2xl md:text-4xl font-bold">Recognised by <span class="text-orange-400">Skill India</span></h1>
            <p class="mt-2 max-w-xl">Training aligned with national standards for better careers.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next text-white"></div>
    <div class="swiper-button-prev text-white"></div>
  </div>
</section>





<div data-aos="fade-up" class="flex items-center justify-center mb-4">
  <div class="flex-grow h-0.5 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></div>
  <span class="px-3 text-gray-700 text-sm font-semibold uppercase tracking-wider">Our Leadership</span>
  <div class="flex-grow h-0.5 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></div>
</div>

<!-- Leadership Cards Section -->
<section class="max-w-7xl mx-auto py-2 px-2 md:px-6">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


    <!-- Deputy CM -->
    <div class="bg-gradient-to-b from-white to-teal-50 rounded-xl shadow p-4 flex flex-col items-center text-center hover:shadow-lg transition duration-300 fade-in">
      <img src="{{ asset('images/cm.jpg') }}" alt="Sh. Surinder Kumar Choudhary" class="w-24 h-24 md:w-28 md:h-28 object-cover rounded-full border-2 border-teal-100 mb-3 shadow">
      <h3 class="font-semibold text-gray-800 text-base">Sh. Omar Abdullah</h3>
      <span class="block h-0.5 w-10 bg-teal-500 rounded-full my-1"></span>
      <p class="text-gray-600 text-xs">Chief Minister </p>
      <p class="text-gray-500 text-xs italic">Government of J&K</p>
    </div>
    <!-- Deputy CM -->
    <div class="bg-gradient-to-b from-white to-teal-50 rounded-xl shadow p-4 flex flex-col items-center text-center hover:shadow-lg transition duration-300 fade-in">
      <img src="{{ asset('images/minister.png') }}" alt="Sh. Surinder Kumar Choudhary" class="w-24 h-24 md:w-28 md:h-28 object-cover rounded-full border-2 border-teal-100 mb-3 shadow">
      <h3 class="font-semibold text-gray-800 text-base">Sh. Surinder Kumar Choudhary</h3>
      <span class="block h-0.5 w-10 bg-teal-500 rounded-full my-1"></span>
      <p class="text-gray-600 text-xs">Hon'ble Deputy Chief Minister</p>
      <p class="text-gray-500 text-xs italic">Skill Development Department</p>
      <p class="text-gray-500 text-xs italic">Government of J&K</p>
    </div>

    <!-- Administrative Secretary -->
    <div class="bg-gradient-to-b from-white to-teal-50 rounded-xl shadow p-4 flex flex-col items-center text-center hover:shadow-lg transition duration-300 fade-in delay-100">
      <img src="{{ asset('images/sect.png') }}" alt="Sh. Kumar Rajeev Ranjan, IAS" class="w-24 h-24 md:w-28 md:h-28 object-cover rounded-full border-2 border-teal-100 mb-3 shadow">
      <h3 class="font-semibold text-gray-800 text-base">Sh. Kumar Rajeev Ranjan, IAS</h3>
      <span class="block h-0.5 w-10 bg-teal-500 rounded-full my-1"></span>
      <p class="text-gray-600 text-xs">Administrative Secretary to the Govt of J&K</p>
      <p class="text-gray-500 text-xs italic">Skill Development Department</p>
    </div>

    <!-- Director with modal -->
    <div x-data="{ open: false }" class="relative">
      <div class="bg-gradient-to-b from-white to-teal-50 rounded-xl shadow p-4 flex flex-col items-center text-center hover:shadow-lg transition duration-300 fade-in delay-200">
        <img src="{{ asset('images/dir.png') }}" alt="Sh. Shahzad Alam, IAS" class="w-24 h-24 md:w-28 md:h-28 object-cover rounded-full border-2 border-teal-100 mb-3 shadow">
        <h3 class="font-semibold text-gray-800 text-base">Sh. Shahzad Alam, IAS</h3>
        <span class="block h-0.5 w-10 bg-teal-500 rounded-full my-1"></span>
        <p class="text-gray-600 text-xs">Director</p>
        <p class="text-gray-500 text-xs italic">Skill Development Department</p>
        <button @click="open = true" class="flex items-center gap-1 text-teal-700 font-semibold text-xs hover:underline mt-1 focus:outline-none">
          <i class="fas fa-comment-dots text-teal-600"></i>
          View Message
        </button>
      </div>


      <!-- Modal -->
      <div x-show="open" x-transition x-cloak
     class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[9999]">
  <div @click.away="open = false"
       class="bg-white/95 backdrop-blur-lg rounded-xl max-w-lg w-full p-6 space-y-5 shadow-2xl border border-teal-100">

    <!-- Heading -->
    <div>
      <h3 class="text-2xl font-bold text-gray-800 relative pb-2">
        Director's Message
        <span class="absolute bottom-0 left-0 w-20 h-1 bg-gradient-to-r from-teal-500 to-green-400 rounded-full"></span>
      </h3>
    </div>

    <!-- Message Body -->
    <div class="relative">
  <div class="absolute inset-0 opacity-5 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/memphis-colorful.png')]"></div>
  <div class="relative z-10 text-gray-700 text-sm leading-relaxed space-y-3 text-justify text-center">

    <p class="first-letter:text-3xl first-letter:font-bold first-letter:text-teal-600 first-letter:mr-1">
      The Skill Development Department stands at the forefront of empowering our youth, driving industrial growth, and
      strengthening the socio-economic fabric of Jammu & Kashmir. Our mission is to nurture technically skilled, confident,
      and adaptable professionals who can meet the ever-changing demands of industry and society.
    </p>

    <p>
      From humble beginnings in <span class="font-semibold text-teal-700">1981</span> with just
      <span class="italic">7 ITIs</span> and <span class="italic">2 Polytechnics</span>, we have grown into a vibrant network of
      <span class="underline decoration-teal-400">60 ITIs</span> and <span class="underline decoration-teal-400">32 Polytechnics</span>,
      offering diverse, industry-relevant programs. Alongside formal education, we run multiple skill enhancement initiatives,
      community development schemes, and targeted training missions, ensuring opportunities reach every corner of our Union Territory.
    </p>

    <p>
      Our vision is to create a <span class="font-semibold text-teal-700">future-ready workforce</span> equipped with
      cutting-edge technical skills, strong values, and the resilience to face global challenges.
      Together, we aim to inspire a generation that will lead our industries, strengthen our communities,
      and contribute to a stronger, self-reliant nation.
    </p>

  </div>
</div>


    <!-- Actions -->
    <div class="flex justify-end gap-3 pt-3 border-t border-gray-100">
      <button @click="open = false"
              class="bg-gradient-to-r from-teal-600 to-green-500 text-white px-4 py-1.5 rounded-lg shadow hover:from-teal-700 hover:to-green-600 text-sm font-medium">
        Close
      </button>
    </div>
  </div>
</div>

    </div>
  </div>
</section>







<div data-aos="fade-up" class="flex items-center justify-center my-12">
  <div class="flex-grow h-0.5 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></div>
  <span class="px-4 text-gray-700 text-sm font-semibold uppercase tracking-wider">Overview</span>
  <div class="flex-grow h-0.5 bg-gradient-to-r from-transparent via-teal-500 to-transparent"></div>
</div>


<section
  class="relative bg-gradient-to-b from-white to-teal-50 rounded-2xl shadow-xl p-8 md:p-12 space-y-12 overflow-hidden"
  x-data="{ readMore: false }">

  <!-- Decorative circles -->
  <div class="absolute -top-10 -left-10 w-40 h-40 bg-teal-100 rounded-full opacity-30 animate-pulse"></div>
  <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-orange-100 rounded-full opacity-30 animate-pulse"></div>

  <!-- Heading -->
  <div class="text-center space-y-4" data-aos="fade-down">
    <h2 class="text-3xl md:text-4xl font-extrabold text-teal-800">
      Welcome to the Directorate of Skill Development
    </h2>
    <p class="text-gray-700 max-w-3xl mx-auto text-lg md:text-xl">
      Driving technical education and vocational training across Jammu & Kashmir since 1981.
      Building a skilled, industry-ready workforce to power economic and social growth.
    </p>
  </div>


  <!-- Stats -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-white/70 backdrop-blur rounded-2xl p-5 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
         data-aos="zoom-in">
      <i class="fas fa-tools text-teal-700 text-3xl mb-2"></i>
      <p class="text-2xl font-bold text-gray-800">60</p>
      <p class="text-sm text-gray-600">ITIs (54 Govt, 6 Private)</p>
    </div>
    <div class="bg-white/70 backdrop-blur rounded-2xl p-5 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
         data-aos="zoom-in" data-aos-delay="100">
      <i class="fas fa-university text-teal-700 text-3xl mb-2"></i>
      <p class="text-2xl font-bold text-gray-800">32</p>
      <p class="text-sm text-gray-600">Polytechnics (24 Govt, 8 Private)</p>
    </div>
    <div class="bg-white/70 backdrop-blur rounded-2xl p-5 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
         data-aos="zoom-in" data-aos-delay="200">
      <i class="fas fa-users text-teal-700 text-3xl mb-2"></i>
      <p class="text-2xl font-bold text-gray-800">22,000+</p>
      <p class="text-sm text-gray-600">Annual Intake</p>
    </div>
    <div class="bg-white/70 backdrop-blur rounded-2xl p-5 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
         data-aos="zoom-in" data-aos-delay="300">
      <i class="fas fa-chart-line text-teal-700 text-3xl mb-2"></i>
      <p class="text-2xl font-bold text-gray-800">78,000+</p>
      <p class="text-sm text-gray-600">Youth Targeted in 5 Years</p>
    </div>
  </div>

  <!-- Detailed text -->
  <!-- Fancy & Center-Justified About Section -->
<div class="bg-gradient-to-br from-white via-teal-50 to-white rounded-3xl p-6 md:p-10 shadow-xl max-w-6xl mx-auto space-y-8 text-gray-700"
     data-aos="fade-up">

  <!-- Intro -->
  <p class="text-center text-lg md:text-xl font-medium leading-relaxed text-center">
    Established in 1981, the Directorate unified technical and vocational institutions across Jammu & Kashmir to better coordinate training and share resources for sustainable growth.
  </p>

  <!-- Read More Section -->
  <div x-show="readMore" x-transition class="space-y-12">

    <!-- About & Activities -->
    <div class="grid md:grid-cols-2 gap-10">
      <div data-aos="fade-right" class="space-y-3">
        <h3 class="flex items-center justify-center text-teal-800 font-semibold text-2xl border-b-2 border-teal-200 pb-2">
          <i class="fas fa-info-circle mr-2 text-teal-600"></i> About Us
        </h3>
        <p class="text-justify leading-relaxed">
          At its inception, the Directorate managed 21 ITIs and 2 Polytechnics. Today, it oversees 60 ITIs and 32 Polytechnics (including both government & private). ITIs deliver foundational skills, while Polytechnics focus on mid-level technical professionals located in every district headquarters.
        </p>
      </div>
      <div data-aos="fade-left" class="space-y-3">
        <h3 class="flex items-center justify-center text-teal-800 font-semibold text-2xl border-b-2 border-teal-200 pb-2">
          <i class="fas fa-cogs mr-2 text-teal-600"></i> Activities
        </h3>
        <ul class="list-disc list-inside space-y-1 text-justify">
          <li>Technician training (Diplomas in Engineering/Non-Engineering).</li>
          <li>Non-formal courses via Community Polytechnic Scheme.</li>
          <li>Craftsman Training through ITIs.</li>
          <li>Short-term courses & Apprenticeship Training.</li>
          <li>Skill development under PMKVY 3.0.</li>
        </ul>
      </div>
    </div>

    <!-- Mission & Vision -->
    <div class="grid md:grid-cols-2 gap-10">
      <div data-aos="fade-right" class="space-y-3">
        <h3 class="flex items-center justify-center text-teal-800 font-semibold text-2xl border-b-2 border-teal-200 pb-2">
          <i class="fas fa-bullseye mr-2 text-teal-600"></i> Mission
        </h3>
        <ul class="list-disc list-inside space-y-1 text-justify">
          <li>Improve staff & infrastructure quality in Government ITIs/Polytechnics.</li>
          <li>Modernize content and educational tools.</li>
          <li>Develop evaluation systems for healthy competition.</li>
          <li>Network institutions to bridge gaps.</li>
          <li>Promote R&D and entrepreneurship.</li>
          <li>Strengthen industry–institute partnerships.</li>
          <li>Expand vocational education across society.</li>
        </ul>
      </div>
      <div data-aos="fade-left" class="space-y-3">
        <h3 class="flex items-center justify-center text-teal-800 font-semibold text-2xl border-b-2 border-teal-200 pb-2">
          <i class="fas fa-eye mr-2 text-teal-600"></i> Vision
        </h3>
        <p class="text-justify leading-relaxed">
          To deliver quality education in engineering, technology, and management—through formal and non-formal modes—by constantly updating curricula, modernizing infrastructure, and training faculty. We empower the youth of Jammu & Kashmir with recognized skills for meaningful employment and economic growth.
        </p>
      </div>
    </div>

    <!-- Objectives -->
    <div data-aos="fade-up" class="space-y-3">
      <h3 class="flex items-center justify-center text-teal-800 font-semibold text-2xl border-b-2 border-teal-200 pb-2">
        <i class="fas fa-star mr-2 text-teal-600"></i> Objectives
      </h3>
      <ul class="list-disc list-inside space-y-1 text-justify">
        <li>Shape students as proactive agents of change in society.</li>
        <li>Offer top-class training via Government ITIs and Polytechnics.</li>
        <li>Emphasize value-based education and modern methods.</li>
        <li>Create a self-reliant, dynamic learning environment.</li>
        <li>Provide futuristic technical education and discipline for ethical, skilled professionals.</li>
      </ul>
    </div>
  </div>

  <!-- Read More Button -->
  <div class="text-center">
    <button class="px-5 py-2 text-teal-800 font-semibold border border-teal-300 rounded-full hover:bg-teal-100 transition"
            @click="readMore = !readMore">
      <span x-show="!readMore">Read More</span>
      <span x-show="readMore">Read Less</span>
    </button>
  </div>
</div>


  <!-- Quote -->
  <div class="border-l-4 border-teal-600 pl-4 italic text-gray-600 max-w-3xl mx-auto" data-aos="fade-up">
    "Building skilled hands to drive tomorrow's industry and empower our communities."
  </div>

  <!-- CTA -->
  <div class="flex flex-col sm:flex-row justify-center items-center gap-4 text-center" data-aos="zoom-in">
  <button class="bg-gradient-to-r from-teal-500 to-teal-700 text-white px-6 py-3 rounded-full shadow hover:shadow-md transform hover:-translate-y-0.5 transition">
    Explore Institutes
  </button>
  <button class="bg-gradient-to-r from-orange-400 to-orange-700 text-white px-6 py-3 rounded-full shadow hover:shadow-md transform hover:-translate-y-0.5 transition">
    Explore Courses
  </button>
</div>

</section>


<div class="flex items-center my-8">
  <div class="flex-grow border-t border-teal-500"></div>
  <div class="mx-2 w-2 h-2 bg-teal-500 rounded-full"></div>
  <div class="flex-grow border-t border-teal-500"></div>
</div>








<style>
/* 🎨 Animated Gradient Background */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
.bg-animated-gradient {
  background: linear-gradient(135deg, #fdba74, #ffedd5, #5eead4);
  background-size: 300% 300%;
  animation: gradientMove 12s ease-in-out infinite;
}
</style>

<!-- 📌 Initiatives & Programs Section - Vibrant Animated Sunset to Teal Sea -->
<section
  class="relative py-12 px-4 bg-animated-gradient overflow-hidden rounded-3xl mx-4 shadow-lg shadow-orange-300/40"
  data-aos="fade-up">

  <!-- Pattern Overlay -->
  <div class="absolute inset-0 opacity-[0.05] bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/memphis-mini.png')] rounded-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-6">

    <!-- Heading + Explore Button -->
    <div class="flex items-center justify-between mb-10">
      <h2 class="text-3xl font-bold text-teal-900">
        Initiatives
      </h2>
      <a href="initiatives.php" class="inline-flex items-center gap-2 bg-teal-700 text-white text-sm font-medium px-4 py-2 rounded-full shadow hover:bg-teal-800 hover:shadow-lg transition">
        <span>Explore</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">

      <!-- Card 1 -->
      <a href="women-empowerment.html" class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1 p-6 flex flex-col items-center text-center">
        <i class="fas fa-female text-4xl text-pink-500 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Women Empowerment</h3>
        <p class="text-sm text-gray-600">Promoting skill development, entrepreneurship, and self-reliance among women in J&K.</p>
      </a>

      <!-- Card 2 -->
      <a href="ciiit.html" class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1 p-6 flex flex-col items-center text-center">
        <i class="fas fa-lightbulb text-4xl text-yellow-500 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">CIIIT</h3>
        <p class="text-sm text-gray-600">Centers for Invention, Innovation, Incubation & Training — fostering creativity & industrial readiness.</p>
      </a>

      <!-- Card 3 -->
      <a href="pmnam.html" class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1 p-6 flex flex-col items-center text-center">
        <i class="fas fa-handshake text-4xl text-teal-500 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">PMNAM</h3>
        <p class="text-sm text-gray-600">Pradhan Mantri National Apprenticeship Mela — connecting youth with industries for skill enhancement.</p>
      </a>

      <!-- Card 4 -->
      <a href="coming-soon-1.html" class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1 p-6 flex flex-col items-center text-center">
        <i class="fas fa-cogs text-4xl text-indigo-500 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Coming Soon</h3>
        <p class="text-sm text-gray-600">Stay tuned for upcoming initiatives and training programs.</p>
      </a>

      <!-- Card 5 -->
      <a href="coming-soon-2.html" class="bg-white rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1 p-6 flex flex-col items-center text-center">
        <i class="fas fa-users text-4xl text-green-500 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Coming Soon</h3>
        <p class="text-sm text-gray-600">More programs to be announced soon for youth empowerment and skills.</p>
      </a>

    </div>
  </div>
</section>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Fade-in animation style -->
<style>
  [x-cloak] { display: none !important; }
.fade-in {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}
.fade-in.visible {
  opacity: 1;
  transform: none;
}
</style>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: { delay: 4000 },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
  });
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, // animation duration in ms
    once: true,    // animate only once
  });
</script>


<!-- Script to add fade-in on scroll -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
</script>

@endsection
