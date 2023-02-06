<?php 
// Verifica se existe algum status de manutenção no momento

include("bin/System/db_config.php");
$pg_query = "SELECT sysconfig_valor FROM sysconfig_configuracao_sistema WHERE sysconfig_chave = 'web_manutencao'";
$pg_result = pg_query($cconn, $pg_query);
$pg_result = pg_fetch_assoc($pg_result);

if($pg_result['sysconfig_valor'] == "true"){
    pg_close($cconn);
    header('Location: manutencao.php');
    exit();
}
pg_close($cconn);
?>