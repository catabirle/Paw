@extends('layouts.app')

@section('content')
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
            <td class="inner-table">{{$prod->count}}</td>
            <td class="inner-table">{{$prod->price}}</td>

        </tr>

    </table>

    <form method="GET" action="{{ url('/products') }}">
        <!-- "{{config('app.url')}}/products">  -->
        @csrf
        <button type="submit" class="btn btn-primary btn-sm">Retrun to home page</button>
    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
