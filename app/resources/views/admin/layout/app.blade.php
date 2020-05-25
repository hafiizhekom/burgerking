<html>

    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="<?=asset("vendor/bootstrap/css/bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?=asset("asset/css/admin/admin.css");?>">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
        <script src="<?=asset("vendor/jquery/jquery-3.5.1.min.js");?>"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
          </nav>

        <div class="container-fluid pt-4">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item bg-default"><a href="dashboard">Dashboard</a></li>
                        <li class="list-group-item"><a href="product">Product</a></li>
                        <li class="list-group-item"><a href="category">Category</a></li>
                        <li class="list-group-item"><a href="article">Article</a></li>
                        <li class="list-group-item"><a href="store">Store</a></li>
                        <li class="list-group-item"><a href="order">Order</a></li>
                      </ul>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-6">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <script src="<?=asset("vendor/popper/popper.js");?>"></script>
        <script src="<?=asset("vendor/bootstrap/js/bootstrap.min.js");?>"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
        @yield('script')
    </body>
</html>
