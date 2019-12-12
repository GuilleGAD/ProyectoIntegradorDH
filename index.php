<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php require_once("phpCompartido/head.php");?>
    <link rel="stylesheet" href="css/styleSlide.css">
    <script src="js/slide.js"></script>
  <body>
    <!-- HEADER -->
    <?php require_once("phpCompartido/header.php");?>

    <!-- SLIDE -->
    <div class="container main-container">

	<div id="carousel-example-generic" class="carousel slide" data-interval="7000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		
			<!-- First slide -->
			<div class="item active deepskyblue">
			</div> <!-- /.item -->
			
			<!-- Second slide -->
			<div class="item skyblue">
			</div><!-- /.item -->
			
			<!-- Third slide -->
			<div class="item darkerskyblue">
			</div><!-- /.item -->
		
		</div><!-- /.carousel-inner -->

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- /.carousel -->

</div><!-- /.container -->
    <!-- FIN SLIDE -->

    <!-- FOOTER -->
    <?php require_once("phpCompartido/footer.php");?>
  </body>
</html>