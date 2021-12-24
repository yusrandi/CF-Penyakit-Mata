@livewireScripts
<!-- bundle -->
<!-- Vendor js -->

<script src="dist/js/app.js"></script>

@yield('script')


<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<!-- END: JS Assets-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</script>
...
<x-livewire-alert::scripts />
