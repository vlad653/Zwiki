<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zwiki</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
  </head>
<?}
?>
 </body>
  </form>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#">Zwiki</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ресурсы ЗТ<b class="caret"></b></a>
          <ul class="dropdown-menu">
           <li role="presentation" class="dropdown-header">Ставрополь</li>
            <li><a href="/ERPCore.php">ERPCore</a></li>
            <li><a href="/GW.php">GW</a></li>
	    <li><a href="/UserSide.php">UserSide</a></li>
            <li><a href="/EWS.php">EWS</a></li>
            <li class="divider"></li>
	    <li role="presentation" class="dropdown-header">Невиномыск</li>
            <li><a href="UserSide.php">UserSide</a></li>
            <li><a href="/switch_status.php">switch_status</a></li>
            <li><a href="/user_status.php">user_status</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Мониторинг<b class="caret"></b></a>
          <ul class="dropdown-menu">
           <li role="presentation" class="dropdown-header">Ставрополь</li>
           <li><a href="/Zabbix.php">Zabbix</a></li>
           <li><a href="/Nagios.php">Nagios</a></li>
	   <li><a href=/IPTV.php>IPTV</a></li>
           <li class="divider"></li>
	   <li role="presentation" class="dropdown-header">Формула связи</li>
           <li><a href="/Nagios.php">Nagios</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">IP-TV <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li role="presentation" class="dropdown-header">Ставрополь</li>
            <li><a href="#">Облачный портал</a></li>
            <li><a href="/IpTv_Portal.php">IpTv_Portal</a></li>
            <li><a href="/Stalker.php">Stalker</a></li>
            <li class="divider"></li>
            <li role="presentation" class="dropdown-header">Невинка</li>
            <li><a href="/IpTv_Portal.php">IpTv_Portal</a></li>
            <li class="divider"></li>
            <li><a href="#">Zwiki IPTV</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Коммутаторы<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="divider"></li>
            <li><a href="#">4</a></li>
            <li class="divider"></li>
            <li><a href="#">5</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Контактная информация<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="divider"></li>
            <li><a href="#">4</a></li>
            <li class="divider"></li>
            <li><a href="#">5</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Найти</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 <script $(function(){
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $('.dropdown').on('hide.bs.dropdown', function(e){
        e.preventDefault();
	var self = this;
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
            $(self).removeClass('open');
            $(self).find('.dropdown-toggle').attr('aria-expanded','false');
        });
    });
});></script>
</body>
</html>







