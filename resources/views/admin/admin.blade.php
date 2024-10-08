<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=" {{asset('adminPanel/images/favicon.ico')}}">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Smartfony - AdminPanel</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href=" {{asset('adminPanel/css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href=" {{asset('adminPanel/css/style.css')}}">
	<link rel="stylesheet" href=" {{asset('adminPanel/css/skin_color.css')}}">

  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
  <!-- header -->
    @include('admin.body.header')

  <!-- Left side column. contains the logo and sidebar -->
    @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('admin')
  </div>
  <!-- footer -->
     @include('admin.body.sidebar')
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
	<!-- Vendor JS -->

	<script src="{{asset('adminPanel/js/vendors.min.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
    <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('adminPanel/js/pages/data-table.js') }}"></script>

<!-- Sunny Admin App -->
	<script src="{{asset('adminPanel/js/template.js')}}"></script>
	<script src="{{asset('adminPanel/js/pages/dashboard.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
	<script type="text/javascript">
    $(function(){
      $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
            Swal.fire({
            title: 'Jesteś pewny?',
            text: "Czy na pewno chcesz usunąć wybrany element",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak, usuń',
            cancelButtonText: 'Anuluj',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link;
              Swal.fire(
                'Usunięto!',
                'Wpis został usunięty.',
                'success'
              )
            }
          })
      });

        $(document).on('change','#status_order',function(e){
            var id_order = $('#id_order').val();
            var status = $(this).val();
            Swal.fire({
                title: 'Status zamówienia',
                text: "Czy na pewno chcesz zmienić status tego zamówienia?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tak, Potwierdź!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '/orders/change_status',
                        dataType:'json',
                        data:{
                            status:status,
                            id_order:id_order
                        },
                        success:function(response){

                        }})
                    Swal.fire(
                        'Potwierdź!',
                        'Zmiany zostały zapisane',
                        'success'
                    )
                }
            })

        });
    });
</script>


</body>
</html>
