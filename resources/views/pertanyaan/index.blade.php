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
                            {{-- <a href="/jawaban/{{$item->id}}">lihat jawaban</a> --}}
                            <a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">show</a>
                            <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-default">edit</a>
                            <form action="/pertanyaan/{{$item->id}}" style="display: inline" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/pertanyaan/create" class="btn btn-primary mt-3">buat pertanyaan</a>   
    </div> 
@endsection