<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<base href="/">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/bootstrap/css/bootstrap.min.css');?>">
	<style>
        .vertical {
            border-left: 6px solid black;
            height: 200px;
            position:absolute;
            left: 50%;
        }
    </style>
</head>
<body>
	<div class="container-flud">
		<?= $this->renderSection('content');?>
	</div>
</body>
</html>