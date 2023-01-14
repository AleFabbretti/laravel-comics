@extends('layouts.main')

@section('page-title')
    Homepage
@endsection
@section('page-content')
    <div class="jumbotron"></div>
    <section class=" my-bg">
        <div class="comics container">
            <button>
                <h5>CURRENT SERIES</h5>
            </button>


            @foreach ($comics as $comic)
                <div class="comic">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            @endforeach


        </div>
        <div class="d-flex">
            <button class="my-secondary-btn">
                LOAD MORE
            </button>
        </div>
    </section>
@endsection
