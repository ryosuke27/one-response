@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Archive') }}</div>

                
                <div class="card-body">
                    @foreach($archives as $archive)
                    <div class="card mt-2">
                        <div class="card-body">
                            <h6 class="card-text">{{ $archive->text }}</h6>
                            <button type="button" class="btn btn-info">Archive</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
