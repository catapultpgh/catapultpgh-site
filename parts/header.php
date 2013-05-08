<?php 

 // Loop through image directory and print markup for each
function printAll($dir) {
    $fdir = 'img/' . $dir . '/*';
    foreach(glob($fdir) as $img_path) {  
        printPresenter($img_path);
    }
}

// Print each presenter
function printPresenter($path) {
    $content = '<img class="presenter" src="' . $path . '" alt="Show-n-Tell Presenter" />';
    echo $content;
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CatapultPGH Co-working</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Merriweather:900|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css?v1.0">

        <link rel="stylesheet" href="css/animate-custom.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body id="<?php echo $page_id; ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <header class="header clearfix wrap">
            <img class="logo" src="img/text-logo.png" alt="CatapultPGH logo" />
            <?php include('parts/nav.php'); ?>
        </header>

        <div class="main wrap clearfix animated fadeIn">