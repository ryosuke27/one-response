@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Message') }}</div>

                
                @foreach($messages as $message)
                  <div class="card mt-2 ml-2 mr-2 mb-2">
                    <div class="card-text">
                        <a href="">{{ $message->text }}</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
