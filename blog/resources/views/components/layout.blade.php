<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Team Spirit</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon"/>
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/front/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="../css/front/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="../css/front/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../css/front/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../css/front/custom.css">
<!-- font-awesome -->
<link href="{{ asset('css/front/font-awesome.css')}}" rel="stylesheet">
<!-- font family -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="../css/front/3dslider.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="../js/front/js/3dslider.js"></script>
</head>
<body class="game_info" data-spy="scroll" data-target=".header">
@include('__header')

{{ $slot }}

@include('__footer')

<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<!-- ALL JS FILES -->
<script src="../js/front/js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="../js/front/js/custom.js"></script>
</body>
</html>
