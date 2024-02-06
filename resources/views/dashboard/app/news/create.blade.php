@extends('dashboard.master')
@section('content')
<div class="input-group mb-3">
    <label for="title" class="input-group-text">Title</label>
    <select class="form-select" id="title" name="title">
        <option value="dr">Dr</option>
        <option value="mr">Mr</option>
        <option value="mrs">Mrs</option>
        <option value="master">Master</option>
        <option value="miss">Miss</option>
    </select>
</div>

<div class="input-group mb-3">
    <label for="firstName" class="input-group-text">Content</label>
    <input type="text" class="form-control" id="firstName" placeholder="content" name="content">
</div>

<div class="input-group mb-3">
    <label for="secondName" class="input-group-text">Title</label>
    <input type="text" class="form-control" id="secondName" placeholder="title" name="title">
</div>




@endsection
