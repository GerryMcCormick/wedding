@extends('admin')

@section('content')

    <a class="btn btn-default" href="/admin/guest/{{ $guest->id }}/edit">Edit Guest</a>

    <h1> Guest </h1>

    <h4>Name</h4>
    <p>{{ $guest->name }} </p>

    <h4>Category</h4>
    <p>{{ $category->name }} </p>

    <h4>Attending?</h4>
    <p>{{ $att_status->name }} </p>

    @if(isset($guest->address) && !empty($guest->address))
        <h4>Address</h4>
        <p>{!! $guest->address !!} </p>
    @endif

    @if(isset($partner) && !empty($partner))
        <h4>Partner</h4>
        <p><a href="/admin/guest/{{ $partner->id }}">{{ $partner->name }}</a></p>
    @endif


@endsection