
@extends('admin.layouts.sayfa')
@section('head')
@endsection
@section('content')
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container-fluid px-4">
    <h1 class="mt-4">Kategiri Ekle</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.panel') }}">Panel</a></li>
        <li class="breadcrumb-item active">kategori Ekle</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="btn btn-sm btn-success"><strong>{{ $kategoris->count() }}</strong></i> Kategori Bulundu
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" enctype="multipart/form-data"  method="post" style="display: flex; flex-direction: column; justify-content: space-around; align-items: flex-start; flex-wrap: wrap; }">
                @csrf
                <div class="form-group kutuinput">
                    <label>Resim Başlık</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group kutuinput">
                    <label>Kategori Rengi seç</label>
                    <input type="text" id="renk" name="kategoriRenk" class="form-control" required>
                    <input type="color" id="selectcolor" name="color" class="form-control" title="renk seçin" style="padding: 0;width: 100px;float: right;">
                </div>
                <div class="form-group kutuinput">
                    <label>Resim</label>
                    <input type="file" name="resim" class="form-control" title="dosya türü olarak sadece resim yukleyın" required>
                </div>
                <div class="form-group col-md-12" style="display: flex;justify-content: center;">
                    <button type="submit" class="btn btn-primary btn-block">
                        Kaydet
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    let selectcolor = document.querySelector('#selectcolor');
    let renk =document.querySelector('#renk');
    selectcolor.addEventListener('input',()=>
    {
        let color = selectcolor.value;
        renk.value=color;
    })
</script>
{{-- <script>$(document).ready(function() {$('#editor').summernote(
{
    placeholder: 'Yazı gırın',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
}
);});
</script> --}}
@endsection


