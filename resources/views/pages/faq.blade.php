@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="lapor pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10 ">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">FREQUENTLY ASKED QUESTIONS
 </h1>         
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section  form lapor  --}}
<section class="artikel pb-96">
    <div class="container">
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa yang dimaksud dengan Walhi?</h4> 
            <button type="button" id="btn1" class="btn1 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest1" class="container">
            <p class="font-semibold text-white text-base">Wahana Lingkungan Hidup Indonesia (WALHI) sebagai organisasi lingkungan hidup memiliki mandat untuk perlindungan dan pengembangan wilayah kelola rakyat. Wilayah Kelola Rakyat (WKR) merupakan satu sistem pengelolaan wilayah tertentu yang integratif dan partisipatif baik dalam hal tata kuasa, kelola, produksi, dan konsumsi.</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa tujuan dari Platform Walhi</h4> 
            <button type="button" id="btn2" class="btn2 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest2" class="container">
            <p class="font-semibold text-white text-base">Tujuan dari walhi adalah untuk mewujudkan kemakmuran, keadilan, dan keberlanjutan makhluk hidup (manusia dan non-manusia) di Indonesia.</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa manfaat dari Walhi</h4> 
            <button type="button" id="btn3" class="btn3 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest3" class="container">
            <p class="font-semibold text-white text-base">Memperkuat dan memperluas wilayah kelola rakyat untuk mewujudkan perlindungan hak rakyat dalam tata kelola sumber daya alam dan lingkungan hidup yang sehat, adil dan berkelanjutan di Indonesia</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa fungsi dari Pantau Lingkungan?</h4> 
            <button type="button" id="btn4" class="btn4 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest4" class="container">
            <p class="font-semibold text-white text-base">Pantau Lingkungan adalah platform data interaktif dari Walhi yang digunakan untuk memantau penyelenggaraan dan pengelolaan wilayah Kelola rakyat senantiasa memperhatikan daya dukung ekologis sebagai pendukung kehidupan</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Cara melihat data pada peta ancaman : </h4> 
            <button type="button" class="btn5 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest5" class="container">
            <p class="font-semibold text-white text-base">1. Klik dashboard pada navbar</p>
            <p class="font-semibold text-white text-base">2. Isi kolom tahun, ancaman, wilayah, kategori</p>
            <p class="font-semibold text-white text-base">3. Klik tampilkan data</p>
            <p class="font-semibold text-white text-base">4. Peta akan menampilkan sesuai filter</p>
            <p class="font-semibold text-white text-base">5. Arahkan kursor ke wilayah yang ingin dilihat data nya</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Cara membuat laporan : </h4> 
            <button type="button" class="btn6 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest6" class="container">
            <p class="font-semibold text-white text-base">1. Klik lapor pada navbar</p>
            <p class="font-semibold text-white text-base">2. Isi kolom yang telah disediakan</p>
            <p class="font-semibold text-white text-base">3. Submit laporan</p>
            <p class="font-semibold text-white text-base">4. Tunggu respon dan progress laporan melalui kontak yang telah dicantumkan</p>
            </div>
            </div>
        </div>
       
    </div>
   
    </section>
{{-- end section  form lapor     --}}
<script>
$(document).ready(function(){
    $('#quest1').hide();
    $('#quest2').hide();
    $('#quest3').hide();
    $('#quest4').hide();
    $('#quest5').hide();
    $('#quest6').hide();

    $(".btn1").click(function(){
        $("#quest1").toggle();
    });
    $(".btn2").click(function(){
        $("#quest2").toggle();
    });
    $(".btn3").click(function(){
        $("#quest3").toggle();
    });
    $(".btn4").click(function(){
        $("#quest4").toggle();
    });
    $(".btn5").click(function(){
        $("#quest5").toggle();
    });
    $(".btn6").click(function(){
        $("#quest6").toggle();
    });
});
</script>
@endsection