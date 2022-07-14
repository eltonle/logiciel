@extends('layouts.master')

@section('title')
   Product Create
@endsection
@section('content')
 
<div class="card ">
    <div class="card-body">
        <a href="{{ route('products.index') }}"class="btn btn-success">Back</a>
    </div>


    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="exampleInputEmail1" placeholder="Enter email">
            </div>
           
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-select form-select-md">
                    <option >------------</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="description">Description</label>
                <textarea  name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }} id="description"> </textarea>
            </div> --}}
        
        </div>

        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div> 

@endsection

