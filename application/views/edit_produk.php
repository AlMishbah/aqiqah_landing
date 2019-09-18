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
<div class="content-wrapper">
    <section class="content">
        <?php foreach ($produk as $pro): ?>
            <form action="<?= base_url() . 'produk/update'; ?>" method="post">
            <div class="form-gorup">
                    <label>Nama Produk</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $pro->id ?>">
                    <input type="text" name="nama_produk" class="form-control" value="<?= $pro->nama_produk ?>">
                </div>
                <div class="form-gorup">
                    <label>Harga Produk</label>
                    <input type="text" name="harga_produk" class="form-control" value="<?= $pro->harga_produk ?>">
                </div>
                <div class="form-gorup">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" value="<?= $pro->status ?>">
                </div>
                <a href="<?= base_url('produk'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
                
            </form>
        <?php endforeach; ?>
    </section>
</div>
  </head>
</html>