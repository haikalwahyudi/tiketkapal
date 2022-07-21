function harga(kendaraan)
{
	let data = "";
	let combo = "";
		switch(kendaraan)
	{
		case "Golongan I" :
		{
			data = "Golongan I Khusus Untuk (Sepeda)";
		}
		break;
		case "Golongan II" :
		{
			data = "Golongan II Untuk (Sepeda Motor <strong>< 500 cc</strong>)";
		}
		break;
		case "Golongan III" :
		{
			data = "Golongan III Untuk (Sepeda Motor <strong>> 500 cc</strong>)";
		}
		break;
		case "Golongan IV" :
		{
			data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 5 m)</li><li>Kendaraan Barang (Panjang s/d 5 m)</li></ol>";
			combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control'><option value='Golongan IVa'>Kendaraan Penumpang</option><option value='Golongan IVb'>Kendaraan Barang</option></select>";
		}
		break;
		case "Golongan V" :
		{
			data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 7 m)</li><li>Kendaraan Barang (Panjang s/d 7 m)</li></ol>";
			combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control'><option value='Golongan Va'>Kendaraan Penumpang</option><option value='Golongan Vb'>Kendaraan Barang</option></select>";
		}
		break;
		case "Golongan VI" :
		{
			data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 10 m)</li><li>Kendaraan Barang (Panjang s/d 10 m)</li></ol>";
			combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control'><option value='Golongan VIa'>Kendaraan Penumpang</option><option value='Golongan VIb'>Kendaraan Barang</option></select>";
		}
		break;
		case "Golongan VII" :
		{
			data = "Golongan VII Panjang Kendaraan <strong>(Panjang 10 s/d 12 m)</strong>";
		}
		break;
		case "Golongan VIII" :
		{
			data = "Golongan VIII Panjang Kendaraan <strong>(Panjang 12 s/d 16 m)</strong>";
		}
		break;
		case "Golongan IX" :
		{
			data = "Golongan IX Panjang Kendaraan <strong>(Panjang Diatas 16 m)</strong>";
		}
		break;
		default : data = "";
	}
	document.getElementById('keterangan').innerHTML = data;
	document.getElementById('jenis').innerHTML = combo;
}