<script type="text/javascript">
	$(document).ready(function(){
		$('#provinsi').change(function(event){
	    	let prov = $('#provinsi').val();
	    	$.get("<?= base_url('Daerah/kabupaten/') ?>"+prov, function(data, status){
			    let kab = JSON.parse(data);
			    let html = '';
			    kab.kabupaten.forEach(function(item){
			    	html += `<option value="${item.id_kab}">${item.nama}</option>`;
			    })
			    $('#kota').html(html);
			  });
	    })
	})
	
</script>