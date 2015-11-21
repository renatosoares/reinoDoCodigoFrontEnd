
	<br>
	<!-- avatar -->

		<div class="row">
			<div class="col-sm-1 col-md-2">&nbsp;</div>
			<div class="page-header text-right col-sm-10 col-md-8">
				
				<div class="col-xs-6 col-md-3">
		    		<a href="#" class="text-right">
		      			<img src="images/bob_esponja-animacao.jpg" alt="..." class="img-thumbnail img-circle">
		    		</a>
	  			</div>
	  			<h1 class="text-center">
	  			<small>	 <span class="glyphicon glyphicon-star-empty"></span> </small> &nbsp; C o n q u i t a s &nbsp; <small>	 <span class="glyphicon glyphicon-star-empty"></span> </small> <br>
	  				<hr><small>Bob Esponja</small>
	  			</h1>
	  			
			</div>
			<div class="col-sm-3 col-md-5">&nbsp;</div>
		</div>

	<!-- \avatar -->
	<!-- ************************************************** -->
<?php for ($j= 0; $j < 3; $j++): ?>
	<div class="row">
		<div class="col-sm-1 col-md-2">&nbsp;</div>
		<div class="col-sm-10 col-md-8">
			<div class="row"> <!-- bloco com as badge -->
				<?php for ($i= 0; $i < 3; $i++): ?>
				
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<img src="images/smokin.png" alt="badge">
						<div class="caption">
							<h3>Lições Completas</h3>
							<h4>6 Nov, 2015</h4>
							<br>
							<div class="text-right">
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
  									Compartilhe <span class="glyphicon glyphicon-send "></span>
								</button>
							</div>
							
						</div>
					</div>
				</div>

				<?php endfor;  ?>
			</div><!-- /row -->
		</div>
		<div class="col-sm-1 col-md-2">&nbsp;</div>
	</div>  <!-- /row -->
<?php endfor;  ?>
	<!-- ************************************************** -->




	<!-- ************************************************** -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div> <!-- /modal -->
