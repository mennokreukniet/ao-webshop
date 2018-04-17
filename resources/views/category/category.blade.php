@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo $category->name; ?></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($products as $product)
                        <a href="<?php echo url('/'); ?>/product/{{$product->id}}">{{$product->name}}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection