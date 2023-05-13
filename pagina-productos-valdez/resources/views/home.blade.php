@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CRUD-vALDEZ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te has registrado') }}
                    <br><br>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">{{ __('Ver productos') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
