@extends('layouts.main')

@section('container')
<section id="detailartikel" class="pt-36">
    <div class="container">
    <div class="flex flex-wrap">
    {{-- Bagian Kanan --}}
    <div class="w-full self-center px-4">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class=" text-3xl font-Inter text-white md:text-2xl lg:text-2xl mb-14"><span class="text-gray-300"><a href="/">BERANDA</a></span> / ARTIKEL</h1>    
       <h2 class="text-2xl font-Inter mb-10 text-white font-bold">To Governments at the COP27 and the G20 Summit: Deliver actions on climate and economic justice!</h2>
       <small class="text-sm text-white font-semibold ">Admin, 09 Desember 2022</small>
    </div>
    <div class="mt-10">
    <img src="{{ asset('images/artikel/AL 1.jpeg') }}" alt="artikel" class="w-[750px]  mx-auto">
    <p class="mt-10 text-justify text-xl text-white font-semibold">
    As COP27 and the G20 Summit begin to wind down, the updates so far are filled with news of scant outcomes and lack of agreement on key issues. World leaders and decision-makers assembled at these two important spaces to respond to the escalating global crises have a huge responsibility to deliver meaningful and tangible outcomes to save lives at this most critical time.

    Today, November 16, we are waging actions across Asia and at COP27 to add our voices and demands to the global clamor for climate and economic justice! We reiterate the following demands:

    https://walhi.or.id/uploads/APMDD%20STATEMENT%20-%20G20%20COP27%20Nov%2016%202022.pdf
    </p>
    </div>
    </div>
    </div>
</section>
{{-- End Detail Artikel --}}
@endsection