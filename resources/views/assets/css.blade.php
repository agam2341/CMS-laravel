	<link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
	<!-- Site Title  -->
	<title>B erl Cosmetics</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.css?ver=142') }}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css?ver=142') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=142') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('/image360/imagerotator/html/css/retina.css') }}"/>
    <script type="text/javascript" src="{{ asset('/image360/imagerotator/html/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/image360/imagerotator/html/js/imagerotator.js') }}"></script>

    <style type="text/css">

    body
    {
        background: #fcfcfc;
        min-width: 320px;
        margin: 0;
    }

    .paddedwrap
    {
        padding: 15px;
    }

    .paddedwrap *,
    .paddedwrap *::before,
    .paddedwrap *::after
    {
        box-sizing: border-box;
    }

    .centercolumn
    {
        width: 100%;
        max-width: 958px;
        margin: 0px auto 0 auto;
        overflow: hidden;
    }

    .reloadexample
    {
        overflow: hidden;
    }

    .reloadexample .viewercol
    {
        background: #fff;
        padding: 0 0 0 20px;
        float: left;
    }

    .reloadexample .viewercol .borderadjust
    {
        box-sizing: content-box;
        padding: 6px;
        border: 1px solid #E5E9EB;
    }

    .reloadexample .viewercol .sizingwrap
    {
        height: 575px;
    }

    .reloadexample ul.thumbcol
    {
        list-style: none;
        float: left;
        display: block;
        overflow: hidden;
    }

    .reloadexample ul.thumbcol li
    {
        list-style: none;
        float: left;
        display: block;
    }

    .reloadexample ul.thumbcol li a
    {
        display: block;
        border: 1px solid #E5E9EB;
    }

    .reloadexample ul.thumbcol li a:hover
    {
        border: 1px solid #ccc;
    }

    .reloadexample ul.thumbcol li img
    {
        display: block;
        width: 100%;
    }

    @media (min-width: 200px){
    .reloadexample
    {
        margin: 0;
    }

    .reloadexample .viewercol
    {
        width: 100%;
        padding: 0;
        float: none;
    }

    .reloadexample ul.thumbcol
    {
        margin: 0 0 0 -20px;
        padding: 0;
        float: none;
    }

    .reloadexample ul.thumbcol li
    {
        padding: 20px 0px 0px 20px;
    }

    .reloadexample ul.thumbcol li
    {
        width: 33.33%;
    }}

    @media (min-width: 650px){
    .reloadexample
    {
        margin: 0 0 0 -20px;
    }

    .reloadexample .viewercol
    {
        width: 80%;
        padding: 0 0 0 20px;
        float: left;
    }

    .reloadexample ul.thumbcol
    {
        width: 20%;
        margin: 0;
        padding: 0 0 0 20px;
        float: left;
    }

    .reloadexample ul.thumbcol li
    {
        margin: 0 0 20px 0;
        padding: 0;
        width: auto;
    }
    
    .reloadexample ul.thumbcol li a,
    .reloadexample ul.thumbcol li img
    {
        display: block;
    }}

    </style>

    <script language="javascript" type="text/javascript">

        jQuery(document).ready(function(){

            var apiObj = null;

            // Initialize main viewer with view 3
            jQuery('#wr360PlayerId').rotator({
                licenseFileURL: 'license.lic',
                configFileURL: '{{ url('image360/360_assets/view2/view2.xml') }}',
                graphicsPath: 'imagerotator/html/img/retina',
                responsiveBaseWidth: 748,
                responsiveMinHeight: 350,
                apiReadyCallback: function(api){apiObj = api;}
            });

            // Hook up first thumbnail and load view 1 on click
            jQuery('#view1').click(function(e){
                e.preventDefault();
                if (apiObj != null){
                   apiObj.reload('{{ url('image360/360_assets/view1/view1.xml') }}');
                }
            });

            // Hook up second thumbnail and load view 2 on click
            jQuery('#view2').click(function(e){
                e.preventDefault();
                if (apiObj != null){
                   apiObj.reload('{{ url('image360/360_assets/view2/view2.xml') }}');
                }
            });

            // Hook up third thumbnail and load view 3 on click (revert to initial view)
            jQuery('#view3').click(function(e){
                e.preventDefault();
                if (apiObj != null){
                   apiObj.reload('{{ url('image360/360_assets/view2/view2.xml') }}');
                }
            });
        });

    </script>