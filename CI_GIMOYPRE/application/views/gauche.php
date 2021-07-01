<div class="sidebar" data-color="purple" data-background-color="white" data-image="">
	<div class="logo"><a  class="simple-text logo-normal">
	<span class="text-muted"> GIMOY</span><span class=" text-info">PRE</span>
		</a></div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="nav-item active">
				<a class="nav-link" >
					<i class="material-icons">dashboard</i>
					<p>Tableau de Bord</p>
				</a>
			</li>
			<li class="nav-item user" id="77">
				<a class="nav-link">
						<i class="material-icons">person</i>
						<p>Utilisateur</p>
				</a>
			</li>
			<span id="7">
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('UsersController\index'); ?>">
						<i class="material-icons">person_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link"href="<?php echo site_url('UsersController\liste'); ?>">
						<i class="material-icons">list_alt</i>
						<p>Lister</p>
					</a>
				</li>
			</span>

			<li class="nav-item <?php

		// echo $statut; ?>" id="11" >
				<a class="nav-link">
					<i class="material-icons">school</i>
					<p>Etudiant </p>
				</a>
			</li>
			<span id="1">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('EtudiantController\index'); ?>">
						<i class="material-icons">person_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('EtudiantController\index'); ?>">
						<i class="material-icons">list_alt</i>
						<p>Lister</p>
					</a>
				</li>
			</span>
			<li class="nav-item <?php// echo $statut; ?>" id="22">
				<a class="nav-link">
					<i class="material-icons">library_books</i>
					<p>Cours</p>
				</a>
			</li>
			<span id="2">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('MatiereController\index'); ?>">
						<i class="material-icons">library_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('EtudiantController\index'); ?>">
						<i class="material-icons">format_list_bulleted</i>
						<p>Lister</p>
					</a>
				</li>
			</span>


			<li class="nav-item" id="66">
				<a class="nav-link">
					<i class="material-icons">business</i>
					<p>Departement</p>
				</a>
			</li>
			<span id="6">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('DepartementController\index'); ?>">
						<i class="material-icons">library_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('DepartementController\listerDepartement');?>">
						<i class="material-icons">format_list_bulleted</i>
						<p>Lister</p>
					</a>
				</li>
			</span>


						<li class="nav-item " id="99">
							<a class="nav-link">
								<i class="material-icons">view_list</i>
								<p>Fiches</p>
							</a>
						</li>
						<span id="9">
							<li class="nav-item "  >
								<a class="nav-link"  href="<?php echo site_url('PresenceControler\index'); ?>">
									<i class="material-icons">view_list</i>
									<p>Normale</p>
								</a>
							</li>
							<li class="nav-item "  >
								<a class="nav-link" href="<?php echo site_url('PresenceControler\listerp');?>">
									<i class="material-icons">view_list</i>
									<p>Controle Continue</p>
								</a>
							</li>
						</span>
			<li class="nav-item " id="44">
				<a class="nav-link">
					<i class="material-icons">settings</i>
					<p>Option</p>
				</a>
			</li>
			<span id="4">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('OptionController\index'); ?>">
						<i class="material-icons">library_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('OptionController\listerOption');?>">
						<i class="material-icons">format_list_bulleted</i>
						<p>Lister</p>
					</a>
				</li>
			</span>


			<li class="nav-item" id="55">
				<a class="nav-link">
					<i class="material-icons">calendar_view_day</i>
					<p>Parcours</p>
				</a>
			</li>
			<span id="5">
				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url('ParcourController\index'); ?>">
						<i class="material-icons">add_road</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('ParcourController\listerParcour');?>">
						<i class="material-icons">format_list_bulleted</i>
						<p>Lister</p>
					</a>
				</li>
			</span>

			<li class="nav-item" id="33">
				<a class="nav-link">
					<i class="material-icons">language</i>
					<p>Unite D'enseignement</p>
				</a>
			</li>

			<span id="3">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('UEController\index'); ?>">
						<i class="material-icons">library_add</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php //echo site_url('UeController\listerUE');?>">
						<i class="material-icons">format_list_bulleted</i>
						<p>Lister</p>
					</a>
				</li>
			</span>

			<li class="nav-item " id="88">
				<a class="nav-link">
					<i class="material-icons">event</i>
					<p>Emplois de Temps</p>
				</a>
			</li>
			<span id="8">
				<li class="nav-item "  >
					<a class="nav-link"  href="<?php echo site_url('ProgrammationController\index'); ?>">
						<i class="material-icons">edit_calendar</i>
						<p>Enregistrement</p>
					</a>
				</li>
				<li class="nav-item "  >
					<a class="nav-link" href="<?php echo site_url('UsersController\listerUsers');?>">
						<i class="material-icons">calendar_view_month</i>
						<p>Lister</p>
					</a>
				</li>
			</span>


		</ul>
	</div>
</div>
<div class="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
		<div class="container-fluid">
			<div class="navbar-wrapper">
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end">
				<form class="navbar-form">
					<div class="input-group no-border">
						<input type="text" value="" class="form-control" placeholder="Search...">
						<button type="submit" class="btn btn-white btn-round btn-just-icon">
							<i class="material-icons">search</i>
							<div class="ripple-container"></div>
						</button>
					</div>
				</form>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="javascript:;">
							<i class="material-icons">dashboard</i>
							<p class="d-lg-none d-md-block">
								Stats
							</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
