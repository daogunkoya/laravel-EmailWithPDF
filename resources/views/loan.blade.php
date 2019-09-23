@extends('layout')
@section('content')

<h1>{{App\User::whereId($id)->first()->name}}</h1>
<h1>Payment History</h1>
<!-- <a href="{{ URL::to('/customer/pdf') }}">Email in  PDF</a> -->
<p>
<div class="form-control">
    <form class="form-horizontal" method="POST" action="{{route('loans.store')}}" >
                            {{ csrf_field() }}
        <input type="email" name="email" placeholder="Email me in pdf">
        <input type="submit" value="Send Email"/>
        <input type="hidden" name="id" value="{{$id?? ''}}"/>
    </form>
</div>
</p>
<table class="table table-stripped table-bordered">
  <thead>
    <tr class="row">
      <th>ID</th>
      <th>Borrowed</th>
      <th>Amount Paid</th>
      <th>interest</th>
      <th>total</th>
      <th>paid</th>
    </tr>
  </thead>
  <tbody>
    @foreach($loans as $key=>$loan)
      <tr class="row">
        <td>{{ $key + 1 }}</td>
        <td>{{ $loan->borrowed }}</td>
        <td>{{ $loan->Amount_paid }}</td>
        <td>{{ $loan->interest }}</td>
        <td>{{ $loan->total }}</td>
        <td>{{ $loan->created_at }}</td>
       
      </tr>
    @endforeach
  </tbody>
</table>
@endsection