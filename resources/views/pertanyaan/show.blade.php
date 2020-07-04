@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <table class="table">
        <h1>{{$pertanyaan}}</h1>
            <thead>
            <tr>
                <th>No</th>
                <th>Jawaban</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($jawaban as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->jawaban}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <form action="/jawaban/{{$id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jawaban">Tambahkan jawaban :</label>
                <textarea type="text" class="form-control" placeholder="Enter your answer" name="jawaban" id="jawaban"></textarea>
            </div>
            <input type="hidden" name="id" value={{$id}}>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/pertanyaan" class = "btn btn-primary mt-3">question list</a>
    </div>

@endsection