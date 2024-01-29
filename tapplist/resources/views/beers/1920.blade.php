<!-- /home/js7y/dsdev/tapplist/tapplist/resources/views/beers/1920.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 48px;">All Beers</h1>
                <ul style="font-size: 36px;">
                    @foreach ($beers as $beer)
                        <li>{{ $beer->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
