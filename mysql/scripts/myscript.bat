@echo off
"C:\Bitnami\moodle-3.7.2-1/mysql\bin\mysql.exe" --defaults-file="C:\Bitnami\moodle-3.7.2-1/mysql\my.ini" -u root -e "DELETE FROM mysql.user WHERE User='';"
"C:\Bitnami\moodle-3.7.2-1/mysql\bin\mysql.exe" --defaults-file="C:\Bitnami\moodle-3.7.2-1/mysql\my.ini" -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '%1';"
