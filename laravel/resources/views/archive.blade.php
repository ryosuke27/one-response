@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Archive') }}<a href="{{ route('home') }}">{{ __('Home') }}</div>

                
                <div class="card-body">
                    @foreach($feeds as $feed)
                    <div class="card mt-2">
                        <div class="card-body">
                            <h6 class="card-text">{{ $feed->text }}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
