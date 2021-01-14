@extends('layouts.app')

@section('content')
<style>
div {text-align: center;}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Insereaza datele:') }}</div>
                <div class="card-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <form method="POST" action="{{ url('/products') }}">
                                <!-- "{{config('app.url')}}/products">  -->
                                @csrf
                                
                                <div class="form-input">
                                    <label> Title</label>
                                    <input type="text" name="name">
                                </div>

                                <div class="form-input">
                                    <label> Description</label>
                                    <input type="text" name="description">
                                </div>

                                <div class="form-input">
                                    <label>Tags</label>
                                    <input type="text" name="price">
                                </div>

                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection