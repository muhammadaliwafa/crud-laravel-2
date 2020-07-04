@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="question">Pertanyaan:</label>
                <textarea type="text" class="form-control"  name="pertanyaan" id="question">{{$pertanyaan->pertanyaan}}</textarea>
            </div>
            <div class="form-group form-check">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="/pertanyaan" class="btn btn-primary mt-3">kembali</a>

    </div>

@endsection