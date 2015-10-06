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

    <page-header></page-header>

    <!-- Jumbotron -->
    <div ui-view="home"></div>
    <div ui-view="about"></div>
    <div ui-view="contact"></div>
    <div ui-view="experience"></div>

    <page-footer></page-footer>

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

  <!-- Animation scripts -->
  <!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/greensock/velocity.min.js"></script> -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/ScrollMagic.js"></script>
  <!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/greensock/TweenLite.min.js"></script> -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/animation.gsap.js"></script>
  <!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/animation.velocity.js"></script> -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/library/misc/debug.addIndicators.js"></script>

  <script>
    var isMobile = false; //initiate as false
    // device detection
    if (
      /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
      .test(navigator.userAgent) ||
      /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
      .test(navigator.userAgent.substr(0, 4))) isMobile = true;
    console.log("is mobile? " + isMobile);

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
