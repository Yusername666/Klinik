function hapus(d) {
	Swal.fire({
		title: 'Apa Anda Yakin?',
		text: "Data Yang Sudah Dihapus Tidak Bisa Dikembalikan Lagi!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Batal'
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				type: "POST",
				url: "http://localhost/Klinik/Pasien/delete/" + d,
				datatype: "JSON",
				success: function (d) {
					Swal.fire({
						title: 'Berhasil!',
						text: 'Data Berhasil Dihapus!',
						icon: 'success',
						type: 'success',
						allowOutsideClick: false,
					}).then(function () {
						location.reload()
					});
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert(url);
					Swal.fire({
						title: 'Whoops!',
						text: 'Data Gagal Dihapus!',
						type: 'error'
					})
				}
			});
		}
	})
}


$('input.form-control-nik').maxlength({
	alwaysShow: true,
	validate: true,
	allowOverMax: true,
	customMaxAttribute: "16"
});
$('input.form-control-norm').maxlength({
	alwaysShow: true,
	validate: true,
	allowOverMax: true,
	customMaxAttribute: "6"
});

$('#norm').on('keyup', function () {
	let d = $(this).val();
	$.ajax({
		url: "http://localhost/Klinik/Pasien/cekNorm/" + d,
		type: "GET",
		dataType: "JSON",
		success: function (a) {
			if (a.status == true) {
				Swal.fire({
					icon: 'error',
					title: 'Gagal',
					text: 'No. Rekam Medik Sudah Ada!'
				})
				$('#norm').val('');
			}
		},
	});
});