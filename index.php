<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Anthony Lim</title>
  <base href="/">
  <!-- Bootstrap -->
  <link href="<?php bloginfo('template_directory'); ?>/src/library/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>

<body ng-controller="AppController as app">
  <div class="container-fluid" ng-controller="PageController as page">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home">Anthony Lim</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation" ng-class="{ active : page.isSelected(1) }">
            <a ui-sref="home" ng-click="page.selectTab(1)">Home</a>
          </li>
          <li role="presentation" ng-class="{ active : page.isSelected(2) }">
            <a ui-sref="about" ng-click="page.selectTab(2)">About</a>
          </li>
          <li role="presentation" ng-class="{ active : page.isSelected(3) }">
            <a ui-sref="contact" ng-click="page.selectTab(3)">Contact</a>
          </li>
          <li role="presentation" ng-class="{ active : page.isSelected(4) }">
            <a ui-sref="experience" ng-click="page.selectTab(4)">Experience</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>

    <!-- Jumbotron -->
    <div ui-view class="fade"></div>

  </div>
  <!-- /container -->

  <script>
    var templateUrl = "<?php bloginfo('template_directory'); ?>";
  </script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/jquery/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/angular/angular.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/angular/angular-ui-router.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/angular/angular-animate.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/bootstrap/js/bootstrap.js"></script>
  <!-- Angular files -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/js/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/js/page.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/js/scripts.js"></script>
  <!-- Misc scripts -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/jquery.alton.js"></script>

  <script>

    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-60571989-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>

</html>
