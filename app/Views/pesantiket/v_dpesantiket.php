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
                          <input type="text" class="form-control" placeholder="Masukkan Nama">
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
                          <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="number" class="form-control" placeholder="Masukkan NIK Anda">
                        </div>
                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="number" class="form-control" placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" rows="5" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                      </section>

                      <h3>Jenis Kendaraan</h3>
                      <section>
                        <h3>A. Penumpang</h3>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label for="ex1">Dewasa</label>
                          <input type="number" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Bayi</label>
                          <input type="number" class="form-control">
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <h3>B. Kendaraan</h3>
                        <div class="form-group">
                          <label>Pilih Jenis Kendaraan</label>
                          <select name="kendaraan" class="form-control">
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
                        </div>
                          </div>
                          <div class="col-md-6">
                            <h3>Keterangan : </h3>
                            <ol>
                              <li>tes</li>
                              <li>tes</li>
                              <li>tes</li>
                              <li>tes</li>
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