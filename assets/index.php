 <!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://carmarket.towert.win/assets/images/logo.jpg" alt="Brand Logo" class="img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Products</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">FAQ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <form action="#" onsubmit="return false" id="form-login">
                            <!-- Metronic -->
                            <li class="form-group form-md-line-input form-md-floating-label">
                                <input name="email" type="email" class="form-control" id="input-email" required="required">
                                <label for="input-email">Email</label>
                                <span class="help-block">Your email address ...</span>
                            </li>
                            <li class="form-group form-md-line-input form-md-floating-label">
                                <input name="password" type="password" type="text" class="form-control" id="input-password" required="required">
                                <label for="input-password">Password</label>
                                <span class="help-block">Your password ...</span>
                            </li>
                            <!-- End Metronic -->
                            
                            <li class="clearfix login-hint">
                                <div class="login-hint__item checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                                <div class="login-hint__item text-right">
                                    <a href="http://carmarket.towert.win/forgetpass">Forgot Password?</a>
                                </div>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-primary btn-block">Log in</button>
                            </li>
                        </form>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here" style="border-right:none;">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" style="border-left:none;">
                            	<span class="glyphicon glyphicon-search"></span>
                           	</button>
                        </span>
                    </div>
                </div>
            </form> <!-- /.navbar-form -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- end </nav> -->
<div class="container">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<br /><b>USER PROFILE</b>
		</div>
		<div class="col-sm-12 text-right">
			<p><a href="" class="btn btn-primary btn-md text-right">Swittch Account as Vendo</a></p>
		</div>
		<div class="col-sm-6">
			<form class="form-horizontal">
				<div class="panel panel-primary">
					<div class="panel-heading">
						PERSONAL
						<a href="#" style="color:#FFF;" data-toggle="modal" data-target="#modal_personal">
							<i class="fa fa-edit pull-right"></i>
						</a>
					</div>
					<div class="panel-body">
						<div class="col-sm-4">
							<a href="#" class="thumbnail text-center">
								<img src="<?= base_url() ?>assets/icons/avatar.png" alt="..." class="fa fa-5x">
							</a>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<input type="text" name="names" class="form-control" placeholder="Name" />
							</div>
							<div class="form-group">
								<input type="email" name="emails" class="form-control" placeholder="Email" />
							</div>
							<div class="form-group">
								<input type="number" name="phones" class="form-control" placeholder="Telephone" />
							</div>
							<div class="form-group form-inline">
								<select name="province" id="province" class="form-control">
									<option value="">-- Chose Province --</option>
								</select> &nbsp;
								<!-- <br> -->
								<select name="city" id="city" class="form-control">
									<option value="">-- Chose City--</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" name="districts" class="form-control" placeholder="District" />
							</div>
							<div class="form-group">
								<input type="text" name="districts" class="form-control" placeholder="Sub District" />
							</div>
							<div class="form-group">
								<input type="text" name="address" class="form-control" placeholder="Address" />
							</div>
							<div class="form-group">
								<input type="text" name="districts" class="form-control" placeholder="Kode Pos" />
							</div>
						</div>
					</div>
				</div>
			</form>						
		</div>

		<div class="col-sm-6">
			<form>
				<div class="panel panel-primary">
					<div class="panel-heading">
						BANK ACCOUNT
						<a href="#" style="color:#FFF;" data-toggle="modal" data-target="#modal_bank">
							<i class="fa fa-edit pull-right"></i>
						</a>
					</div>
					<div class="panel-body" style="height:65vh;">
						<div class="form-group">
							<input type="text" name="bank_names" class="form-control" placeholder="Bank Name" />
						</div>
						<div class="form-group">
							<input type="text" name="account_numbers" class="form-control" placeholder="Account Number" />
						</div>
						<div class="form-group">
							<input type="text" name="account_holder" class="form-control" placeholder="Account Holder Name" />
						</div>
					</div>
				</div>
			</form>						
		</div>
		<div class="col-md-12">
			<h3 class="text-center">
				<a href="#collapseDocument" style="color:#000;text-decoration:none;" data-toggle="collapse" expanded="false" aria-controls="collapseDocument" >DOCUMENT&nbsp;<i class="glyphicon glyphicon-triangle-bottom"></i></a>
			</h3>
			<div id="collapseDocument" class="collapse col-md-10 col-md-offset-3">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel1">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseOne" 
						 			href="#collapseOne" class="clickable collapsed">
						 			1.Upload KTP
							 		</a>
							 	</h4>
							 	<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
   						    </div>
							<div id="collapseOne" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
											</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel2">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseTwo" 
						 			href="#collapseTwo" class="collapsed">
						 			2.Upload Surat Nikah
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseTwo" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel3">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseThree" 
						 			href="#collapseThree" class="collapsed">
						 			3.Upload Kartu Keluarga
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseThree" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel4">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseFour" 
						 			href="#collapseFour" class="collapsed">
						 			4.Upload Rekening Koran
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseFour" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel5">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseFive" 
						 			href="#collapseFive" class="collapsed">
						 			5.Upload NPWP
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseFive" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel6">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseSix" 
						 			href="#collapseSix" class="collapsed">
						 			6.Upload Slip Gaji
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseSix" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel7">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseSeven" 
						 			href="#collapseSeven" class="collapsed">
						 			7.Upload SIUP
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseSeven" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel8">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseEight" 
						 			href="#collapseEight" class="collapsed">
						 			8.Upload Kepemilikan Rumah
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseEight" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel9">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseNIne" 
						 			href="#collapseNIne" class="collapsed">
						 			9.Upload Izin Profesi 
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseNIne" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-warnings" id="panel10">
						 	<div class="panel-heading">
						 		<h4 class="panel-title">
						 			<a data-toggle="collapse" data-target="#collapseTen" 
						 			href="#collapseTen" class="collapsed">
						 			10.Upload Laporan Keuangan
							 		</a>
							 	</h4><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
   						    </div>
							<div id="collapseTen" class="panel-collapse collapse">
							 	<div class="panel-body">
							 		<div id="dropzone">
										<form class="dropzone needsclick" id="demo-upload" action="/upload">
											<div class="dz-message needsclick">    
												<p class="text-center"> <a style="margin-top: 10px;" class="btn  btn-circle btn-lg btn-defaults"><i class="fa fa-arrow-up"></i></a></p>
												<span class="note needsclick">
													<p class="text-center">Drop File here Or <a href="">CLick</a> To upload</p> 
												 </span>
												</div>
										</form>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>