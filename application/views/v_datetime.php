<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datetime/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" media="screen">
</head>

<body>
<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Test</legend>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="" data-date-format="dd mm yyyy" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking 2</label>
                <div class="input-group date form_datetime2 col-md-5" data-date="" data-date-format="dd mm yyyy - hh:ii" data-link-field="dtp_input2">
                    <input class="form-control" size="16" type="text" value="" readonly>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
        </fieldset>
    </form>
</div>

<script src="<?php echo base_url('assets/coloshop/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datetime/js/bootstrap-datetimepicker.js'); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datetime/js/locales/bootstrap-datetimepicker.id.js'); ?>" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'id',
        weekStart: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 4,
        minView: 2,
        forceParse: 0
    });
    $('.form_datetime2').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0
    });
</script>

</body>
</html>
