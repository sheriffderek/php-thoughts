
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<!-- this varible just needs to be set in the index -->
	<title><?php echo $pageTitle ?></title>
	<meta name='description' content='[[insert description]]'>
	<meta property='og:image' content='images/default.png'>

	<link rel='stylesheet' href='<?php echo $_COOKIE['siteRoot'] ?>/css/site.css'> <!-- the slash (/) at the beginning makes this an absolute URL and allows using this same head file in sub directories like '/projects' -->
	<!--

		A couple quick points about the differences between URL paths and file system paths

		/ in a url is a reference to the HTTP server root created by the Apache server listening for HTTP requests at a port. It may happen to be the same directory that you want to reference with php includes but PHP must reference things as they exist on the disk.

		/ on the OS is a reference to the top of disk being used to store the files. Most likely you won't have access to this due to permissions set by the host. This is why dirname(__FILE__) or getcwd() must be used when trying to find the root of the website as it exists on the disk.

	-->
</head>
