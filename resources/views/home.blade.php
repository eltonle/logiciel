@extends('layouts.master')

@section('content')
<div class="container">
    @foreach ($products as $product)
      <div class="arranged">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{ Storage::url($product->image) }}" width="20" height="90"alt="Card image cap">
            <div class="justify-center mx-auto flex mb-2">
                <div class="text-center ">Price:{{ $product->price }}fcfa</div>
                <a href="#" class="btn btn-primary ">ajouter!!!</a>
            </div>
        </div>
      </div>  
     @endforeach
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
