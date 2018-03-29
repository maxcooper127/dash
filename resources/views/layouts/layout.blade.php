<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="/assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <link type="text/css" href="/assets/css/app.css" rel="stylesheet">
</head>
<body>
@include('components.header')
<div class="mai-wrapper">

    <div class="main-content container">
       @yield('content')
    </div>
</div>
<script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="/assets/js/app.js" type="text/javascript"></script>
<script src="/assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="/assets/lib/countup/countUp.min.js" type="text/javascript"></script>

<script src="/assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
<script src="/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>

<script src="/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
        App.dashboard();
    });
</script>

@if(route('worker.show', $worker))
    <script src="/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

    <script src="/assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            //initialize the javascript
            App.init();
            App.chartsSparklines();
            App.ChartJs();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            App.livePreview();
        });

    </script>
@endif

</body>
</html>