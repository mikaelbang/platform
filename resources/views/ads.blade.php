@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse($ads as $ad)
                <div class="card card-default" style="margin-bottom: 10px">
                    <div class="card-header"><a href="{{ route('ad.show', ['slug' => $ad->slug]) }}">{{ $ad->id .'. '.  $ad->title }}</a></div>
                    <div class="card-body">
                        {{ $ad->description }}
                    </div>
                </div>
            @empty
                Inga annonser
            @endforelse
        </div>
    </div>
</div>
@endsection