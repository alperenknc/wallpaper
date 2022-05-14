<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-center small">
            <div class="text-muted">Copyright &copy; Alperen Kanca {{ date("Y") }}</div>
            {{-- <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div> --}}
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset("assets/js/scripts.js") }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset("assets/demo/chart-area-demo.js") }}"></script>
        <script src="{{ asset("assets/demo/chart-bar-demo.js") }}"></script>
        <script src="{{ asset("assets/js/datatables-simple-demo.js") }}"></script>
        @toastr_js
        @toastr_render
