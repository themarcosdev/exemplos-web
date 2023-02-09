<nav id="mNavBar" class="d-flex navbar navbar-expand-md  navbar-light text-center ms-5" style="background-color: darkblue;" ondrop="drop(event)" ondragover="allowDrop(event)">
	<a id='btnHideMenuInd' class="navbar-brand text-white d-none d-md-inline me-3 justify-contend-end" href="#">
		<i class="fa-solid fa-bars px-5"></i> 
	</a>
	<a class="navbar-brand text-white" href="#">
		<i class="fas fa-home "></i> Home
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse " id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a id="mNavMenuItem1" class="nav-link text-white" href="#1" draggable="true" ondragstart="drag(event)">
					<i class="fa-regular fa-circle-question"></i> <span>Icon1</span>
				</a>
			</li>
			<li class="nav-item">
				<a id="mNavMenuItem2" class="nav-link text-white" href="#2" draggable="true" ondragstart="drag(event)">
					<i class="fa-regular fa-circle-question"></i> <span>Icon2</span>
				</a>
			</li>
			<li class="nav-item">
				<a id="mNavMenuItem3" class="nav-link text-white" href="#3" draggable="true" ondragstart="drag(event)">
					<i class="fa-solid fa-gears"></i> <span>Configs</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
