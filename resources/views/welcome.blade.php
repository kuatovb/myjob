<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />  
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

        
        {{-- <script src="{{ asset('js/stylus.js') }}"></script> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>


    </head>
    <body>
        <div id="app"></div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/parallax.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                // Handle click on paging links
                $('.tm-paging-link').click(function(e){
                    e.preventDefault();
                    
                    var page = $(this).text().toLowerCase();
                    $('.tm-gallery-page').addClass('hidden');
                    $('#tm-gallery-page-' + page).removeClass('hidden');
                    $('.tm-paging-link').removeClass('active');
                    $(this).addClass("active");
                });
            });
        </script>
    </body>
</html>
