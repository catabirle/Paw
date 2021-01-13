@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editeaza continutul:') }}</div>

                <div class="card-body">
                    
                    <div class="flex-center position-ref full-height">
        <div class="content">

            <form method="POST" action="/products/{{$prod->id}}">

                <!-- "{{config('app.url')}}/products">  -->
                @csrf
                @method('PATCH')
                

                <div class="form-input">
                    <label> Name</label>
                    <input type="text" name="name" placeholder="{{$prod->name}}">
                </div>

                <div class="form-input">
                    <label> Description</label>
                    <input type="text" name="description" placeholder="{{$prod->description}}">
                </div>

                <div class="form-input">
                    <label> Price</label>
                    <input type="text" name="count" placeholder="{{$prod->price}}">
                </div>

                <div class="form-input">
                    <label>Count</label>
                    <input type="text" name="price" placeholder="{{$prod->count}}">
                </div>

                <button type="submit" class="btn btn-success btn-sm">Save and return</button>
            </form>

        </div>
    </div>              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
