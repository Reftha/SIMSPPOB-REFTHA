<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Menu -->
    <section id="menu">
      <div class="container text-center mb-4">
        <div class="row justify-content-center">
          <div class="col">
            <form action="/menu/pbb">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/PBB.png" alt="PBB" class="rounded">
              <figcaption class="figure-caption">PBB</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/listrik">
            <figure class="figure" formaction="Listrik.php">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Listrik.png" alt="listrik" class="rounded">
              <figcaption class="figure-caption">Listrik</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/pulsa">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Pulsa.png" alt="Pulsa" class="rounded">
              <figcaption class="figure-caption">Pulsa</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/pdam">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/PDAM.png" alt="PDAM" class="rounded">
              <figcaption class="figure-caption">PDAM</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/pgn">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/PGN.png" alt="PGN" class="rounded">
              <figcaption class="figure-caption">PGN</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/tv">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Televisi.png" alt="Tellevisi" class="rounded">
              <figcaption class="figure-caption">TV Langganan</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/musik">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Musik.png" alt="Musik" class="rounded">
              <figcaption class="figure-caption">Musik</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/vg">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Game.png" alt="VoucherGame" class="rounded">
              <figcaption class="figure-caption">Voucher Game</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/vm">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Voucher Makanan.png" alt="VoucherMakanan" class="rounded">
              <figcaption class="figure-caption">Voucher Makanan</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/kurban">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Kurban.png" alt="Kurban" class="rounded">
              <figcaption class="figure-caption">Kurban</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/zakat">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Zakat.png" alt="Zakat" class="rounded">
              <figcaption class="figure-caption">Zakat</figcaption>
            </figure>
            </form>            
          </div>
          <div class="col">
            <form action="/menu/paket">
            <figure class="figure">
              <button type="submit" style="border: none;" class="btn btn-white">
              <img src="Assets/Paket Data.png" alt="Paket" class="rounded">
              <figcaption class="figure-caption">Paket Data</figcaption>
            </figure>
            </form>            
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Menu -->
    <!-- Banner -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col pt-5">
            <p><b>Temukan Promo Menarik</b></p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="wrapper">
              <img src="Assets/Banner 1.png" class="item rounded float-start" alt="Banner 1"/>
              <img src="Assets/Banner 2.png" class="item rounded float-start" alt="Banner 2"/>
              <img src="Assets/Banner 3.png" class="item rounded float-start" alt="Banner 3"/>
              <img src="Assets/Banner 4.png" class="item rounded float-start" alt="Banner 4"/>
              <img src="Assets/Banner 5.png" class="item rounded float-start" alt="Banner 5"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Benner -->
<?= $this->endSection(); ?>