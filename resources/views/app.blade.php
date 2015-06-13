<?php $currenturl = Request::url(); ?>
<?php $url = Request::root(); ?>
<?php $section = Request::segment(1); ?>
<?php $title  = isset($title)  ?  $title  : Request::segment(3);?>
<?php $bodyid = isset($bodyid) ?  $bodyid : Request::segment(3);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />

    <link rel="dns-prefetch" href="http://www.google-analytics.com">

    <title>@if($title)Gerry And Michelle's Wedding 8th August 2015 | {{ $title }}@else Gerry And Michelle's Wedding 8th August 2015 @endif</title>

    <link rel="stylesheet" href="{{$url}}/css/main.css" type="text/css">
    <link rel="stylesheet" href="{{$url}}/css/mobile.css" type="text/css">

    <script src="{{$url}}/js/vendor/modernizr-2.6.2.min.js"></script>

    <meta property="og:title" content="@if($title)Gerry And Michelle's Wedding 8th August 2015 | {{ $title }}@else Gerry And Michelle's Wedding 8th August 2015 @endif">
    <meta property="og:site_name" content="Gerry And Michelle's Wedding 8th August 2015">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$currenturl}}">
    <meta property="og:image" content="{{$url}}/img/i/icon.png">
    <meta property="og:description" content="">

    <link rel="shortcut icon" href="{{$url}}/img/i/icon.png">
    <link rel="apple-touch-icon-precomposed" href="{{$url}}/img/i/icon.png">
</head>

<body id="@if($bodyid){{$bodyid}}@endif">

<section class="feature-search">
    <div class="search-content clearfix">
        <div class="logo-wrap clearfix">
            <div class="open-net-logo l">
                <a href="/"><img src="/img/wedding.jpg" alt="Wedding" /></a>
                <h1>@if($title)Gerry And Michelle's Wedding 8th August 2015 | {{ $title }}@else Gerry And Michelle's Wedding 8th August 2015 @endif</h1>
            </div>

            {{--<div class="sub-search clearfix">--}}
                {{--<a href="http://oi.ulster.ac.uk/open_ulster/consultancy.html" target="_blank" class="contact_info r">Contact Us</a>--}}

                {{--@if($section == 'search')--}}
                    {{--<form action="/search" method="get" id="searchableForm" name="searchableForm" class="clearfix" >--}}
                        {{--<input type="text" value="{{ $q or "" }}" name="q" value="" size="50" id="tags" autocomplete="off" class="feature-search-input med r" placeholder="Search..." />--}}
                        {{--<button type="submit" class="feature-search-input-submit"/><i class="fa fa-search"></i></button>--}}
                    {{--</form>--}}
                {{--@endif--}}
            {{--</div>--}}

        </div>
    </div>
</section>

@yield('content')

<footer>
    <ul class="contact clearfix">
        {{--<li><a href="http://www.ulster.ac.uk/"><img style="width:120px;" src="/img/uu-logo2.png" alt="ulster university" /></a></li>--}}
        {{--<li class="sub-sub">Copyright © Ulster University. All rights reserved.</li>--}}
        <li>
            {{--<a href="http://www.ulster.ac.uk/privacy/">Cookies &amp; privacy</a> |--}}
            {{--<a href="http://www.ulster.ac.uk/copyright.html">Copyright statement</a> |--}}
            {{--<a href="http://www.ulster.ac.uk/secretary/policyimplementation/foi.html">Freedom of information</a> |--}}
            <a href="/admin">Admin</a>
        </li>
    </ul>
</footer>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $url; ?>/js/vendor/jquery.autocomplete.js" type="text/javascript"></script>
<script src="<?php echo $url; ?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php echo $url; ?>/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
