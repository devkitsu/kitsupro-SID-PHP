<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Aplikasi Pendataan Warga">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Sistem Informasi Penduduk Kelurahan Kademangan</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome CSS -->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- DataTable CSS -->
    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/dashboard.css" rel="stylesheet">

    <!-- Custom styles for this sb-admin -->
    <link href="../../assets/sb-admin/css/sb-admin.min.css" rel="stylesheet">

    <!-- Date Range Picker style -->
    <link href="../../assets/css/daterangepicker.css" rel="stylesheet">

    <!-- Lightbox style -->
    <link href="../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap Select style-->
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">
    <script type="text/javascript" src="../../assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	selector: "textarea",
	theme: "modern",
	plugins: [
		 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		 "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
   style_formats: [
		{title: 'Bold text', inline: 'b'},
		{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		{title: 'Example 1', inline: 'span', classes: 'example1'},
		{title: 'Example 2', inline: 'span', classes: 'example2'},
		{title: 'Table styles'},
		{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	]
 });
</script>
  </head>

  <body>

    <?php include('../_partials/navbar.php') ?>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar col-sm-3 col-md-2 sidebar">

          <?php include('../_partials/sidebar.php') ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
