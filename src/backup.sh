local_path="$1"
remote_user="$2"
remote_ip="$3"
remote_path="$4"
remote_pass="$5"
file_type="$6"

if [ $file_type == "directory" ]; then
        sshpass -p "$remote_pass" scp -o "StrictHostKeyChecking=no" -r "$local_path" "$remote_user@$remote_ip:$remote_path/"
else
        sshpass -p "$remote_pass" scp -o "StrictHostKeyChecking=no" "$local_path" "$remote_user@$remote_ip:$remote_path/"
fi
