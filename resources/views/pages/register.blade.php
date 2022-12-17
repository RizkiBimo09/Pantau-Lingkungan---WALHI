@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="lapor pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10 ">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">Register</h1>         
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section  form lapor  --}}
<section class="artikel pb-96">
    <div class="container bg-primary border border-primary shadow-sm">
    <form action="/register" method="post">
    @csrf 
    <div class="w-full px-4 mb-8 pt-5 ">
    <label for="email" class="text-base text-white font-bold uppercase">Nama</label>
    <input type="text" id="email" name="name" required class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
    <div class="w-full px-4 mb-8 pt-5 ">
    <label for="email" class="text-base text-white font-bold uppercase">Email</label>
    <input type="email" id="email" name="email" required class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
    <div class="w-full px-4 mb-8 ">
    <label for="password" class="text-base text-white font-bold uppercase">Password</label>
    <input type="password" id="password" name="password" required class="w-full text-black p-3 text-xl rounded-md font-semibold focus:outline-primary focus:ring-1 focus:border-primary">
    </div>
    <div class="w-full px-4 text-center mb-10">
        <button type="submit" class="text-xl font-semibold bg-green2 py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 transition duration-300 ease-in-out">Daftar</button>
    </div>
    </form>
    </div>
    </section>
{{-- end section  form lapor     --}}

@endsection