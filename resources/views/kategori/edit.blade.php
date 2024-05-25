@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategori') }}</div>

                <div class="card-body">
                    <a href="{{ route('kategori.index') }}" class="btn btn-danger">Batal</a>
                    <hr>
                    @if (!$errors->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors }}
                      </div>
                    @endif
                    <form action="{{ route('kategori.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input name="nama" type="text" class="form-control" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea class="form-control" name="desc" id="" cols="30" rows="10">
                                {{ $data->deskripsi }}
                            </textarea>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
