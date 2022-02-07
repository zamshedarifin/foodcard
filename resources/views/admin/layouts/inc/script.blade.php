<!-- plugins:js -->
<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('admin/js/dataTables.select.min.js')}}"></script>

<!-- End plugin js for this page -->
<script src="{{asset('admin/js/template.js')}}"></script>

@stack('script')

<!-- Custom js for this page-->
<script src="{{asset('admin/js/dashboard.js')}}"></script>
