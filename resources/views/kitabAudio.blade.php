@extends('layouts.base_html')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('main')
    <main>
        <section class="d-flex flex-row justify-content-evenly m-4 my-auto pt-4">
            <div class="container-fluid " style="max-height: ">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 text-black-50">Section TWS</h2>
                    </div>
                    @foreach ($products as $produk)
                        <div class="col-md-6 col-lg-4">
                            <div class="card my-3" style="min-height: 450px; max-height: 450px;">
                                <div class="card-thumbnail" style="max-height: 250px; min-height: 250px; overflow: hidden; ">
                                    <img loading="lazy" src="{{ $produk->img }}"
                                        class="img-responsive img-thumbnail img-fluid "
                                        style="min-height: 250px; object-fit: cover;" alt=" {{ $produk['nama_produk'] }} ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                    <p class="card-text">{{ $produk->exerpt }}</p>
                                    <button id="learMore" type="button" class="learn-more" data-bs-toggle="modal"
                                        data-bs-target="#modalDetail" data-value="{{ $produk->value }}"
                                        data-sound="{{ $produk->sound_quality }}" data-harga="{{ $produk->harga }}"
                                        data-buds="{{ $produk->tipe_buds }}" data-codec="{{ $produk->bluetooth_codec }}"
                                        data-battery="{{ $produk->battery }}" data-review="{{ $produk->review }}"
                                        data-link="{{ $produk->link }}" data-tuning="{{ $produk->sound_tuning }}">
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
    @include('partials.modal')
@endsection
{{-- {!!  !!} for escape character (tag html di eksekusi) --}}
