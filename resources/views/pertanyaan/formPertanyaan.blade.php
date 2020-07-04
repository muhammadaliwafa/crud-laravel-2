@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="question">Pertanyaan:</label>
                <textarea type="text" class="form-control" placeholder="Enter your question" name="pertanyaan" id="question"></textarea>
            </div>
            <div class="form-group form-check">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/pertanyaan" class="btn btn-primary mt-3">kembali</a>

    </div>

@endsection