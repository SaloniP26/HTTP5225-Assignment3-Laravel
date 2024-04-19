@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add a Quote</h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('create') }}" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif{{ csrf_field() }}
        <div class="mb-3">
            <label for="quote" class="form-label">Quote</label>
            <input type="text" class="form-control" id="quote" name="quote" aria-describedby="quote">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" aria-describedby="author">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection