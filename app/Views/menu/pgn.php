<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col pt-4 mb-4">
                    <p>Pembayaran<br>
                    <img src="/Assets/PGN.png" alt="listrik" style="max-width: 22px;" class="img-fluid "><b class="fs-5 m-3">PGN</b>
                    </p>
                </div>
            </div>
        <form action="/pages/transaction">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-cash"></i></span>
                        <input type="number" class="form-control" aria-label="nominal top up" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn text-white" style="background-color: #F13B2F;" type="submit">Bayar</button>
                    </div>
                </div>              
            </div>
        </form>
        </div>        
    </section>
<?= $this->endSection(); ?>