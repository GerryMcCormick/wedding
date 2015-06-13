@extends('services_header')

@section('content')
    {{--<h1 class="page-header">Services <a class="btn btn-primary" href="/admin/service/add">Add Service</a></h1>--}}
    <h1 class="page-header">Services </h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>Service</th>
            <th>Cost</th>
            <th>Paid</th>
            <th>Owed</th>
            </thead>
            <tbody>
            @foreach($services as $item)
                <tr>
                    <td>
                        {{--link to single service page needs set--}}
                        <a href="/service/{{ $item->id }}">{{ $item->name}}</a>
                    </td>
                    <td>{{ $item->cost }}</td>
                    <td>{{ $item->paid }}</td>
                    <td>{{ $item->cost - $item->paid }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <p><br><br></p>

        <h4>Total Cost: {{$total_cost}}</h4>
        <h4>Total Paid: {{$paid}}</h4>
        <h4>Total Owed: {{$total_cost - $paid}}</h4>
    </div>
@endsection