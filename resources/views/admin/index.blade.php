@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center font-bold m-3 p-3">Statistic</h1>
<div class="row">
    <div class="col-md-3 alert alert-primary text-center">
        <h3 class="h1">Register Users</h3>
        <h2 class="p-2 m-3 d-block">{{ $users }}</h2>
    </div>
    <div class="col-md-3 alert alert-success text-center">
        <h3 class="h1">Categoreis</h3>
        <h2 class="p-2 m-3 d-block">{{ $categories }}</h2>
    </div>
    <div class="col-md-3 alert alert-danger text-center">
        <h3 class="h1">All Projects</h3>
        <h2 class="p-2 m-3 d-block">{{ $projects }}</h2>
    </div>
    <div class="col-md-3 alert alert-info text-center">
        <h3 class="h1">Tickets</h3>
        <h2 class="p-2 m-3 d-block">{{ $tickets }}</h2>
    </div>
</div>
</div>
@endsection