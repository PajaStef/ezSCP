<!DOCTYPE html>
<html>
<head>
        <title>ezSCP V 1.0</title>
        <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
        <h1>ezSCP V 1.0</h1>
        <form action="backup.php" method="post">
                <!-- Local server information -->
                <label for="local_path">Local Server Path:</label>
                <input type="text" id="local_path" name="local_path"><br>

                <!-- Remote server information -->
                <label for="remote_user">Remote Server User:</label>
                <input type="text" id="remote_user" name="remote_user"><br>

                <label for="remote_ip">Remote Server IP:</label>
                <input type="text" id="remote_ip" name="remote_ip"><br>

                <label for="remote_path">Remote Server Path:</label>
                <input type="text" id="remote_path" name="remote_path"><br>

                <label for="remote_pass">Remote Server Password:</label>
                <input type="password" id="remote_pass" name="remote_pass"><br>

                <label for="file_type">File type:</label>
                <input type="radio" id="file" name="file_type" value="file" checked>
                <label for="file">File</label>
                <input type="radio" id="directory" name="file_type" value="directory">
                <label for="directory">Directory</label><br>
                <input type="submit" value="Backup">
        </form>
    <h1>File Browser</h1>
    <form action="" method="post">
        <label for="path">Enter Path:</label>
        <input type="text" id="path" name="path">
        <input type="submit" value="Submit">
    </form>

        <?php
            if(isset($_POST['path'])) {
            $path = $_POST['path'];
            if(file_exists($path) && is_dir($path)) {
                $handle = opendir($path);
                echo "<table>";
                echo "<thead><tr><th>Name</th><th>Type</th><th>Size</th></tr></thead>";
                echo "<tbody>";
                while(false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != ".."){
                        echo "<tr>";
                        echo "<td>$entry</td>";
                        echo "<td>" . (is_dir($path.'/'.$entry) ? "Directory" : "File") . "</td>";
                        echo "<td>" . filesize($path.'/'.$entry) . " bytes</td>";
                        echo "</tr>";;
		    }
                }
                echo "</tbody>";
                echo "</table>";
                closedir($handle);

                echo "<p>Current directory: " . realpath($path) . "</p>";
            } else {
                echo "Invalid directory path";
            }
        }
        ?>
</body>
</html>
