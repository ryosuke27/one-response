@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Message') }}</div>

                
                <div class="card-body">
                    @foreach($messages as $message)
                    <div class="card-title">
                        <h3>messages</h3>
                    </div>
                    <div class="card-text">
                        <a href="">{{ $message->text }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
