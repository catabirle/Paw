@extends('layouts.app')

@section('content')
<style>
    div {
        text-align: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detaliile acestei postari:') }}</div>

                <div class="card-body">

                    <body>
                        <h2>

                        </h2>
                        <table class="table table-bordered">

                            <tr>

                                <td class="inner-table">{{$prod->name}}</td>
                                <td class="inner-table">{{$prod->description}}</td>
                                <td class="inner-table">{{$prod->price}}</td>

                            </tr>

                        </table>
                        <form method="POST" action="/products/{{$products}}">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button>
                        </form>

                        <form method="GET" action="{{ url('/products') }}">
                            <!-- "{{config('app.url')}}/products">  -->
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Retrun to posts page</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection