@extends('../layouts.main')

@section('container')
<style>
    * {
        text-align: left;
    }



    h1 {
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-label {
        position: absolute;
        text-align: left;
        left: 0px;
        margin-left: 300px;
        margin-bottom: 10px;
    }

    input {
        margin-left: 600px;
        margin-bottom: 10px;
    }

</style>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h1>Tambah Data Rekening</h1>
        <form action="{{ route('simpan-data-rekening') }}" class="input_form" method="post">
            @csrf
            <h5 class="form-label">Kode Rekening</h5><input type="text" name="no-rek">
            <h5 class="form-label">Nama Rekening</h5><input type="text" name="nama-rek">
            <input type="submit" value="Submit">
        </form>

@endsection