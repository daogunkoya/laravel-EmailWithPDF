@extends('layout')
@section('content')
<h1>Members Accounts</h1>
<!-- <a href="{{ URL::to('/customer/pdf') }}">Export PDF</a> -->
<table class="table table-stripped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Member Since</th>
    </tr>
  </thead>
  <tbody>
    @foreach(\App\User::all() as $customer)
      <tr class="row">
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->created_at }}</td>
        <td><a href="{{route('loans.show',$customer->id)}}">Reports & Email</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection