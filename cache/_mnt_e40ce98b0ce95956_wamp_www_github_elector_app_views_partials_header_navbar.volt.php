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