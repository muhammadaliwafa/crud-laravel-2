@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <p>Judul Pertanyaan: <b><br>{{$pertanyaan->judul}}</b></p>
        <p>detail pertanyaan : <br>{{$pertanyaan->pertanyaan}}</p>
        <p>dibuat: {{$pertanyaan->created_at}}, diperbarui: {{$pertanyaan->updated_at}}</p>
        <table class="table">
        
            <thead>
            <tr>
                <th>No</th>
                <th>Jawaban</th>
                <th>dibuat</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($jawaban as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->jawaban}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <form action="/pertanyaan/{{$id}}" method="POST">
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