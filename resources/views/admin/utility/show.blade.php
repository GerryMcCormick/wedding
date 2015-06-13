@extends('admin')

@section('content')

    <a class="btn btn-default" href="/admin/service/{{ $service->id }}/edit">Edit Service</a>

    <h1> Service </h1>

    <h4>Name</h4>
    <p>{{ $service->name }} </p>

    @if(isset($service->description) && !empty($service->description))
        <h4>Description</h4>
        <p>{!! $service->description !!} </p>
    @endif

    @if(isset($service->contact) && !empty($service->contact))
        <h4>Contact</h4>
        <p>{{ $service->contact }} </p>
    @endif

    @if(isset($service->telno) && !empty($service->telno))
        <h4>Tel No</h4>
        <p>{{ $service->telno }} </p>
    @endif

    @if(isset($service->cost) && !empty($service->cost))
        <h4>Cost</h4>
        <p>{{ $service->cost }}</p>
    @endif

    @if(isset($service->paid) && !empty($service->paid))
        <h4>Paid</h4>
        <p>{{ $service->paid }}</p>
    @endif

    @if(isset($service->date_due) && !empty($service->date_due))
        <h4>Paid</h4>
        <p>{{ date("l jS F Y", strtotime($service->date_due)) }}</p>
    @endif

@endsection