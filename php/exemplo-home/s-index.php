<html>
	<body>
		<?php
			include_once "./s-header.php";
			include_once "./s-nav-bar-menu.php";
			include_once "./s-side-menu.php";
		?>
		<div id="page-content-wrapper" class="mt-1 ms-5 px-1">
			<div class="container-fluid">
				<?php
					// Sua página principal / conteúdo principal aqui ;
					$arquivo = "./404.php";
					if(file_exists($arquivo)){
						include_once $arquivo ;
					}
				?>
			</div>
		</div>
	</body>
</html>
<script>
	if(document.getElementsByClassName("navbar-toggler")[0]){
		document.getElementsByClassName("navbar-toggler")[0].addEventListener("click",()=>{
			showHideMenuLateral();
		});
	}

	if(document.getElementById("btnHideMenuInd")){
		document.getElementById("btnHideMenuInd").addEventListener("click",()=>{
			showHideMenuLateral();
		});
	}

	/** Função para esconder ou mostrar menu lateral  */
	function showHideMenuLateral(){
		if(document.getElementsByClassName("sidebar")[0].classList.contains("d-none")){
			document.getElementsByClassName("sidebar")[0].classList.remove("d-none");
			document.getElementsByClassName("navbar")[0].classList.add("ms-5");
			document.getElementById("page-content-wrapper").classList.add("ms-5");
			document.getElementsByTagName("header")[0].classList.add("ms-5");
		} else {
			document.getElementsByClassName("sidebar")[0].classList.add("d-none");
			document.getElementsByClassName("navbar")[0].classList.remove("ms-5");
			document.getElementById("page-content-wrapper").classList.remove("ms-5");
			document.getElementsByTagName("header")[0].classList.remove("ms-5");
		}
	}


	/** DRAG and DROP */
	function allowDrop(ev) {
		ev.preventDefault();
	}

	function drag(ev) {
		ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}
</script>

