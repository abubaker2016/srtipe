<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Product Listing</title>

        <!-- ONLY INCLUDE IF YOU NOT HAVE THOSE DEPENDENCIES -->
        <link rel="stylesheet" href="vendor/rafwell/simple-grid/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

        <!-- CSS LARAVEL SIMPLEGRID -->
        <link rel="stylesheet" href="vendor/rafwell/simple-grid/css/simplegrid.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body{margin: 0px}
            .grid-container .search .btn-search {
    position: absolute;
    top: 0;
    left: 269px;
    margin-right: 35px;
    width: 22px;
    height: 21px;
}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light"> 
            <div class="container-fluid text-center">
              <a class="navbar-brand" href="#">Product Listing Stripe Pay</a>
            </div>
          </nav>

          <div class="container">
           
            {!!$grid->make()!!}
          </div>
       

        <!-- ONLY INCLUDE IF YOU NOT HAVE THOSE DEPENDENCIES -->
        <script src="vendor/rafwell/simple-grid/moment/moment.js"></script>
        <script type="text/javascript" src="vendor/rafwell/simple-grid/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <!-- JS LARAVEL SIMPLEGRID -->
        <script src="vendor/rafwell/simple-grid/js/simplegrid.js"></script>
    </body>
</html>
