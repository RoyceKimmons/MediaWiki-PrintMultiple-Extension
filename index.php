<?php
require_once('config.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function getPages() {
		$('.page_to_load').each(function(index) {
			var n = $(this).attr('page');
			var k = $(this).attr('key');
			var u = n;
			$('#PrintMultiple_' + k).append('loading...');
			$('#PrintMultiple_' + k).load('<?php print $base_url; ?>/index.php #content', { title : u, printable : 'yes'}, function(response, status, xhr) {
				$('#siteSub').remove();
				$('#jump-to-nav').remove();
				//#jump-to-nav
				//#siteSub
				$('.printfooter').remove();
				$('#contentSub').remove();
				$('.toc').remove();
				$('.thumbcaption > .magnify').remove();
			});	
		});
	}
</script>
</head>
<body onload="getPages()">
<?php

foreach ($pages as $key=>$page) {
	print '<div class="page_to_load" key="'.$key.'" page="'.$page.'" id="PrintMultiple_'.$key.'"><h1>' . $page . '</h1></div>';
}
?>
</body>
</html>