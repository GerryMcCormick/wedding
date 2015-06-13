@extends('admin')

@section('content')
    <h1 class="page-header">Categories <a class="btn btn-primary" href="/admin/guest/add">Add Guest</a></h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>Guest</th>
            <th>Created</th>
            <th>Updated</th>
            </thead>
            <tbody>
            @foreach($guests as $item)
                <tr>
                    <td>
                        <a href="/admin/guest/{{ $item->id }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ date("d F Y",strtotime($item->created_at)) }}</td>
                    <td>{{ date("d F Y",strtotime($item->updated_at)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection