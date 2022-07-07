<?= $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row">
    	<div class="col col-md-10 offset-1">
        	<div class="card">
        		<div class="card-header">
        			<a href="#" type="button" class="btn btn-inverse-success btn-sm"><i class="ti-plus menu-icon"></i> Tambah</a>
        		</div>
        		<div class="card-body">
        		<table class="table table-striped table-responsive">
        	<thead>
        		<th>NO</th>
        		<th>NAMA</th>
        		<th>JENIS KELAMIN</th>
        		<th>EMAIL</th>
        		<th>NO HP</th>
        		<th>PASSWORD</th>
        		<th>LEVEL</th>
        		<th>AKSI</th>
        	</thead>
        	<tbody>
        		<tr>
        			<td>1</td>
        			<td>Haikal Wahyudi</td>
        			<td>Laki-LAki</td>
        			<td>udang@gmail.com</td>
        			<td>083124536726</td>
        			<td>udang1234</td>
        			<td>Admin</td>
        			<td>
        				<a href="#" type="button" class="btn btn-inverse-warning btn-rounded btn-sm" title="Ubah">
                        <i class="ti-pencil"></i>
                      </a>
                      <a href="#" type="button" class="btn btn-inverse-danger btn-rounded btn-sm" title="Hapus">
                        <i class="ti-trash"></i>
                      </a>
        			</td>
        		</tr>
        		<tr>
        			<td>1</td>
        			<td>Haikal Wahyudi</td>
        			<td>Laki-LAki</td>
        			<td>udang@gmail.com</td>
        			<td>083124536726</td>
        			<td>udang1234</td>
        			<td>Admin</td>
        			<td>
        				<a href="#" type="button" class="btn btn-inverse-warning btn-rounded btn-sm" title="Ubah">
                        <i class="ti-pencil"></i>
                      </a>
                      <a href="#" type="button" class="btn btn-inverse-danger btn-rounded btn-sm" title="Hapus">
                        <i class="ti-trash"></i>
                      </a>
        			</td>
        		</tr>
        	</tbody>
        </table>
        	</div>
        	</div>
        </div>
    </div>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>