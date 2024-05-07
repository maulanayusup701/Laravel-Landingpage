<script src="{{ asset('Back-end/assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('Back-end/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('Back-end/assets/compiled/js/app.js') }}"></script>
<!-- Need: Apexcharts -->
<script src="{{ asset('Back-end/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Back-end/assets/static/js/pages/dashboard.js') }}"></script>
@vite('resources/js/app.js')
<script>
    document.getElementById("year-copyright").innerHTML = new Date().getFullYear();
</script>

</body>

</html>
