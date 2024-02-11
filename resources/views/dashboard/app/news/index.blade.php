@extends('dashboard.master')
@section('content')

<x-buttons.split-button-info :route="route('news.create')" :title="'Create News'" />
<hr/>

<div class="card shadow mb-4" style="width: 100%;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>

    </div>
    @if(session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Content</th>
                        <th>Title</th>
                        <th>Start date</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($news as $new )
                    <tr>
                        <td>{{ $new->id }}</td>

                        <td>{{ $new->content }}</td>
                        <td>
                            {{ $new->title }}
                        </td>
                        <td>System Architect</td>
                        <td>{{ $new->created_at->diffForHumans()  }}</td>

                        <td>

                        </td>

                    </tr>

                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    // Auto-hide the success alert after 15 seconds
    $(document).ready(function(){
        setTimeout(function(){
            $('#success-alert').fadeOut('slow');
        }, 15000); // 15 seconds
    });
</script>
@endsection
