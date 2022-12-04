@extends('layouts.base_html')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('main')
    <main>
        <section class="d-flex flex-row justify-content-evenly m-4 my-auto">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-black-50">Kitab Audio</h2>
                    </div>
                    @foreach ($products as $produk)
                        <div class="col-md-6 col-lg-4">
                            <div class="card my-3">
                                <div class="card-thumbnail" style="max-height: 250px; overflow: hidden;">
                                    <img src="{{ $produk->img }}" style="hover{}" class="img-thumbnail img-fluid"
                                        alt=" {{ $produk['nama_produk'] }} ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                    <p class="card-text">{{ $produk->exerpt }}</p>
                                    <button class="learn-more">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Lebih Detail</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
{{-- {!!  !!} for escape character (tag html di eksekusi) --}}
