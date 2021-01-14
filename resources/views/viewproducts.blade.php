@extends('layouts.app')

@section('content')

<style>
div {text-align: center;}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome:') }}</div>
                <div class="card-body">
                @foreach ($allProducts as $product)

                    <table class="table table-bordered table-gr table">
                        <theadc>
                            <td>Title</Title></td>
                            <td>Description</td>
                            <td>Tags</td>
                            <td rowspan="2">
                                
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

                            </thead>
                            
                                
                                <tr>
                                    <!-- <td>{{$product->id}}</td> -->
                                    <td class="td">{{$product->name}}</td>
                                    <td class="inner-table td">{{$product->description}}</td>                               
                                    <td class="inner-table td">{{$product->price}}</td>
                                    
                                    </tr>
                                
                            
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection