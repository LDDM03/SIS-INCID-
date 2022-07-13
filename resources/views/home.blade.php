@extends('layouts.app')

@section('content')
            <div class="card" style="width: auto; height: auto ; text-align:center ; margin-top: 15px;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('You are logged in!') }}
                </div>
            </div>
@endsection
