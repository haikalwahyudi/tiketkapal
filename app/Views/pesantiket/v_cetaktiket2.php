<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/css/vertical-layout-light/style.css">
    <title>Cetak Tiket</title>
</head>

<body style="background-color:#EAF6F6 ;">
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Tiket Kapal</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <table>
                                <tr>
                                    <th>No Pemesanan</th>
                                    <td>: <?= $data->id_pemesanan; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>: <?= $data->nm_pemesan; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: <?= $data->alamat; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pembelian Tiket</th>
                                    <td>: <?= $data->tgl_pemesanan; ?></td>
                                </tr>
                                <tr>
                                    <th>Status Pembayara</th>
                                    <td>: Lunas</td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td>: Rp.<?= $data->total_pembayaran; ?></td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-md-4">
                            <div style="background-image: url('<?= base_url(); ?>/img/tiket.png'); background-repeat: no-repeat; background-size: 230px;">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">"Semoga perjalanan anda menyenangkan"</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        print()
        onafterprint = back;

        function back() {
            // history.back();
            location = "<?= base_url('/Pesantiket/berhasil'); ?>";
        }
    </script>
</body>

</html>