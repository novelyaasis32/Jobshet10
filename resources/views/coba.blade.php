<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome!</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Novel Bumi Dan Manusia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">Sinopsis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          <small>Singkat Tentang</small>
        </h1>

        <!-- Blog Post -->
        
        <div class="card mb-4">
          <img class="card-img-top" src="https://cdn.idntimes.com/content-images/post/20180530/ba96ad93f90d004f8eb1d2cdccf128f5.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Ulasan</h2>

            <p class="card-text">Bumi Manusia merupakan karya fenomenal.<br>Di mana kita tidak hanya menemukan kisah cinta, tapi juga tentang semangat juang seorang Minke<br> sejarah seorang pejuang bangsa, bahkan bagaimana sulitnya untuk keluar dari kungkungan feodalisme. Patutlah, novel ini jikalau mendapatkan banyak perhargaan <br>dan juga diterjemahkan ke dalam 33 bahasa asing.Bumi Manusia bercerita tentang Minke (Iqbaal Ramadhan) seorang pribumi yang bersekolah di HBS<br> Sewaktu itu hanya keturunan eropa saja yang diperkanankan untuk bersekolah disitu <br>selain anak seorang bangsawan ia juga pribumi yang pandai dan hobi menulis karya<br></p>
            @foreach($type as $a)<a href="/article/{{$a->id}}" class="btn btn-primary">Read More &rarr;</a>@endforeach 
          </div>
          <div class="card-footer text-muted">
            Posted on October 1, 2020 by Novelya Asis Sholikha<br>
            <a href="https://sumut.idntimes.com/life/education/arifin-alamudi/5-rekomendasi-novel-fiksi-best-seller-yang-sayang-jika-dilewatkan">Klik untuk rekomendasi lain</a>
          </div>
        </div>
        
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                  <li>
                    <a href="{{route('about')}}">About</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widgets!</h5>
          <div class="card-body">
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
      <p class="footer" align=center></p>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Novelya 2020</p>
    </div></div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>