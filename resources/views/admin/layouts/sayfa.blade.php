<!DOCTYPE html>
<html lang="tr">
    @include("admin.parts.head")
    @section('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @show
<body>
    @include("admin.parts.header")
    <div id="layoutSidenav">
        @include("admin.parts.sidebar")
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    @yield('content')
                </div>
            </main>
            @include("admin.parts.footer")
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" ></script>
</body>
</html>