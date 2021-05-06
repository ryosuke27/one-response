@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feed') }}</div>


                @foreach($feeds as $feed)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Feed</h5>
                        <p class="card-text">{{ $feed->text }}</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection