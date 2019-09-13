<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Lock Screen</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

  <link id="sleek-css" rel="stylesheet" href="<?= base_url('assets/css/sleek.css') ?>" />
</head>

</head>
  <body class="" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
              </div>
            </div>
            <div class="card-body p-5">

              <h4 class="text-dark mb-5">Lock Screen</h4>
              <?= form_open('open_lock') ?>
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" name="pin_code " placeholder="PIN KODE">
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">MASUK</button>
                  </div>
                </div>
              <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>