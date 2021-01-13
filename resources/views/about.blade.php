@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detaliile acestei aplicatii:') }}</div>

                <div class="card-body">
                    {{ __('Aici sunt cateva detalii!') }}

                    <p>Aici este ceva.</p>
                    <p>Cata Birle.</p>
                    <p>My app is great!!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection