<!-- ?version=timestamp;  (Nunca guarda cache no js)-->
<script src="./js/seuScriptJS.js?version=<?php echo time() ; ?>"></script>

<!-- ?version=ultimaModificacaoFeitaNesseArquivoJs; (Sempre guarda cache, mas caso seja alterado o arquivo js no server perde o cache automáticamente) -->
<script src="./js/seuScriptJS.js?version=<?= filemtime('./js/seuScriptJS.js') ;?>"></script>
