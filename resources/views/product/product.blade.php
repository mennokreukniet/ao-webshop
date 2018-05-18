@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo $product->name; ?></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php echo $product->description ?>   
                    <h2>
                        €<?php echo $product->price ?>
                    </h2>

                    {{ Form::open(array('url' => '/cart')) }}
                        {{ Form::hidden('name'),         'echo  $product->name' }}
                        {{ Form::hidden('price'),        'echo $product->price' }}
                        {{ Form::hidden('description'),  'echo $product->description' }}
                        {{ Form::number('amount') }}
                        {{ Form::submit('submit'),       'Add to cart' }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection