<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ТурТочка</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
     <link href="css/icheck.css" rel="stylesheet">
     <link href="css/fonts.css" rel="stylesheet">
     
     <link rel="stylesheet" href="css/ion.rangeSlider.css">
     <link rel="stylesheet" href="css/ion.rangeSlider.skinNice.css">
     <link rel="stylesheet" href="css/daterangepicker.css">
     <link rel="stylesheet" href="css/slick.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
  
     <!-- LESS -->
     <link rel="stylesheet/less" type="text/css" href="less/style.less?v=3" /> 
     <!-- LESS Compiler -->
     <script src="bower_components/less/dist/less.min.js" type="text/javascript"></script>
     <!-- CSS -->
     <!-- <link href="css/style.css" rel="stylesheet"> -->

  </head>
  <body>
    <div class="tours-table-overlay"></div>
    <div class="main-loader">
        <div class="animation-wrapper">
            <svg width="50px"  height="50px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;">
                <circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#fff" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(336 50 50)">
                    <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                </circle>
            </svg>
        </div>
    </div>
