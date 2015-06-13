<?php $url = Request::root(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wedding | Services</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/admin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/admin/dashboard.css" rel="stylesheet">

    <link href="/css/admin/select2.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!--datepicker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    {{--<script type="text/javascript">--}}
    {{--$(function() {--}}
    {{--$( "#datepicker" ).datepicker({--}}
    {{--changeMonth: true,--}}
    {{--changeYear: true--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}

</head>

<body>

<?php $section = Request::segment(2);?>
<?php $action  = Request::segment(3); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Wedding</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/dashboard">Dashboard</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">
        {{--<div class="col-sm-3 col-md-2 sidebar">--}}
            {{--<ul class="nav nav-sidebar">--}}
                {{--<li @if(isset($section) && $section == 'categories'   || $section == 'category')class='active'@endif><a href="/admin/categories">Categories</a></li>--}}
                {{--<li @if(isset($section) && $section == 'guests'       || $section == 'guest')class='active'@endif><a href="/admin/guests">Guests</a></li>--}}
                {{--<li @if(isset($section) && $section == 'services'     || $section == 'service')class='active'@endif><a href="/admin/services">Services</a></li>--}}
                {{--<li>&nbsp;</li>--}}
                {{--<li><a href="/auth/logout">Log Out</a></li>  auth later --}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<img src="/img/wedding2.jpeg">--}}
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <img src="/img/wedding2.jpeg">

            @yield('content')

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="/js/admin/bootstrap.min.js"></script>
<script src="/js/admin/partner.js"></script>
<script src="/js/plugins.js"></script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    $(function() {
        $('.select2').select2({
            placeholder: 'Start Typing',
            tags: true
        });
    });
    //@TODO - Implement ajax autocomplete
    //    $(".select2-ajax-keywords").select2({
    //        ajax: {
    //            url: "https://api.github.com/search/repositories",
    //            dataType: 'json',
    //            delay: 250,
    //            data: function (params) {
    //                return {
    //                    q: params.term, // search term
    //                    page: params.page
    //                };
    //            },
    //            processResults: function (data, page) {
    //                // parse the results into the format expected by Select2.
    //                // since we are using custom formatting functions we do not need to
    //                // alter the remote JSON data
    //                return {
    //                    results: data.items
    //                };
    //            },
    //            cache: true
    //        },
    //        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
    //        minimumInputLength: 1,
    //        templateResult: formatRepo, // omitted for brevity, see the source of this page
    //        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    //    });
</script>
<script type="text/javascript" src="/js/admin/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
//            plugins: [
//                "advlist autolink lists link image charmap preview anchor",
//                "searchreplace visualblocks code fullscreen",
//                "insertdatetime contextmenu paste"
//            ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link"
    });
</script>
</body>
</html>