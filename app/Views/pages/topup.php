<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
      <div class="row justify-content-start">
        <div class="col pt-4 mb-4">
          <p>Silahkan masukan<br>
          <b class="fs-2">Nominal Top Up</b></p>
        </div>
      </div>
    <form action="transaction">
      <div class="row">
        <div class="col-md-6">
          <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-cash"></i></span>
            <input type="number" class="form-control" placeholder="masukan nominal top up" aria-label="nominal top up" aria-describedby="addon-wrapping" required>
          </div>
          <div class="d-grid gap-2">
            <button class="btn text-white" type="submit" style="background-color: #F13B2F;">Top Up</button>
          </div>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp10.000</button>
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp20.000</button>
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp50.000</button>
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp100.000</button>
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp250.000</button>
          <button type="submit" class="btn opsitopup btn-outline-dark mb-3" style="width: 115px;">Rp500.000</button>                                         
        </div>                
      </div>
    </form>
    </div>    
</section>
  <?= $this->endSection(); ?>