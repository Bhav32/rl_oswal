<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <?php $this->load->view('partials/head'); ?>
</head>
<!--Header-part-->
<body>
  <?php $this->load->view('partials/header'); ?>
  <?php $this->load->view('partials/sidebar'); ?>
  <?php $this->load->view('products/index'); ?>
  <?php $this->load->view('partials/footer'); ?>
  <?php $this->load->view('partials/footer_script'); ?>
</body>
</html>
