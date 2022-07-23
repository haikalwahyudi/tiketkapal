// function hitung()
// {
// 	let dewasa = document.getElementById('dewasa').value;
// 	let bayi = document.getElementById('bayi').value;
// 	let bayar = document.getElementById('bayar');
// 	let hasil1 = parseInt(dewasa) * 18000;
// 	let hasil2 = parseInt(bayi) * 5200;
	
// 	// let hasil = hasil1;
// 	if(!isNaN(hasil1) && !isNaN(hasil2)) {
// 	bayar.innerHTML = hasil1+hasil2;
// 	}else if (!isNaN(hasil1)){
// 	bayar.innerHTML = hasil1;
// 	}else if(!isNaN(hasil2)){
// 	bayar.innerHTML = hasil2;
// 	}else{
// 	bayar.innerHTML = '0';
// 	}
// }

function harga(kendaraan)
{
	let dewasa = document.getElementById('dewasa').value;
	let bayi = document.getElementById('bayi').value;
	let bayar = document.getElementById('bayar');
	let hasil1 = parseInt(dewasa) * 18000;
	let hasil2 = parseInt(bayi) * 5200;
	let gol = document.getElementById('gol').value;

	let data = "";
	let combo = "";
	let harga = 0;
		switch(kendaraan)
	{
		case "Golongan I" :
		{
			data = "Golongan I Khusus Untuk (Sepeda)";
			harga = 29310;
		}
		break;
		case "Golongan II" :
		{
			data = "Golongan II Untuk (Sepeda Motor <strong>< 500 cc</strong>)";
			harga = 67500;
		}
		break;
		case "Golongan III" :
		{
			data = "Golongan III Untuk (Sepeda Motor <strong>> 500 cc</strong>)";
			harga = 110750;
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
			harga = 1718703;
		}
		break;
		case "Golongan VIII" :
		{
			data = "Golongan VIII Panjang Kendaraan <strong>(Panjang 12 s/d 16 m)</strong>";
			harga = 1923740;
		}
		break;
		case "Golongan IX" :
		{
			data = "Golongan IX Panjang Kendaraan <strong>(Panjang Diatas 16 m)</strong>";
			harga = 1985670;
		}
		break;
		default : data = "";
	}
	document.getElementById('keterangan').innerHTML = data;
	document.getElementById('jenis').innerHTML = combo;

	// let hasil = hasil1;
	if(!isNaN(hasil1) && !isNaN(hasil2) || gol == "") {
		bayar.innerHTML = hasil1+hasil2+harga;
		}else if (!isNaN(hasil1)){
		bayar.innerHTML = hasil1;
		}else if(!isNaN(hasil2)){
		bayar.innerHTML = hasil2;
		}else{
		bayar.innerHTML = '0';
		}
}