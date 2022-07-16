<?= $this->extend('layout/pengguna/p_template'); ?>
<?= $this->section('isi'); ?>
        <!-- partial -->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pemesanan Tiket Kapal</h4>
                  <form id="example-form" action="#">
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
                        <h3>Profile</h3>
                        <div class="form-group">
                          <label>First name</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                          <label>Last name</label>
                          <input type="password" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                          <label>Profession</label>
                          <input type="password" class="form-control" placeholder="Profession">
                        </div>
                      </section>

                      <h3>Pembayaran</h3>
                      <section>
                        <h3>Pilih Metode Pembayaran</h3>
                        <!-- <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div> -->
                  <div class="mt-4">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-2">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              Bank
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3 mt-4">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <p class="text-success">
                              <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                            </p>
                          </div>
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