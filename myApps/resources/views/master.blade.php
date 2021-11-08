<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Praktek</title>
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>@yield('header')</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
  
        <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                    <div class="card">
                      @yield('content')
                  </div>
              <div>
          </div>
        </section>
      </div>
</body>
</html>