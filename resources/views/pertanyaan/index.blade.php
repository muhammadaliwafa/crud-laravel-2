@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($items as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->pertanyaan}}</td>
                        <td>
                            <a href="/jawaban/{{$item->id}}">lihat jawaban</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/pertanyaan/create" class="btn btn-primary mt-3">buat pertanyaan</a>   
    </div> 
@endsection