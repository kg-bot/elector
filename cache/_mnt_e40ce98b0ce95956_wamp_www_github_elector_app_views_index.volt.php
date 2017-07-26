<?= $this->tag->getDoctype() ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= $this->tag->getTitle() ?>

        <?= $this->assets->outputCss() ?>
    </head>
    <body>
        <div class="navbar navbar-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= $this->url->get('/') ?>"><?= $this->config->application->app_name ?></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= $this->url->get('/') ?>">Home</a></li>
      </ul>
    </div>
  </div>
</div>
        
        
        <?php if ($this->session->has('auth') === false && $this->router->getRewriteUri() === $this->url->get('/')) { ?>
            <div class="jumbotron text-center home_jumbotron">
    <div class="container-fluid bg-info">
        <h1>Welcome</h1>
        <p>This is online voting application. You can register as ordinary voter or as a candidate, it's up to you.</p>
        <p>
            <?= $this->tag->linkTo([$this->config->application->urls->register, 'Register New Account', 'class' => 'btn btn-raised btn-primary btn-lg']) ?>
        </p>
        <p>
            <?= $this->tag->linkTo([$this->config->application->urls->login, 'Already have an account?']) ?>
        </p>
    </div>
</div>
        <?php } ?>
        <div class="container-fluid">
            <?= $this->getContent() ?>
            <div class="row footer text-center">
    <div class="col-xs-12">
        <div class="container">
            <span>&copy <?= date('Y') ?> - <?= $this->config->application->app_name ?></span>
        </div>
    </div>
</div>
        </div>
        <?= $this->assets->outputJs() ?>
        <script>$.material.init();</script>
    </body>
</html>
