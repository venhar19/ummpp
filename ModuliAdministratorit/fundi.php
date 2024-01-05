<footer id="footer">
				<section  class="align-center">
								<ul class="features">
								<div class="row aln-center">
					<?php
            $result = mysqli_query($conn, "SELECT * FROM tedhanat WHERE Pamja='Fundi_Adresa'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h3><?php echo $Titulli ?></h3>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
									<?php
            $result = mysqli_query($conn, "SELECT * FROM tedhanat WHERE Pamja='Fundi_Linqe'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
						</section>
			<?php } ?>
									<?php
            $result = mysqli_query($conn, "SELECT * FROM tedhanat WHERE Pamja='Fundi_RrSociale'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
						</section>
			<?php } ?>
			</div>
			</ul>
					</section>
					<div class="copyright">
					
												<?php
            $result = mysqli_query($conn, "SELECT * FROM tedhanat WHERE Pamja='Fundi_Tedrejtatautorit'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
					
					
							<?php echo $Pershkrimi; ?>
					
			<?php } ?>
					
			
						
					</div>
				
			</footer>