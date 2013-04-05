<?php 
// Put the subdirectory in a variable for easy switching between servers

$root = 'catapultpgh'; // Local
//$root = ''; // Staging & Production

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

        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/animate-custom.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <?php
        function generate_id($uri) {
        /* regular expressions */
        $regex1 = '/[^a-zA-Z0-9]/'; //remove anything but letters and numbers
        $regex2 = '/[\-]+/'; //remove multiple "-"'s in a row
        $regex3 = '/^[-]+/'; //remove starting "-"
        $regex4 = '/[-]+$/'; //remove ending "-"
        /* return... */
        return preg_replace(
        array($regex1,$regex2,$regex3,$regex4),
        array('-','-','',''),
        $_SERVER['REQUEST_URI']
        );
        }

        /* do it! */
        $body_id = generate_id($_SERVER['REQUEST_URI']);

        //returns:  some-directory-deeper-my-page
        echo '<body id="',$body_id,'">';
    ?>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->