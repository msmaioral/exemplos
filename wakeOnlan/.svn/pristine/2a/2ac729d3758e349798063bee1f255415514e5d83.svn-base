<?php
$computers = array
	(
		'01' => array(
			'ip' => '172.16.111.194',
			'hostname' => 'ESCOLINHA-273',
			'macAddress' => '00-1A-3F-AD-28-18'
		),
		
		'02' => array(
			'ip' => '172.16.111.171',
			'hostname' => 'ESCOLINHA-287',
			'macAddress' => '00-1A-3F-AD-2D-70',
		),
		
		'03' => array(
			'ip' => '172.16.110.255',
			'hostname' => 'escolinha-295.sudam.intra',
			'macAddress' => '00-1A-3F-AD-21-91',
		),
		
		'04' => array(
			'ip' => '172.16.111.77',
			'hostname' => 'ESCOLINHA-319',
			'macAddress' => '00-1A-3F-AD-21-F6',
		),
		
		'05' => array(
			'ip' => '172.16.111.18',
			'hostname' => 'ESCOLINHA-343',
			'macAddress' => '00-1A-3F-AD-2D-6F',
		),
		
		'06' => array(
			'ip' => '172.16.111.222',
			'hostname' => 'ESCOLINHA-357',
			'macAddress' => '00-1A-3F-AD-2B-DD',
		),
		
		'07' => array(
			'ip' => '172.16.111.237',
			'hostname' => 'ESCOLINHA-409',
			'macAddress' => '00-1A-3F-AD-2B-DA'
		),
		
		'08' => array(
			'ip' => '172.16.111.200',
			'hostname' => 'ESCOLINHA-467',
			'macAddress' => '00-1A-3F-AD-30-15'
		),
		
		'09' => array(
			'ip' => '172.16.111.241',
			'hostname' => 'ESCOLINHA-483',
			'macAddress' => '00-1A-3F-AD-26-62'
		),
		
		'10' => array(
			'ip' => '172.16.111.207',
			'hostname' => 'ESCOLINHA-624',
			'macAddress' => '00-1A-3F-AD-2E-C3'
		),
		
		'11' => array(
			'ip' => '172.16.110.216',
			'hostname' => 'escolinha-624.sudam.intra',
			'macAddress' => '1C-91-48-DB-B2-D2'
		),
		'12' => array(
			'ip' => '172.16.110.193',
			'hostname' => 'escolinha-627.sudam.intra',
			'macAddress' => '00-1A-3F-AD-25-08'
		),
		'13' => array(
			'ip' => '172.16.111.253',
			'hostname' => 'ESCOLINHA-663',
			'macAddress' => '00-1A-3F-AD-2B-8A'
		)
	);
	
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wake onLAN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="wakeonlan.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Wake ONLan</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Computadores Sala de Treinamento</h1>
          <p class="lead text-muted">Relação de computadores da sala de treinamento que estão ligados ou desligados.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Ligar Todos</a>
            <a href="#" class="btn btn-danger my-2">Desligar Todos</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
		  <?php
			foreach ($computers as $key => $value) {
		  ?>
		    <div class="col-md-4">
			<form action="post">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">
				  <strong>Hostname: </strong><?= $computers[$key]['hostname'] ?><br/>
				  <strong>Endereço IP:</strong> <?= $computers[$key]['ip'] ?><br/>
				  <strong>Endereço MAC: </strong><?= $computers[$key]['macAddress'] ?><br/>
				  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" class="btn btn-sm btn-outline-success" value="Ligar">
                      <input type="submit" class="btn btn-sm btn-outline-danger" value="Desligar">
                    </div>
                    <small class="text-muted">Status: <i>Ligado</i></small>
                  </div>
                </div>
              </div>
			</form>
            </div>
		  <?php
				
			}
		  ?>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>&copy; Bootstrap</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>
</html>
<?php

$hostname = $_REQUEST['hostname'];
$hostname = "cgti-madson";
shutdown($hostname);

function shutdown($hostName){
$cmd = 'shutdown /m \\\\'.$hostName.' -r -t 0';
echo $cmd;
//system($cmd);
}
?>