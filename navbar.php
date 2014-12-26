<html>
<head>
<link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" href="dist/js/bootstrap.min.js"></script>
<script type="text/javascript" href="dist/js/jq.js"></script>
</head>
<body>
  <nav class=" nav navbar animated navbar-fixed-top" role="navigation" style="border-bottom: 1px solid #C8FE2E; background-color:#fff; ">
    <div class="container-fluid ">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand " href="file:///D:/jacknez%20zone/wen%20animated/home.html">Petisi</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li class="dropdown ">
          <a href="#" id="menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Katagori <span class="caret"></span></a>
          <ul class=" row dropdown-menu" role="menu" style="width:500px;">
            <li class="col-md-6">
              <h4 class="text-center ">T-Shirt</h4>
              <p class="divider"></p>
              <a href="#">Cowok</a>
              <a href="#">Cewek</a>
              <a href="#">Couple</a>
              <a href="#">Anak</a>
            </li>
             <li class="col-md-6">
              <h4 class="text-center ">T-Shirt</h4>
              <p class="divider"></p>
              <a href="#">Cowok</a>
              <a href="#">Cewek</a>
              <a href="#">Couple</a>
              <a href="#">Anak</a>

            </li>
            <li class="divider col-md-12"></li>
            <li></li>
          </ul> 
        </li>
      </ul>
      <form class="navbar-form navbar-left " style="width:69%;" role="search">
        <div class="form-group " style="width:90%;">
          <input type="text" class="form-control" style="width:100%" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" style="width70px;">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-left">
        <li><a class="navbar-link" href="#">Bantuan</a></li>
        <li><button type="button" data-toggle="modal" data-target="#formdaftar" class="navbar-btn btn btn-sm btn-default margin-left-5">Daftar</button></li>
        <li><button type="button" data-toggle="modal" data-target="#formmasuk" class="navbar-btn btn btn-sm btn-success margin-left-5">Masuk</button></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!--tampilan form masuk-->
<div id="formmasuk" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Portal Masuk</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <a href="">Lupa Password</a>
            </div>
            <button type="submit" class="btn btn-success">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  
<!-- tampilan form daftar-->
<div id="formdaftar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-body " style="position:relative;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Portal Daftar</h4>
        </div>
        <div class="modal-body row " style="">
          <div class="col-md-6">
          <form role="form">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="" placeholder="Nama anda">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
             <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password Ulang">
            </div>
            <div class=" modal-footer">
            <button type="submit" class="btn btn-success col-md-offset-5 col-md-2">Daftar</button>
          </div>
          </form>
        </div>
        <div class="col-md-6">
          <img src="img/bmap.png" style="width:100%;">
          <p>Daftarkan diri anda dan apa yaaa...</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>