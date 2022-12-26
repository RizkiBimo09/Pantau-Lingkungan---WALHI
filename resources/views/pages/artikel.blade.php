@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="plingkungan pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">ARTIKEL </h1>     
      <h1 class="font-bold text-xl font-Inter text-white md:text-3xl lg:text-3xl mt-2 mb-16 ">NEWS </h1>      
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section  Artikel  --}}
<section class="artikel pb-32">
    <div class="container">
    <div class="flex flex-wrap">
    <div class="w-full px-4 mb-10 lg:w-1/3">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/Artikel1.png') }}" alt="artikel1" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1 class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">To Governments at the COP27 and the G20 Summit: Deliver actions on climate and economic justice!</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2 ">LAs COP27 and the G20 Summit begin to wind down, the updates so far are filled with news of scant outcomes and lack of agreement on key issues. World leaders and decision-makers assembled at these two important spaces to respond to the escalating global crises have a huge responsibility to deliver meaningful and tangible outcomes to save lives at this most critical time.
</p>
      <small><a href="/detailartikel" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
       <span class=" mt-5 flex text-sm text-white font-semibold">09-11-2022</span>
    </div>
    <div class="w-full px-4 mb-10 lg:w-1/3">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/Artikel2.png') }}" alt="artikel2" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl">Alumni Santa Ursula, Salurkan Donasi “Semesta Hijau” Kepada WALHI</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
    <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a></small>
     <span class=" mt-5 flex text-sm text-white font-semibold ">09-11-2022</span>
    </div>
    <div class="w-full px-4 lg:w-1/3">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/Artikel3.png') }}" alt="artikel3" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">Produsen FMCG Mencemati Lingkungan Kita</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
      <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a> </small>
      <span class=" mt-5 flex text-sm text-white font-semibold ">09-11-2022</span>
      </div>
    <div class="w-full px-4 lg:w-1/3">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/Artikel1.png') }}" alt="artikel4" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">To Governments at the COP27 and the G20 Summit: Deliver actions on climate and economic justice!</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
      <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a> </small>
      <span class=" mt-5 flex text-sm text-white font-semibold ">09-11-2022</span>
      </div>
    <div class="w-full px-4 lg:w-1/3">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/artikel2.png') }}" alt="artikel5" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">Alumni Santa Ursula, Salurkan Donasi “Semesta Hijau” Kepada WALHI</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
      <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a> </small>
      <span class=" mt-5 flex text-sm text-white font-semibold ">09-11-2022</span>
      </div>
    <div class="w-full px-4 lg:w-1/3 mb-16">
     <div class="mt-10">
    <img src="{{ asset('images/artikel/artikel3.png') }}" alt="artikel6" class="max-w-full mx-auto shadow hover:shadow-2xl">
    </div>
    <h1  class="font-bold mb-5 text-white mt-5 font-Inter text-xl ">Produsen FMCG Mencemati Lingkungan Kita</h1>
    <p class="font-semibold text-white  font-Inter text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias aliquam corrupti reiciendis itaque modi! Culpa laborum consequatur fugit illum possimus alias deserunt hic, quod explicabo tempore sit voluptatem odit nobis dicta, illo corrupti accusantium corporis! Vero deserunt quos mollitia, earum atque, voluptatem est optio amet quasi rem aut accusantium?</p>
      <small><a href="#" class="text-green2 font-Inter font-semibold">Selengkapnya</a> </small>
      <span class=" mt-5 flex text-sm text-white font-semibold ">09-11-2022</span>
      </div>
    </div>
    
     <div class="max-w-xl mx-auto text-center mt-10">
      <a href="#" class="text-base font-semibold text-black font-Inter bg-green2 py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out ">Lihat Lebih Banyak</a>
    </div>
    </div>
    </section>
{{-- end section  artikel --}}

@endsection