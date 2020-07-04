@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/items" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">name :</label>
            <input type="text" name= "name" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="description" id="description">
            </div>
    
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" placeholder="Enter stock" name="stock" id="description">
            </div>
    
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" placeholder="Enter price" name="price" id="description">
            </div>
            <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection