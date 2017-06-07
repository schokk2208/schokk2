<?
  file_put_contents("gol777.txt", date("d.m.Y H:i:s")." ".$_SERVER['REMOTE_ADDR'].PHP_EOL, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/" />
    
    <title></title>
    
    <link href="http://rampshop72lq6kp6.onion/file/06ebae21721c07651a2ed0d4d9caf664.css?1_06ebae21721c07651a2ed0d4d9caf664" rel="stylesheet">
  </head>
  <body class="pace-done" id="1b9abf779f621cfec247541e07dd7eda">

    <div class="nloader"><div class="nloader-img"></div></div> 
    
    <div role="navigation" class="navbar navbar-tshop megamenu">
      <div class="navbar-top">
        <div class="container">
          <div class="row">
            
            
            
            
            
            <div class="col-lg-12 no-margin no-padding">
              <div class="pull-right">
                <ul class="userMenu">
                  
                </ul>
              </div>
            </div>
            <div class="col-lg-12 no-margin no-padding">
              <div class="pull-right">
                <ul class="userMenu">
                  
                    
                    <li><a href="http://rampshop72lq6kp6.onion/sig_up">Зарегистрироваться</a></li>
                    
                    <li><a href="/">Войти</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="navbar-header">
          <ul class="nav navbar-nav top-menu">
            <li>
            <a href="/" class="navbar-brand "> 
              
                
              
            </a>
            </li>
            
            <li><a href="/">Главная</a></li>
            <li><a href="/check_host">Проверить магазин</a></li>
            
            
              
                <li><a class="menu-item" href="http://rampshop72lq6kp6.onion/wiki/i/btc">Где купить BTC</a></li>
              
            
            
          </ul>
          <ul class="nav navbar-nav pull-right">
          </ul>
        </div> 
      </div> 
    </div>
     

  <div class="container main-container"> 
    
    
      <div class="row">
        <div class="col-md-12"> 
            <div class="main-page-banner">
              <a href="http://ramp2bombkadwvgz.onion/" target="_blank"><img src="http://rampshop72lq6kp6.onion/data/1415635657614523155.jpg"></a>
            </div>
        </div>
      </div>
    

    
  

  
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      
      
      <?
        if(@$_POST['url'] != "")
        {
          if(strstr($_POST['url'], "rampbxcezp6r73gu.onion"))
          {
            echo '<div class="alert alert-success"><strong>'.$_POST['url'].'</strong> является частью нашего проекта. Можете смело делать на нем покупки.</div>';            
          }
          else
          {
            echo '<div class="alert alert-danger"><strong>Фишинг!</strong> '.$_POST['url'].' не принадлежит к нашему проекту. Никогда не авторизуйтесь и не вводите свои данные на этом сайте!</div>';
          }
        }
      ?>
      <form class="form-signin" role="form" method="post" action="">
        <h2 class="form-signin-heading">Проверка на фишинг</h2>
        <input name="sended" type="hidden" value="1">
        <label>Адрес сайта</label>
        <input name="url" type="text" class="form-control" placeholder="URL" required autofocus value="<?=@$_POST['url']?>">
        <span id="helpBlock" class="help-block">Введите адрес сайта, и мы проверим его на принадлежность к нашему проекту.</span>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Проверить</button>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>

  
  </div>
  
  
<div class="gap"> </div>
<footer>
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left">
        
        
          <span class="label label-success">P</span>
          <span class="label label-success">B453729</span>
          <span class="label label-success">0.694%</span>
          <span class="label label-success">2.336%</span>
          <span class="label label-success">D</span>
          <span class="label label-success">S</span>
        
      </p>
      <p class="pull-right">
        
      </p>
    </div>
  </div>
</footer>
