<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Facturaci&oacute;n</title>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="content">
    <h1>Resumen Trimestral de Facturas</h1>
    <br />
    <br />
    <div class="paging"><?php echo $pagination; ?></div>
    <div class="data"><?php echo $table; ?></div>
    <br />
    <?php echo $link_back; ?>
  </div>
</body>
</html>