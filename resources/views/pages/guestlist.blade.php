@extends('app')

@section('content')

<section class="search-results">

    <div class="results clearfix">

        <div class="col-25 l clearfix">
            <div class="side-panel research l">
                 {{--links--}}
                <h3><a href="all-guests"><b>All Guests</b></a> </h3>
                <h3><a href="guests-going"><b>Guests Going</b></a> </h3>
                <h3><a href="guests-maybe-going"><b>Guests Maybe Going</b></a> </h3>
                <h3><a href="guests-not-going"><b>Guests Not Going</b></a> </h3>

                <h3><a href="services"><b>Services</b></a> </h3>

            </div>
        </div>

        <div class="col-70 r">

            @foreach($guests as $guest)

                @if(($guest['partner_id'] != null) && !(in_array($guest['id'], $arr_partner_ids)))
                    <h6><a target="_blank" href="guest/{{$guest['id']}}"><b>{{$guest['name']}}</b></a> and <a target="_blank" href="guest/{{$guest['partner_id']}}"><b>{{$guest['partner_name']}}</b></a></h6>
                @else
                    <h6><a target="_blank" href="guest/{{$guest['id']}}"><b>{{$guest['name']}}</b></a></h6>
                @endif

            @endforeach

        </div>

    </div>


</section>

@endsection