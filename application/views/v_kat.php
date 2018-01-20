<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kategori</title>
	</head>
	<body align="center">
		<h1>Kategori</h1>
		
		<p>Kategori :</p>
		<select name="kategori" class="form-control" id="kategori">
			<option>- Select Kategori -</option>
			<?php foreach($kategori as $kat){
				echo '<option value="'.$kat->id.'">'.$kat->nama.'</option>';
			} ?>
		</select>
		
		<p>Jasa :</p>
		<select name="jasa" class="form-control" id="jasa">
			<option value=''>Select Jasa</option>
		</select>	
		<script src="<?php echo base_url('assets/coloshop/js/jquery-3.2.1.min.js'); ?>"></script>
		<script>
	        $(document).ready(function(){
	            $("#kategori").change(function (){
	                var url = "<?php echo site_url('kat/add_ajax_jasa');?>/"+$(this).val();
	                $('#jasa').load(url);
	                return false;
	            })
	        });
	    </script>
	</body>
</html>