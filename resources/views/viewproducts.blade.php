@extends('layouts.app')

@section('content')

<style>
div {text-align: center;}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detaliile acestei aplicatii:') }}</div>

                <div class="card-body">

                    <table class="table table-bordered table-hover table-striped">
                        <theadc>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Count</td>
                            <td>Price</td>

                            </thead>
                            <tbody>
                                @foreach ($allProducts as $product)
                                <tr>
                                    <!-- <td>{{$product->id}}</td> -->
                                    <td>{{$product->name}}</td>
                                    <td class="inner-table">{{$product->description}}</td>
                                    <td class="inner-table">{{$product->count}}</td>
                                    <td class="inner-table">{{$product->price}}</td>
                                    <td>
                                        
                                        <!-- <a class="btn btn-info btn-sm" href="{{route('products.edit',$product->id)}}"> -->
                                        <a class="btn btn-primary btn-sm" href='/products/{{$product->id}}/edit'>
                                            Edit
                                            <i class="glyphicon glyphicon-pencil"></i></a>
                                        <a class="btn btn-primary btn-sm" href="{{route('products.show',$product->id)}}">
                                            Show
                                            <i class="glyphicon glyphicon-pencil"></i></a>

                                        
                                        <form method="POST" action="/products/{{$product->id}}">

                                            @csrf
                                            @method('DELETE')
                                            
                                            <button  class="btn btn-danger btn-sm">
                                                Delete
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </button>
                                        </form>
                                    


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection