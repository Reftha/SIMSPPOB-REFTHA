<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <!-- riwayat transaksi -->
    <section>
      <div class="container">
        <div class="row justify-content-start">
          <div class="col pt-4">
            <b><p>Semua transaksi</p></b><br>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="list-group list-group-dark">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 text-success">Rp.</h5>
                <small class="text-body-secondary">keterangan</small>
              </div>
              <small class="text-body-secondary">10 november 2023</small>
            </a>            
            </div>
          </div>
        </div>            
      </div>        
    </section>
    <!-- riayat transaksi -->
<?= $this->endSection(); ?>
