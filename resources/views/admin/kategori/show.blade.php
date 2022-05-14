@extends('admin.layouts.sayfa')
@section('head')
@endsection
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Kategoriler</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.panel') }}">Panel</a></li>
        <li class="breadcrumb-item active">kategori</li>
    </ol>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="btn btn-sm btn-success"><strong>{{ $kategoriler->count() }}</strong></i> Kategori Bulundu
        </div>
        <div class="card-body">
            <table id="datatablesSimple" id="al">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Resim</th>
                        <th>Kategori Renk</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoriler as $kategori)
                    <tr>
                        <td>{{ $kategori->name }}</td>
                        <td>{{ $kategori->slug }}</td>
                        <td><img src="{{ $kategori->resim }}" width="200" alt="resim"></td>
                        <td>{{ $kategori->kategoriRenk }}</td>
                        <td>{!! $kategori->durum==0 ? "<span class='text-danger'> Pasif </span>" : "<span class='text-success'> Aktif </span>" !!}</td>
                        <td >
                            <div class="row">
                                <a href="" title="Düzenleme" class="panelislemb">
                                    <div>
                                        <i class="bi bi-pencil-square"></i>
                                    </div>    
                                </a>
                                <a href="" title="Ekleme" class="panelislemb">
                                    <div>
                                        <i class="bi bi-folder-plus"></i>
                                    </div>    
                                </a>
                                <a href="" title="Silme" class="panelislemb">
                                    <div>
                                        <i class="bi bi-trash"></i>
                                    </div>    
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    // $(document).ready(function() {
    //     $('#datatablesSimple').DataTable( {
    //         "language": {
    //             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
    //         }
    //     } );
    // } );
    </script>
@endsection
