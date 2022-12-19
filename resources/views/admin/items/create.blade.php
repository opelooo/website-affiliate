@extends('admin.layouts.base_html')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Item</h1>
    </div>
    <div>
        <form action="/dashboard/items" method="post">
            @csrf
            <div class="d-flex">
                <div class="mb-3 flex-fill mx-2">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                        id="nama_produk" placeholder="" value="{{ old('nama_produk') }}" autofocus required>
                    @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 flex-fill mx-2">
                    <label for="value" class="form-label">Value Score</label>
                    <input type="text" class="form-control @error('value') is-invalid @enderror" name="value"
                        id="value" placeholder="" value="{{ old('value') }}" required>
                    @error('value')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 flex-fill mx-2">
                    <label for="sound_quality" class="form-label">Sound Quality Score</label>
                    <input type="text" class="form-control @error('sound_quality') is-invalid @enderror" name="sound_quality"
                        id="sound_quality" placeholder="" value="{{ old('sound_quality') }}" required>
                    @error('sound_quality')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="mb-3 mx-2">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <input class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" type="text"
                        placeholder="" id="excerpt" value="" aria-label="Disabled input example" disabled>
                    @error('excerpt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 mx-2">
                    <label for="link" class="form-label">Link Produk</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                        id="link" placeholder="" value="{{ old('link') }}" required>
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="mb-3 mx-2 flex-fill">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                            id="harga" placeholder="" value="{{ old('harga') }}" required>
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 mx-2 flex-fill">
                        <label for="type" class="form-label">Type</label>
                        <select type="text" class="form-select" name="type" id="type">
                            @foreach (['TWS', 'Headset', 'Speaker', 'Wreless Headphone', 'Sound Card', 'Kable', 'IEM', 'DAC', 'Mic', 'Eartips'] as $category)
                                @if (old('type') == $category)
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 mx-2">
                    <label for="img" class="form-label">Image Link</label>
                    <input type="text" class="form-control @error('img') is-invalid @enderror" name="img"
                        id="img" placeholder="" value="{{ old('img') }}" required>
                    @error('img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 mx-2">
                    <label for="review" class="form-label">Review</label>
                    <input id="review" type="hidden" name="review" class="reviewInputH" value="{{ old('review') }}">
                    <trix-editor input="review" id="review" onblur="fetchingExcerpt()"></trix-editor>
                    @error('review')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="d-flex mx-2 mb-3">
                <button type="submit" class="btn primary-btn bg-success text-white" style="width: 100px;">Tambah</button>
                <a href="/dashboard/items" type="submit" class="btn primary-btn bg-primary text-white mx-2"
                    style="width: 100px;">Batal</a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        // import Trix from "trix"

        const review = document.querySelector('input#review');
        const excerpt = document.querySelector('#excerpt');

        // document.addEventListener("trix-file-accept", function(e) => {
        //     e.preventDefault();
        // })

        function fetchingExcerpt() {
            fetch('/dashboard/items/checkExcerpt?review=' + review.value)
            .then(response => response.json())
            .then(data => excerpt.value = data.excerpt);
            setTimeout(fetchingExcerpt, 1000);
        };
    </script>
@endsection
