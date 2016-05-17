<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Web Design Challenges</title>

  <link rel="stylesheet" href="/css/app.min.css">
  <script src="/js/app.min.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42718641-5', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
  <div class="container">
    <header>
      <div class="logo">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
      </div>

      <ul class="page-links">
        <li class="link">Challenges</li>
        <li class="link">Resources</li>
        <li class="link">Leaderboards</li>
      </ul>

      <ul class="user-actions">
        <li class="action"><i class="fa fa-plus" aria-hidden="true"></i></li>
        <li class="action"><i class="fa fa-bolt" aria-hidden="true"></i></li>
        <li class="user">
          <div class="photo"><img src="/images/users/default.png"></div>
          <div class="toggle"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
          <div class="user-menu">
            <ul class="menu-items">
              <li class="item"><i class="fa fa-user" aria-hidden="true"></i> profile</li>
              <li class="item"><i class="fa fa-cog" aria-hidden="true"></i> settings</li>
              <li class="item"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</li>
            </ul>
          </div>
        </li>
      </ul>
    </header>

    @yield('content')

    <footer></footer>
  </div>
</body>
</html>
