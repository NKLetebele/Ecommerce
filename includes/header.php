<?php
include('sessions.php');

?>
<!DOCTYPE html>
<html data-wf-page="6444e1de321aed55bb31f27e" data-wf-site="6444e1de321aed947531f251">
<head>
  <meta charset="utf-8">
  <title>Eshop | charitable organization</title>
  <meta content="Eshop | charitable organization" name="description">
  <meta content="Eshop | charitable organization" property="og:title">
  <meta content="Eshop | charitable organization" property="og:description">
  <meta content="Eshop | charitable organization" property="twitter:title">
  <meta content="Eshop | charitable organization" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/femblacksite.webflow.css" rel="stylesheet" type="text/css">
  <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="61899de6-0105-be8f-534c-03b52114d8e9"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="61899de6-0105-be8f-534c-03b52114d8ea"] {width:10em;height:634.5em;}}</style>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Unna:regular,italic,700,700italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/external-africa-south-africa-icongeek26-glyph-icongeek26.png" rel="shortcut icon" type="image/x-icon">
 <link href="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/external-africa-south-africa-icongeek26-glyph-icongeek26.png" rel="apple-touch-icon">
 <style>
        <?php
        // CSS to hide dropdown content if user is not logged in
        if (isset($_SESSION['user'])) {
            echo ' .dropdown:hover .dropdown-content{ display: block; }';
        } else {
            echo ' .dropdown:hover .dropdown-content{ display: none; }';
            
        }
        ?>
    </style>