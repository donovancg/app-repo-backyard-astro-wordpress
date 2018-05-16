<?php add_filter( 'show_admin_bar', '__return_false' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/img/system/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/img/system/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/img/system/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_bloginfo('template_directory'); ?>/img/system/favicons/site.webmanifest">
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/system/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="img/system/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
	<?php wp_head();?>
</head>
<body>
    <header class="header">
        <h1 class="heading--primary"><?php echo get_bloginfo( 'name' ); ?></h1>