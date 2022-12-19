@extends('admin.layouts.base_html')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/items/create" class="btn btn-primary mb-3">Tambah Item</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class="table-primary">
                    <th scope="col">id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <a href="/dashboard/items/{{ $item->id }}?nama_produk={{ $item->nama_produk }}"
                                class="badge bg-warning border-0 text-black text-decoration-none" >Edit</a>
                            <form action="/dashboard/items/{{ $item->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 " onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
