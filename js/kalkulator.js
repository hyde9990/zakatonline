	function calc_total()
	{
		document.Kalkulator.zakat.value =
		parseFloat(document.Kalkulator.z1.value) +
		parseFloat(document.Kalkulator.z2.value) +
		parseFloat(document.Kalkulator.z3.value);
		document.Kalkulator.disp_zakat.value = document.Kalkulator.zakat.value;
	}

	function calc_nisab()
	{
		var emas = parseInt(document.Kalkulator.fz.value);
		var nisab = emas * 85;
		document.Kalkulator.nisab.value = nisab;
	}

	function calc_simpanan()
	{
		document.Kalkulator.ff.value = 
			parseInt(document.Kalkulator.fa.value) +
			parseInt(document.Kalkulator.fb.value) +
			parseInt(document.Kalkulator.fc.value) +
			parseInt(document.Kalkulator.fd.value) +
			parseInt(document.Kalkulator.fe.value);

		var zakatable =
			parseInt(document.Kalkulator.ff.value) -
			parseInt(document.Kalkulator.fg.value);

		calc_nisab();
		var nisab = document.Kalkulator.nisab.value;

		if (zakatable < nisab){
			zakatable = 0;
		}
		document.Kalkulator.fh.value = zakatable;
		var zakat = 0.025 * zakatable;
		document.Kalkulator.z1.value = zakat;
		calc_total();
	}

	function calc_profesi()
	{
		var pendapatan =
			(12 * parseInt(document.Kalkulator.fj.value)) +
			parseInt(document.Kalkulator.fk.value);
		var pengeluaran =
			(12 * parseInt(document.Kalkulator.fm.value)) +
			parseInt(document.Kalkulator.fn.value);
		var zakatable = pendapatan - pengeluaran;
	
		document.Kalkulator.fl.value = pendapatan;
		document.Kalkulator.fo.value = pengeluaran;

		calc_nisab();
		var nisab = document.Kalkulator.nisab.value;
		if (zakatable < nisab){
			zakatable = 0;
		}
		document.Kalkulator.fp.value = zakatable;
		var zakat = 0.025 * zakatable;
		document.Kalkulator.z2.value = zakat;
		calc_total();
	}

	function calc_usaha()
	{
		var zakatable =
			0.01 * parseFloat(document.Kalkulator.ft.value) *
			(parseInt(document.Kalkulator.fr.value) -
			parseInt(document.Kalkulator.fs.value));
		document.Kalkulator.fu.value = zakatable;
		calc_nisab();
		var nisab = document.Kalkulator.nisab.value;
		if (zakatable < nisab){
			zakatable = 0;
		}
		document.Kalkulator.fv.value = zakatable;
		var zakat = 0.025 * zakatable;
		document.Kalkulator.z3.value = zakat;
		calc_total();
	}// JavaScript Document