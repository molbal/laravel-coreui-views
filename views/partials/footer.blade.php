    <!-- Custom Vars -->
    <script type="text/javascript">
        @yield('footer-js')
    </script>

    <!-- Scripts -->
    @section('footer-scripts')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('admin/js/app.js') }}"></script>
    @show
</body>
</html>
