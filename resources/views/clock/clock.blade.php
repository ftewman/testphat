@extends("layout")
@section("stylesheet")
    <link href="{{ asset('css/clock/clock.css') }}" rel="stylesheet"/>
@endsection
@section("content")
    <div class="clock">
        <div id="Date"></div>
        <ul>
            <li id="hours"></li>
            <li id="point">:</li>
            <li id="min"></li>
            <li id="point">:</li>
            <li id="sec"></li>
        </ul>
    </div>
    <div>
        <h1 id="status"></h1>
    </div>
@endsection
@section("javascript")
    @include("clock.js-clock")
@endsection
