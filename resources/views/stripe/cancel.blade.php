
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Product Listing</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light"> 
            <div class="container-fluid text-center">
              <a class="navbar-brand" href="#">Product Listing Stripe Pay</a>
            </div>
          </nav>

          <div class="container"> 
                <div class="alert alert-danger" role="alert">
                    Payment has been Canceled.
                </div>
          </div>
       

    </body>
</html>
