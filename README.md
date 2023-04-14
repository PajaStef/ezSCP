# ezSCP
This is a web gui made in PHP that just makes scp kinda easier.

GUIDE:
1. clone this repo: git clone https://github.com/PajaStef/ezSCP/
2. go into ezSCP, cd ezSCP
3. make the image using docker build: sudo docker build -t ezscp .
4. start the container: sudo docker run -d -p 8080:8080 ezscp

thats it, now navigate to http://localhost:8080 and/or http://ip_of_server:8080

on the site you have a little file browser to browse local directories, and then you have a form, you enter all the details such as username, password, ip, local dir, remote dir and so on. You have to be accurate when entering this info, you need to choose if you are backuping directory or a file/files(VERY IMPORTNANT). Clicking backup will trigger backup.sh that will backip your selected file/folder.
