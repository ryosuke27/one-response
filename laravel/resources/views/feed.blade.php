@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feed') }}</div>

                
                @foreach($feeds as $feed)
                  <div class="card mt-2 ml-2 mr-2 mb-2">
                    <div class="card-text">
                        <a href="">{{ $feed->text }}</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
