<?php 
function function_disable_enable_user($log_id) {
    include 'connections/config.php'; 

    // Consulta para verificar o status atual do user
    $result = mysqli_fetch_array(mysqli_query($conn, "SELECT usr_active FROM users WHERE usr_log_id = '$log_id'"));
    $status = $result['usr_active'];

    if ($status == 1) {
        $usr_active = 0;
    } else {
        $usr_active = 1;
    }

    // Atualiza o status do user
    mysqli_query($conn, "UPDATE users SET usr_active = '$usr_active' WHERE usr_log_id = '$log_id'");

    // Redireciona para a página especifica
    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adm&opt=users">';
}
?>
