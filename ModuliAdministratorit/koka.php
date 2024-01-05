			<header id="header">
			<span class="logo"><img src="images/miniera.png" alt="" /></span>
				<a class="logo" href="index.php"></a>
				<?php
            $result = mysqli_query($conn, "SELECT * FROM tedhanat WHERE Pamja='Koka'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
			
			<section id="banner">
				<div class="inner">
					<h2><?php echo $Titulli ?></h2>
					<p><?php echo $Pershkrimi ?></p>
				</div>
				
			</section>
		<?php } ?>
		</header>
		
		