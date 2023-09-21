<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>
	
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('log/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{ url('log/img/favicon.png')}}"/>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ url('log/css/bootstrap.min.css')}}"  rel="stylesheet" />
	<link href="{{ url('log/css/material-bootstrap-wizard.css')}}"  rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ url('log/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
	   
<header id="header1" class="fixed-top">
    <div class="container d-flex align-items-center">
    <img src="{{ url('frontend/img/logo1.png')}}" class="logo me-auto" alt="">
      
      <a href="{{ url('/')}}" class="get-started-btn">Acceuil</a>

    </div>
  </header><!-- End Header -->


	    <!--   Big container   -->
	    <div class="container" style="background-color=#ffffff ;">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard" >
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		se connecter 
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Espace Etudiant</a></li>
			                            <li><a href="#captain" data-toggle="tab">Espace Enseignant</a></li>
			                            <li><a href="#description" data-toggle="tab">Espace Adimstratif</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Espace Etudiant</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Votre Identifian</label>
			                                          	<input name="name" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Votre mot de passe</label>
			                                          	<input name="name2" type="password" class="form-control">
			                                        </div>
												</div>

		                                	</div>
                                      

		                            	</div>
                                  <a href="{{url('/welcome/indexuser')}}" class='btn btn-fill btn-danger btn-wd'> Connexion </a>

		                            </div>

		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">Espace Enseignant </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating text-center">
			                                          	<label class="control-label">Votre mot de passe</label>
			                                          	<input name="name2" type="password" class="form-control">
			                                        </div>
												</div>
		                                        </div>
                                           
                                            <a href="{{url('/back/userindex')}}" class='btn btn-fill btn-danger btn-wd'> Connexion </a>

		                                   
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Espace Adimstratif</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating text-center">
			                                          	<label class="control-label">Votre mot de passe</label>
			                                          	<input name="name2" type="password" class="form-control">
			                                        </div>
												</div>
		                                        </div>
                                           
                                            <a href="{{url('/welcome/indexadmin')}}" class='btn btn-fill btn-danger btn-wd'> Connexion </a>

		                                   
		                                </div>
		                            </div>
                                
		                        </div>
	                        	<div class="wizard-footer">
	                            	
								
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	        </div>
	    </div>
	</div>
	
</body>
	<!--   Core JS Files   -->
	<script src="{{ url('log/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('log/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ url('log/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ url('log/js/material-bootstrap-wizard.js')}}"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ url('log/js/jquery.validate.min.js')}}"></script>
</html>
