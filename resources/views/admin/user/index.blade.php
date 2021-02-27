@extends('admin.layouts.index')

@section('content')
    <h1>Users</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
  
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Permissions</th>
                <th>Ban</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        {{$item->user_roles}}
                    </td>
                    <td>
                        @foreach ($item->user_permissions as $perm)
                            <p>{{$perm}}</p>
                        @endforeach
                        
                    </td>
                    <td>{{$item->ban ? 'Yes' : 'No'}}</td>
                    <td>
                        <a href="/admin/user/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        {!! Form::open(['url' => '/admin/user/'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline']) !!}
                            <button class="btn btn-danger">DELETE</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@section('js')
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        });
    </script>
@endsection