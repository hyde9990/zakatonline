function ganti()
{
	if (window.document.forms['input'].kota.value=="Lain")
	{
		window.document.forms['input'].kotalain.disabled=false;
		window.document.forms['input'].kotalain.focus();
	}
	else
		window.document.forms['input'].kotalain.disabled=true;
}

function gantiprogram()
{
	if (window.document.forms['input'].program.value=="lain")
	{
		window.document.forms['input'].programlain.disabled=false;
		window.document.forms['input'].programlain.focus();
	}
	else
		window.document.forms['input'].programlain.disabled=true;
}

function doSave() {
	msg = '';
	if(document.getElementById('nama').value == '')
		msg += "\n+ Nama";
	if(document.getElementById('alamat').value == '')
		msg += "\n+ Alamat";
	if(document.getElementById('kota').value == '')
		msg += "\n+ Kota";
	if(document.getElementById('email').value == '')
		msg += "\n+ Email";
	if(document.getElementById('phone').value == '')
		msg += "\n+ Telepon";
	if(document.getElementById('jmlh').value == '')
		msg += "\n+ Jumlah Donasi";
	if(document.getElementById('rincian').value == '')
		msg += "\n+ Rincian Donasi";
	if(document.getElementById('bank').value == '')
		msg += "\n+ Nama Bank Tujuan";
	if(document.getElementById('pembayaranvia').value == '')
		msg += "\n+ Metode Bayar";
	if(document.getElementById('bankasal').value == '')
		msg += "\n+ Bank Asal";
        if(document.getElementById('tanggal').value == '')
		msg += "\n+ Tanggal";
        if(document.getElementById('bulan').value == '')
		msg += "\n+ Bulan";
        if(document.getElementById('tahun').value == '')
		msg += "\n+ Tahun";
	
	if(msg=='') {
		return true;
	}
	else {
		alert('Silahkan lengkapi kolom berikut : '+msg);
		return false;
	}
}

function valid()
{
	var nama=document.input.nama.value;
	var alamat=document.input.alamat.value;
	var kota=document.input.kota.value;
	var email=document.input.email.value;
	var phone=document.input.phone.value;
	var jmlh=document.input.jmlh.value;
	var rincian=document.input.rincian.value;
	var bank=document.input.bank.value;	
	var pembayaranvia=document.input.pembayaranvia.value;
	var bankasal=document.input.bankasal.value;
        var tanggal=document.input.tanggal.value;
        var bulan=document.input.bulan.value;
        var tahun=document.input.tahun.value;
	if (nama=="")
	{
		alert("Isi Nama Anda");
		document.input.nama.focus();
		return false;
	}
	else if (alamat=="")
	{
		alert("Isi Alamat Anda");
		document.input.alamat.focus();
		return false;
	}
	else if (kota=="")
	{
		alert("Isi Kota Anda");
		document.input.kota.focus();
		return false;
	}
	else if (email=="")
	{
		alert("Isi Email Anda");
		document.input.email.focus();
		return false;
	}
	else if (phone=="")
	{
		alert("Isi Nomor Telepon Anda");
		document.input.phone.focus();
		return false;
	}
	else if (jmlh=="")
	{
		alert("Isi Jumlah Donasi");
		document.input.jmlh.focus();
		return false;
	}
	else if (rincian=="")
	{
		alert("Isi Rincian Donasi Anda");
		document.input.rincian.focus();
		return false;
	}
	else if (bank=="")
	{
		alert("Pilih Nama Bank Tujuan Anda");
		document.input.bank.focus();
		return false;
	}
	else if (pembayaranvia=="")
	{
		alert("Pilih Metode Bayar");
		document.input.pembayaranvia.focus();
		return false;
	}
	else if (bankasal=="")
	{
		alert("Bank Asal Belum diisi");
		document.input.bankasal.focus();
		return false;
	}
        else if (tanggal=="")
	{
		alert("Tanggal Belum diisi");
		document.input.tanggal.focus();
		return false;
	}
        else if (bulan=="")
	{
		alert("Bulan Belum diisi");
		document.input.bulan.focus();
		return false;
	}
        else if (tahun=="")
	{
		alert("Tahun Belum diisi");
		document.input.tahun.focus();
		return false;
	}
	return true;
}