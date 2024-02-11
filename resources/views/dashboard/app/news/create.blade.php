@extends('dashboard.master')
@section('content')
<x-forms.templete-form
    action="{{ route('news.store') }}"
    content-id="firstName"
    content-name="content"
    title-id="secondName"
    title-name="title"
    button-text="Save"
/>
@endsection
