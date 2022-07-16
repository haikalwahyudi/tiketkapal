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
                      <h3>Account</h3>
                      <section>
                        <h3>Account</h3>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label>Confirm Password</label>
                          <input type="password" class="form-control" placeholder="Confirm password">
                        </div>
                      </section>
                      <h3>Profile</h3>
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
                      <h3>Comments</h3>
                      <section>
                        <h3>Comments</h3>
                        <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <h3>Finish</h3>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
<?= $this->endSection(); ?>