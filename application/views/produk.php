<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mulya Aqiqah</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" >
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.css')?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css')?>">
    <style>
    .phone-float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:120px;
      left:40px;
      background-color:#6571F7;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
      padding-top:14px
    }
    .wa-float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      left:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
      padding-top:14px
    }
    .map-responsive{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-responsive iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
    img.img-layanan{
      border-radius:20px;
      box-shadow:0px 5px 5px 3px #04040452;
      transition:0.7s;
    }
    img.img-layanan:hover{
      transition:0.7s;
      transform:translateY(-10px);
      box-shadow:0px 7px 15px 3px #04040452;
    }
    .link-ext{
      border-radius: 10px;
      background: #4CAF50 !important;
      font-weight: bold !important;
      color: #fff !important;
      transition:0.5s background;
    }
    .link-ext:hover{
      background: #48874A !important;
      transition:0.5s background;
    }
    .navbar-expand-md .navbar-nav .link-ext:before{
      background-color:transparent !important
    }
    </style>

  </head>
  <body>
    
    <header id="header-wrap">
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('') ?>">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                  Layanan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                  Harga
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                  Testimoni
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-ext px-2 py-1 text-white" href="<?= base_url('gallery') ?>">
                  Gallery
                </a>
                <li class="nav-item">
                <a class="nav-link link-ext px-2 py-1 text-white" href="<?= base_url('layanan') ?>">
                  Layanan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-ext px-2 py-1 text-white" href="<?= base_url('produk') ?>">
                  Produk
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      <div class="container-fluid">
          <div class="row mt-5">
                  <div class="col-md-6">
                  <div class="card-header text-center">Produk</div>
                  <div class="card-body">
                      <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>status</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($produk as $pro): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pro->nama_produk ?></td>
                                <td><?= $pro->harga_produk ?></td>
                                <td><?= $pro->status ?></td>
                                <td onclick="javascript: return confirm('anda yakin hapus')"><?= anchor('produk/hapus/'.$pro->id, '<div class="btn btn-danger">hapus</div>') ?>
                                <td><?= anchor('produk/edit/' . $pro->id, '<div class="btn btn-primary">Edit</div>') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                      </div>
                  </div>
              </div>
          </div>
      
      <div class="col-md-4">
          <div class="card">
              <div class="card-header text-center bg-success">
                  Tambah
              </div>
              <div class="card-body">
                  <form method="post" action="<?= base_url() . 'Produk/tambah'; ?>">
                  <div class="form-group">
                      <label>Nama Proudk</label>
                      <input type="text" name="nama_produk" placeholder="masukkan nama" required class="form-control">
                      <label>Harga Produk</label>
                      <input type="text" name="harga_produk" placeholder="masukkan harga" required class="form-control">
                      <label>status</label>
                      <input type="text" name="status" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-success btn-block">Simpan</button>
                  </form>
              </div>
          </div>
      </div>