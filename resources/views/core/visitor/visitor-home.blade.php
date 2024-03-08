@extends('layouts.base')

@section('content')  
    <div class="row justify-content-center">
        <div class="col-md-6 mt-lg-3">
            <div class="py-4">
                <div class="p-5 mb-4">
                    <div class="py-5">
                        <h1 class="display-6 fw-bold">Tingkatkan Potensimu</h1>
                        <p>Bersama kami</p>
                        <p class="col-md-12 ">Jadilah bagian dari perubahan positif dalam dirimu dengan mengembangkan potensimu melalui pembelajaran daring yang inspiratif, membuka pintu menuju peluang tak terbatas dalam dunia yang terus berkembang ini</p>
                        <button class="btn btn-dark btn-lg" type="button">Belajar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/image-landing-page-header.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 mt-5">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <h2 class="mb-3 text-center font-weight-bold">Kenapa Harus Learnify</h2>
            <p class="m-0 text-center font-weight-500">Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin, Dicoding Academy juga memiliki reviewer profesional yang akan mengulas kode Anda.</p>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <h2 class="mb-3 text-center font-weight-bold">Learning Path</h2>
        <p class="m-0 text-center font-weight-500">Learning path akan membantu Anda dalam belajar di Academy dengan kurikulum yang dibangun bersama pelaku industri ternama.</p>
    </div>
</div>

{{-- Our Partners --}}


<div class="container">
  <div class="bg-dark rounded text-center text-white p-5 mt-5">
      <h2 class="font-weight-500 mb-3">Tunggu apa lagi?</h2>
      <p>Belajar lebih terarah dengan learning path dan code review</p>
      <a href="https://www.dicoding.com/registration" class="btn dcd-btn bg-white remove-style-link mt-3" data-event-category="Homepage" data-event-action="Click register">Buat Akun</a>
  </div>
</div>
@endsection
