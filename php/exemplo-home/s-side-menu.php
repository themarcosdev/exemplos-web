<!-- d-none d-md-flex -->
<div id="mSideBar" class="sidebar p-2 text-white" style="z-index: 99999999;" ondrop="drop(event)" ondragover="allowDrop(event)">
	<div class="align-items-center">
		<a href="#">
			<i class="fa-solid fa-bars"></i>
			<span>MENU</span>
		</a>
	</div>
	<div class="align-items-center">
		<a id="mSideBarItem1" href="#pag1" draggable="true" ondragstart="drag(event)">
			<i class="fas fa-file-alt"></i>
			<span>P&aacute;gina Nro 1 - Cadastros do users para teste e placeholder do sistema </span>
		</a>
	</div>
	<div class="align-items-center">
		<a id="mSideBarItem2" href="#pag2" draggable="true" ondragstart="drag(event)">
			<i class="fas fa-folder"></i>
			<span>Pag2</span>
		</a>
	</div>
	<div class="align-items-center">
		<a id="mSideBarItem3" href="#pag3" draggable="true" ondragstart="drag(event)">
			<i class="fas fa-list-alt"></i>
			<span>Pag3</span>
		</a>
	</div>
	<div class="align-items-center sidebar-footer">
		<a href="#sair">
			<i class="fa-regular fa-circle-left"></i>
			<span>Sair</span>
		</a>
	</div>
</div>
<style>
	.sidebar {
		background-color: darkblue;
		height: 100vh;
		width: 60px;
		display: flex;
		flex-direction: column;
		align-items: center;
		position: fixed;
		top: 0;
		left: 0;
		transition: width 0.5s ease;
	}

	.sidebar:hover {
		width: 25vw;
		text-align: start;
	}

	.sidebar a {
		text-decoration: none;
		color: white;
		display: flex;
		align-items: center;
		margin-bottom: 20px;
		transition: 0.5s ease;
	}

	.sidebar a:hover {
		width: 100%;
	}

	.sidebar a span {
		display: none;
		margin-left: 10px;
	}

	.sidebar a:hover span {
		display: block;
		text-align: center;
		color: white;
	}

	.sidebar-footer{
		height: 3.5vh;
		position: absolute;
		bottom: 0;
		list-style-type: none;
	}
</style>
