<?php
$commands = array(
	'git reset --hard HEAD',
	'git pull origin master',
	'git status',
	'git submodule sync',
	'git submodule update',
	'git submodule status',
);
$output = '';
foreach ( $commands AS $command ) {
	$tmp = shell_exec( $command );
	$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
	$output .= htmlentities( trim( $tmp ) ) . "\n";
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
	<?php echo $output; ?>
</pre>
</body>
</html>