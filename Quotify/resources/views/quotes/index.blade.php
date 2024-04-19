@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1>
            Welcome to Quotify
        </h1>
    </div>
</div>
<div class="row align-items-center mb-3">
    <div class="col">
        <h3 class="display-5">Quotes</h3>
    </div>
    <div class="col-auto">
        <a href="{{ route('quotes.create') }}" class="btn btn-success">Add New Quote</a>
    </div>
</div>
<div class="row">
    @foreach ($quotes as $quote)
    <div class="col-md-4 mb-3">
        <div class="card" style="height: 400px;">
            <div style="width: 100%; height: 200px; overflow: hidden;">
               <p>
                 <img src="{{ $quote->imgurl }}" class="card-img-top" alt="Quote Image" style="width: 100%; height: 200px; object-fit: cover;">
               </p> 
            </div>
            <div class="card-title">
                <h5>{{ $quote -> quote}} </h5>
               
            </div>
            <div>
                <h5>{{ $quote -> author}} </h5>
            </div>
            <div class="card-body">
                <a href="{{ route('quotes.edit', $quote -> id ) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('quotes.trash', $quote -> id )}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection