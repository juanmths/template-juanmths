<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">

	<!-- Font Awesome -->
	<link href="fontawesome-free-5.14.0-web/css/all.min.css" rel="stylesheet">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

	<title>Juan Matheus</title>

</head>
<body class="bg-light">
	<!-- Header -->
	<!-- Navbar -->
	<header>
		<nav class="navbar navbar-expand-lg  navbar-light bg-white shadow-sm fixed-top">
			<div class="container">
				<div class="animasi-logo" >
					<a class="navbar-brand logo" href="index.php">Juanmths.dev</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">HTML</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">CSS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">BOOTSTRAP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">JAVASCRIPT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">PHP</a>
						</li>
						<li class="nav-item">
							<button type="button" class="btn btn-outline-info ml-3 shadow" data-toggle="modal" data-target="#exampleModal" style="border-radius: 15px;"><i class="fas fa-search"></i></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="modal fade modal-search" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header pb-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-11 mx-auto col-xs-12">
							<form id="searchform" action="#" class="" method="get">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
									</div>
									<input autocomplete="off" type="text" class="form-control py-2" placeholder="Cari tutorial .." value="" name="s" id="s">
								</div>
							</form>

							<small class="text-muted">Ketik yang ingin kamu cari.</small>
						</div>
					</div>          
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar -->
	<!-- End Header -->

	<!-- Breadcrumb -->
	<div class="container" style="margin-top: 70px;">
		<nav aria-label="breadcrumb nav-breadcrumb">
			<ol class="breadcrumb bg-light">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Bootstrap</a></li>
				<li class="breadcrumb-item active" aria-current="page">#1 - Belajar Design Web Menggunakan Bootstrap 4</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumb -->

	<!-- Content -->

	<div class="container mt-3">
		<div class="row">

			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<div class="gambar zoom-effect">
							<img loading="lazy" src="img/7.jpg" class="img-post" alt="Belajar Design template" height="100%" width="100%" style="border-radius: 5px;">
							<div class="card-header" style="border-radius: 5px;">
							<img loading="lazy" src="img/7.jpg" class="img-post" alt="Juan Matheus" height="30px" width="30px " style="border-radius: 100px;"> Posted by : <a href="">Juan Matheus</a> | <i class="fas fa-clock"></i> 05/09/20
					</div>
						</div>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt <kbd>mollit</kbd> anim <kbd>id est</kbd> laborum.</p>
						<pre>
.kotak img {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
  width: 100%;
}

.zoom-effect:hover .kotak img {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
}
/*End Gambar Zoom*/

/*Card*/
.card-ku:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card a{
  text-decoration: none;
}
/*End Card*/


</pre>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">First</th>
										<th scope="col">Last</th>
										<th scope="col">Handle</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				
				<div class="list-group mb-3">
					<div class="card-header">
						Popular Post
					</div>
					<a href="#" class="list-group-item list-group-item-action active">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small>3 days ago</small>
						</div>
						<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						<small>Donec id elit non mi porta.</small>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						<small class="text-muted">Donec id elit non mi porta.</small>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
						<small class="text-muted">Donec id elit non mi porta.</small>
					</a>
				</div>

				<figure class="figure">
					<img src="img/ads.gif" loading="lazy" class="figure-img img-fluid rounded" alt="Beli Template">
				</figure>

				<ul class="list-group">
					<div class="card-header">
						Label
					</div>
					<a href="" class="list-group-item-action card-ku"><li class="list-group-item d-flex justify-content-between align-items-center">
						<i class="fas fa-folder-open"></i>Cras justo odio
						<span class="badge badge-primary badge-pill">14</span>
					</li></a>
					<a href="" class="list-group-item-action card-ku"><li class="list-group-item d-flex justify-content-between align-items-center">
						<i class="fas fa-folder-open"></i>Dapibus ac facilisis in
						<span class="badge badge-primary badge-pill">2</span>
					</li></a>
					<a href="" class="list-group-item-action card-ku"><li class="list-group-item d-flex justify-content-between align-items-center">
						<i class="fas fa-folder-open"></i>Morbi leo risus
						<span class="badge badge-primary badge-pill">1</span>
					</li></a>
				</ul>

			</div>

		</div>
	</div>

	<!-- End Content -->

	<!-- TUTORIAL MENARIK LAINNYA -->

	<div class="container">
		<div class="mb-3 mt-3">
			<h5>TUTORIAL MENARIK LAINNYA</h5>
		</div>
		<div class="row">

			<div class="col-md-3 mb-4">
				<div class="card card-ku">
					<a href="postingan.php" class="card-img-top">
						<img src="img/1.jpg" loading="lazy" class="card-img-top " alt="gambar">
					</a>
					<div class="card-body">
						<h6 class="card-title info-text"><a href="postingan.php" class="text-primary">Bootstrap 4</a></h6>
						<h6 class="card-title info-text"><a href="postingan.php" class="text-primary">#1 - Belajar Design Web Menggunakan Bootstrap 4</a></h6>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-2">
				<div class="card card-ku">
					<a href="#" class="card-img-top">
						<img src="img/2.jpg" loading="lazy" class="card-img-top " alt="gambar">
					</a>
					<div class="card-body">
						<h6 class="card-title info-text"><a href="#" class="text-primary">Bootstrap 4</a></h6>
						<h6 class="card-title info-text"><a href="#" class="text-primary">#2 - Belajar Design Web Menggunakan Bootstrap 4</a></h6>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-2">
				<div class="card card-ku">
					<a href="#" class="card-img-top">
						<img src="img/3.jpg" loading="lazy" class="card-img-top " alt="gambar">
					</a>
					<div class="card-body">
						<h6 class="card-title info-text"><a href="#" class="text-primary">Bootstrap 4</a></h6>
						<h6 class="card-title info-text"><a href="#" class="text-primary">#3 - Belajar Design Web Menggunakan Bootstrap 4</a></h6>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-2">
				<div class="card card-ku">
					<a href="#" class="card-img-top">
						<img src="img/3.jpg" loading="lazy" class="card-img-top " alt="gambar">
					</a>
					<div class="card-body">
						<h6 class="card-title info-text"><a href="#" class="text-primary">Bootstrap 4</a></h6>
						<h6 class="card-title info-text"><a href="#" class="text-primary">#3 - Belajar Design Web Menggunakan Bootstrap 4</a></h6>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- END TUTORIAL MENARIK LAINNYA -->

	<!-- Comments -->
	<div class="container">
		<div id="disqus_thread"></div>
		<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://juanmths.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>
<!-- End Comments -->

<!-- Jumbotron 2 -->

<div class="jumbotron jumbotron-fluid mt-4 bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img loading="lazy" src="img/gambar-box.jpg" class="img-thumbnail" alt="Gambar">
			</div>
			<div class="col-md-9">
				<h1>Template</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a class="btn btn-primary" href="#" role="button">Learn more</a>
			</div>
		</div>

	</div>
</div>

<!-- Jumbotron 2 -->

<!-- Footer -->
<footer>
	<div class="container">
		<div class="text-dark text-center pt-2 pb-5">
			Copyright 2020 - Juan Matheus Template Design
		</div>  
	</div>
</footer>

<!-- End Footer -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/typed.js"></script>
<script src="js/tooltips.js"></script>
<script src="js/highlight.min.js"></script>
<script src="js/highlightBlock.js"></script>


</body>
</html> 