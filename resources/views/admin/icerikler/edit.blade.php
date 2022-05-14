@extends('admin.layouts.sayfa')
@section('head')
@endsection
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategiriler</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.panel') }}">Panel</a></li>
        <li class="breadcrumb-item active">kategori</li>
    </ol>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="btn btn-sm btn-success"><strong></strong></i> Kategori Bulundu
        </div>
        <div class="card-body">
        asdasd
        </div>
    </div>
</div>
@endsection