<?php 
    $local_path = $_POST['local_path'];
    $remote_user = $_POST["remote_user"];
    $remote_ip = $_POST['remote_ip'];
    $remote_path = $_POST['remote_path'];
    $remote_pass = $_POST['remote_pass'];
    $is_dir = $_POST["file_type"];
    $local_file = basename($local_path);
    $remote_dir = dirname($remote_path);
    
    $cmd = "bash backup.sh \"$local_path\" \"$remote_user\" \"$remote_ip\" \"$remote_path\" \"$remote_pass\" \"$is_dir\"";
    exec($cmd, $output);
    echo "<p>go back to main: <a href='index.php'>here</a>";
?>
