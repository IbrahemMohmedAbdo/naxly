@extends('dashboard.master')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome to the dashboard, {{  auth()->user()->first_name . ' ' . auth()->user()->last_name}}</h1>

</div>
<!-- /.container-fluid -->
@endsection
