<?= $this->extend('layout/pengguna/p_template'); ?>
<?= $this->section('isi'); ?>
<!-- partial -->
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pemesanan Tiket Kapal</h4>
        <!-- <form id="example-form" action="#"> -->
        <div>
          <h3>Data Diri</h3>
          <section>
            <h3>Masukkan Data Diri Anda</h3>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
              <label class="col-sm-6 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="membershipRadios1" value="Laki-Laki" checked>
                    Laki-Laki
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="membershipRadios2" value="Perempuan">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="number" class="form-control" placeholder="Masukkan NIK Anda" required>
            </div>
            <div class="form-group">
              <label>No Hp</label>
              <input type="number" class="form-control" placeholder="Masukkan Nomor Handphone" required>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="5" placeholder="Masukkan Alamat Anda" required></textarea>
            </div>
          </section>

          <h3>Jenis Kendaraan</h3>
          <section>
            <h3>A. Penumpang</h3>
            <div class="form-group">
              <div class="col-xs-4">
                <label for="ex1">Dewasa</label>
                <input type="number" class="form-control" id="dewasa" onkeyup="harga();" min="0" required>
              </div>
            </div>
            <div class="form-group">
              <label>Bayi</label>
              <input type="number" class="form-control" id="bayi" onkeyup="harga();" min="0" required>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h3>B. Kendaraan</h3>
                <div class="form-group">
                  <label>Pilih Jenis Kendaraan</label>
                  <select name="kendaraan" class="form-control" id="gol" onchange="harga(this.value)" required>
                    <option>-Pilih Jenis Kendaraan-</option>
                    <option value="Golongan I">Golongan I</option>
                    <option value="Golongan II">Golongan II</option>
                    <option value="Golongan III">Golongan III</option>
                    <option value="Golongan IV">Golongan IV</option>
                    <option value="Golongan V">Golongan V</option>
                    <option value="Golongan VI">Golongan VI</option>
                    <option value="Golongan VII">Golongan VII</option>
                    <option value="Golongan VIII">Golongan VIII</option>
                    <option value="Golongan IX">Golongan IX</option>
                  </select>
                  <small id="keterangan" class="form-text text-muted"></small>
                </div>
                <div class="form-group" id="jenis">
                  <small id="keterangan2" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <input type="text" name="biaya" id="biaya">
                </div>
                <h3>Total Bayar : <span id="bayar"></span></h3>
              </div>
              <div class="col-md-6">
                <h3>Keterangan : </h3>
                <ol type="A">
                  <strong>
                    <li>Penumpang</li>
                  </strong>
                  <ol>
                    <li>Dewasa (Usia > 2 Tahun <strong>Rp18.000</strong>/orang)</li>
                    <li>Bayi (Usia 0 - 2 Tahun <strong>Rp5.200</strong>/orang)</li>
                  </ol>
                  <strong>
                    <li>Kendaraan</li>
                  </strong>
                  <ol>
                    <li>Golongan I (Sepeda <strong>Rp29.310</strong>/unit)</li>
                    <li>Golongan II (Sepeda Motor < 500 cc <strong>Rp67.500</strong>/unit)</li>
                    <li>Golongan III (Sepeda Motor >500 cc <strong>Rp110.750</strong>/unit)</li>
                    <li>Golongan IV
                      <ol type="a">
                        <li>Kendaraan Penumpang (Panjang s/d 5 m <strong>Rp500.755</strong>/unit)</li>
                        <li>Kendaraan Barang (Panjang s/d 5 m <strong>Rp468.741</strong>/unit)</li>
                      </ol>
                    </li>
                    <li>Golongan V (Sepeda <strong>Rp29.310</strong>/unit)</li>
                    <li>Golongan VI (Sepeda <strong>Rp29.310</strong>/unit)</li>
                    <li>Golongan VII (Sepeda <strong>Rp29.310</strong>/unit)</li>
                    <li>Golongan VIII (Sepeda <strong>Rp29.310</strong>/unit)</li>
                    <li>Golongan IX (Sepeda <strong>Rp29.310</strong>/unit)</li>
                  </ol>
                </ol>
              </div>
            </div>
          </section>

          <h3>Pembayaran</h3>
          <section>
            <h3>Pilih Metode Pembayaran</h3>
            <!-- <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div> -->
            <div class="form-group">
              <label class="col-sm-6 col-form-label">Bank</label>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios1" value="BRI" checked>
                    BRI
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="BNI">
                    BNI
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="NTB">
                    NTB
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="MANDIRI">
                    MANDIRI
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="BCA">
                    BCA
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 col-form-label">E-Wallet</label>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios1" value="OVO">
                    OVO
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="DANA">
                    DANA
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-check form-check-secondary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pembayaran" id="membershipRadios2" value="LINK AJA">
                    LINK AJA
                  </label>
                </div>
              </div>
            </div>
          </section>

          <!-- <h3>Finish</h3>
                      <section>
                        <h3>Finish</h3>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section> -->

        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<?= $this->endSection(); ?>