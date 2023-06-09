@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <a name="" id="" class="btn btn-primary my-3" href="{{'admin/projects'}}" role="button">Go to projects</a>
    <a name="" id="" class="btn btn-primary my-3" href="{{'admin/types'}}" role="button">Go to types</a>
    <a name="" id="" class="btn btn-primary my-3" href="{{'admin/tecnologies'}}" role="button">Go to tecnologies</a>
</div>
@endsection