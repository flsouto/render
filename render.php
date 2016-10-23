<?php

/**
 * @param string $title page title 
 * @param mixed $content page content
*/
function render($title, $content){

	if(is_callable($content)){
		ob_start();
		$return = call_user_func($content);
		$content = ob_get_clean() ?: $return;
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php echo $content; ?> 
	</body>
</html>
<?php
}