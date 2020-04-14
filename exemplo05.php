<?php
//Sessões e um pouco de documentação

require_once("config.php");
//Obtém e/ou define o caminho para armazenamento da sessão atual.
echo session_save_path();

echo "<br>";

//Retorna o status atual da sessão.
var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "as sessões estiverem desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "as sessões estiverem habilitadas, mas nenhuma existir";
		break;
		case PHP_SESSION_ACTIVE:
		echo "as sessões estiverem habilitadas, e uma existir";
		break;
}

?>