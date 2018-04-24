@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($categories as $category)
                         <a href="category/{{$category->id}}">{{$category->name}}</a><br>

                        <ul>
                            @foreach ($category->products as $product)
                                <li>{{$product->name}}</li>
                            @endforeach
                        </ul>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
