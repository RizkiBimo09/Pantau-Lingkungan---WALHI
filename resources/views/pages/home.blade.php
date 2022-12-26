@extends('layouts.main')


@section('container')
{{-- Section Hero --}}
<section id="home" class="pt-20">
    <div class="container">
    <div class="flex flex-wrap">
    {{-- Bagian Kanan --}}
    <div class="w-full self-center px-4 lg:w-1/2">
    <h1 class="text-xl font-Inter font-semibold md:text-2xl lg:text-3xl text-white">Selamat Datang di Platform</h1>
    <h1 class="text-3xl font-Inter mb-5 md:text-3xl lg:text-5xl text-green2 font-semibold ">PANTAU <span class="block">LINGKUNGAN</span></h1>
    <h2 class="text-xl font-Inter mb-10 text-white font-semibold">Pantau Lingkungan 
      merupakan wadah data interaktif yang dikembangkan oleh Wahana Lingkungan Hidup Indonesia (WALHI).</h2>

    {{-- Button search and location --}}
    <button type="button" class="text-white bg-green2 shadow-lg hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-emerald-300-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
        </svg><a href="#" class="text-black font-Inter font-extrabold"> Enter your location</a>
    </button>
    <button type="button" class="text-white bg-green2 shadow-lg hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-emerald-300-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
        <a href="#" class="text-black font-Inter font-extrabold"> Search </a>
    </button>
    {{-- end Button search and location  --}}
    </div>
    {{-- End Bagian Kanan --}}
    {{-- Bagian Kiri --}}
    <div class="w-full self-end px-4 lg:w-1/2">
    <div class="mt-10">
    <img src="{{ asset('images/bg1.png') }}" alt="bg-hero" class="max-w-full mx-auto">
    </div>
    </div>
    {{-- End Bagian Kiri --}}
    </div>
    </div>
</section>
{{-- End Section Hero --}}

{{-- Section Dashboard --}}
<section class="dashboard pt-36 pb-32">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h4 class="font-bold text-xl font-Inter text-white md:text-2xl lg:text-3xl">Dashboard</h4>
    </div>
    </div>
    <div class="flex flex-wrap">
    <div class="w-full self-center px-4 mb-10 lg:w-1/2">
    <div class="mt-10">
    <img src="{{ asset('images/peta.png') }}" alt="Peta" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    </div>
    <div class="w-full self-start px-4 mb-10 lg:w-1/2">
    <h2 class="font-bold mb-5 text-white mt-5 font-Inter text-xl md:text-2xl lg:text-3xl">Dashboard Pantau Lingkungan</h2>
    <p class="font-semibold text-white font-Inter text-base mb-14 md:text-base lg:text-xl">Dashboard #PantauLingkungan dikembangkan 
      sebagai kritik pelaksanaan proyek pembangunan milik pemerintah atau swasta, sehingga dapat meningkatkan kesadaran masyarakat mengenai perlindungan lingkungan hidup.</p>
    <a href="/dashboard" class="text-base font-semibold text-black font-Inter bg-green2 shadow-lg py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out">Lihat Dashboard</a>
    </div>
    </div>
    </div>
    </div>
</section>
{{-- End Section Dashboard --}}


{{-- Section Artikel --}}
<section class="artikel pt-12 pb-32">
    <div class="container">
     <div class="max-w-xl mx-auto text-center mt-10">
      <h4 class="font-bold mb-5 text-xl font-Inter text-white md:text-2xl lg:text-3xl">Artikel</h4>
    </div>
    <div class="flex flex-wrap">
    <div class="w-full px-4 mb-10 lg:w-1/3">
    <h1 class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">To Governments at the COP27 and the G20 Summit: Deliver actions on climate and economic justice!</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2 ">As COP27 and the G20 Summit begin to wind down, the updates so far are filled with news of scant outcomes and lack of agreement on key issues. World leaders and decision-makers assembled at these two important spaces to respond to the escalating global crises have a huge responsibility to deliver meaningful and tangible outcomes to save lives at this most critical time.

    </p>
      <small><a href="/detailartikel" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
      <span class=" mt-5 flex text-sm text-white font-semibold">09-11-2022</span>
    </div>
    <div class="w-full px-4 mb-10 lg:w-1/3">
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl">Alumni Santa Ursula, Salurkan Donasi “Semesta Hijau” Kepada WALHI</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
    <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
    <span class=" mt-5 flex text-sm text-white font-semibold">09-11-2022</span>
    </div>
    <div class="w-full px-4 lg:w-1/3">
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">Produsen FMCG Mencemati Lingkungan Kita</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
      <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
      <span class=" mt-5 flex text-sm text-white font-semibold">09-11-2022</span>
    </div>
     <div class="max-w-xl mx-auto text-center mt-2">
      <a href="#" class="text-base font-semibold text-black font-Inter bg-green2 shadow-lg py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out ">Lihat Selengkapnya</a>
    </div>
    </div>
</section>
{{-- End Section Artikel --}}

@endsection