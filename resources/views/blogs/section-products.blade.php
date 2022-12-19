
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
                        <h2 class="mb-3 text-black-50">Section {{ $title }}</h2>
                    </div>
                    @foreach ($products as $produk)
                        @if ($produk->type == $title)
                            <div class="col-md-6 col-lg-4">
                                <div class="card my-3" style="min-height: 450px; max-height: 450px;">
                                    <div class="card-thumbnail" style="max-height: 250px; min-height: 250px; overflow: hidden; ">
                                        <img loading="lazy" src="{{ $produk->img }}"
                                            class="img-responsive img-thumbnail img-fluid "
                                            style="min-height: 250px; object-fit: cover;" alt=" {{ $produk['nama_produk'] }} ">
                                    </div>
                                    <div class="card-body d-flex align-items-start flex-column mb-3">
                                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                        <p class="card-text mb-3">{{ $produk->excerpt() }}</p>
                                        <button id="learMore" type="button" class="learn-more mt-auto" data-bs-toggle="modal"
                                            data-bs-target="#modalDetail" data-value="{{ $produk->value }}"
                                            data-sound="{{ $produk->sound_quality }}" data-harga="{{ $produk->harga }}"
                                            data-review="{{ $produk->review }}" data-link="{{ $produk->link }}"
                                            data-nama_produk="{{ $produk->nama_produk }}">
                                            <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Lebih Detail</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('partials.modalProduct')
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#learMore', function() {
            var valueModal = $(this).data('value')
            var soundQModal = $(this).data('sound')
            var hargaModal = $(this).data('harga')
            var review = $(this).data('review')
            var linkBeli = $(this).data('link')
            var namaProdukModal = $(this).data('nama_produk')

            $('#review').append(review)
            $('#valueModal').text(valueModal)
            $('#soundQModal').text(soundQModal)
            $('#hargaModal').text(hargaModal)
            $('#namaProduk').text(namaProdukModal)
            $("#linkBeli").attr('href', linkBeli);
        });
    });
    // console.log("Settings page was loaded");
</script>
@endsection
{{-- {!!  !!} for escape character (tag html di eksekusi) --}}
