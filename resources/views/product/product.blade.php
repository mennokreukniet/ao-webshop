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
                    <form>
                        <input type="number" placeholder="amount">
                        <input type="submit" value="Add to cart">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection