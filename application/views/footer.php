`<!-- footer -->
	<footer class="footer-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="footer">
						<h4 class="footer__title">COMPANY NAME</h4>
						<div class="footer__cont">
							<p>Jl. Bendungan Hilir No.112, RT.13/RW.6, Bend. Hilir,<br> Tanahabang, Kota Jakarta Pusat<br> Daerah Khusus Ibukota Jakarta 10210<br> Telepon: (021) 80648777</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="footer">
						<h4 class="footer__title">OUR PRODUCTS</h4>
						<div class="footer__cont">
							<ul class="list-unstyled">
								<li><p><a href="#">Cars</a></p></li>
								<li><p><a href="#">Motorcycle</a></p></li>
								<li><p><a href="#">Smartphones</a></p></li>
								<li><p><a href="#">Electronics</a></p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- End footer -->

	<!-- Modal -->
	<div id="modal_personal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Edit Personal</h4>
				</div>
				<div class="modal-body">
					<div class="row">
		          		<div class="col-md-4">
		          			<a href="#" class="thumbnail">
								<img src="assets/icons/avatar.png" alt="..." class="fa fa-5x">
							</a>
		          		</div>
		          		<div class="col-md-7 col-md-offset-1">
		          			<div class="form-group">
								<input type="text" name="Enames" class="form-control form-control-modif" placeholder="Name" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group">
								<input type="email" name="Eemails" class="form-control form-control-modif" placeholder="Email" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group">
								<input type="number" name="Ephones" class="form-control form-control-modif" placeholder="Telephone" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group form-inline">
								<select name="Eprovince" id="Eprovince" class="form-control form-control-modif" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0">
									<option value="">-- Chose Province --</option>
								</select>

								<select name="Ecity" id="Ecity" class="form-control form-control-modif" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0">
									<option value="">-- Chose City--</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" name="Edistricts" class="form-control form-control-modif" placeholder="District" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group">
								<input type="text" name="Edistricts" class="form-control form-control-modif" placeholder="Sub District" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group">
								<input type="text" name="Edistricts" class="form-control form-control-modif" placeholder="Kode pos" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>
							<div class="form-group">
								<input type="text" name="Eaddress" class="form-control form-control-modif" placeholder="Address" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
							</div>	
		          		</div>
		        	</div>
				</div>
				<div class="modal-footer">
					 <div class="row">
          				<div class="col-md-4 text-left">
          					<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0;">Back</button>
          				</div>
          				<div class="col-md-4 col-md-offset-4">
          					<button type="button" class="btn btn-primary" style="border-radius:0;">Save</button>
          				</div>
        			</div>
				</div>
			</div>
		</div>
	</div>

	<div id="modal_bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Edit Account Bank</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="Ebank_names" class="form-control form-control-modif" placeholder="Bank Name" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
					</div>
					<div class="form-group">
						<input type="text" name="Eaccount_numbers" class="form-control form-control-modif" placeholder="Account Number" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
					</div>
					<div class="form-group">
						<input type="text" name="Eaccount_holder" class="form-control form-control-modif" placeholder="Account Holder Name" style="border-top:0;border-left:0;border-right:0;box-shadow:none;border-radius:0" />
					</div>
				</div>
				<div class="modal-footer">
					 <div class="row">
          				<div class="col-md-4 text-left">
          					<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0;">Back</button>
          				</div>
          				<div class="col-md-4 col-md-offset-4">
          					<button type="button" class="btn btn-primary" style="border-radius:0;">Save</button>
          				</div>
        			</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End ./Modal -->

	<!-- JavaScript -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/dropzone.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.matchHeight-min.js"></script>

	<?php get_view( array("java_script","profile_js.php") ); ?>
	<!-- end ./ -->
</body>
</html>