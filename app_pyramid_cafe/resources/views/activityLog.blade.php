@extends('layouts.main')

@section('container')


<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($activityLogs as $data)
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->user->username }}</td>
        <td>{{ $data->action }}</td>
        <td>{{ date('Y-m-d : H:i:s', strtotime($data->created_at)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection