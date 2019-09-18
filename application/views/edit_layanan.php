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
        <?php foreach ($layanan as $lay): ?>
            <form action="<?= base_url() . 'layanan/update'; ?>" method="post">
            <div class="form-gorup">
                    <label>Judul Layanan</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $lay->id ?>">
                    <input type="text" name="judul_layanan" class="form-control" value="<?= $lay->judul_layanan ?>">
                </div>
                <div class="form-gorup">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?= $lay->deskripsi ?>">
                </div>
                <a href="<?= base_url('layanan'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
                
            </form>
        <?php endforeach; ?>
    </section>
</div>
  </head>
</html>