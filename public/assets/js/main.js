<script>
	    $(document).ready(function() {
			
			$("#simpan").click(function (e) {			
				var konten = $('#edit').html();	
					
				$.ajax({
					url: 'http://localhost/landinberl/public/proses/titleedit',
					type: 'GET',
					data: {
	                konten: konten
					},				
					success:function (data) {
								
						if (data == '1')
						{
							$("#status")
							.addClass("sukses")
							.html("Data berhasil disimpan")
							.fadeIn('fast')
							.delay(3000)
							.fadeOut('slow');	
						}
						else
						{
							$("#status")
							.addClass("error")
							.html("Data tidak berhasil disimpan")
							.fadeIn('fast')
							.delay(3000)
							.fadeOut('slow');	
						}
					}
				});   
				
			});
			
			$("#edit").click(function (e) {
				$("#simpan").show();//Menampilkan tombol simpan ketika div #edit diklik
				e.stopPropagation();
			});
		
			$(document).click(function() {
				$("#simpan").hide();//Menyembunyikan tombol simpan ketika div #edit tidak diklik (dipilih)
			});
		});

	</script>