<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
<link rel="icon" href="{{ asset('pics/DinoPHP-icon.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
<meta name="description" content="DinoPHP is a web application framework for PHP with expressive, elegant syntax. We believe development must be an enjoyable experience to be truly">

<?php
function page_title($url) {

	$page = file_get_contents($url);

	if (!$page) return null;

	$matches = array();

	if (preg_match('/<title>(.*?)<\/title>/', $page, $matches)) {
		return $matches[1];
	} else {
		return null;
	}
}
?>
<meta property="og:title" content="<?php echo page_title("https://dinophp/" . $_SERVER['REQUEST_URI']); ?>">
<meta property="og:description" content="DinoPHP is a web application framework for PHP with expressive, elegant syntax. We believe development must be an enjoyable experience to be truly">
<meta property="og:image" content="https://dinophp.com/pics/DinoPHP-Red-01.jpg">
<meta property="og:url" content="https://dinophp.com/">
