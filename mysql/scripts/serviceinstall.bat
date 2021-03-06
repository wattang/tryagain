@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\Bitnami\moodle-3.7.2-1/mysql\bin\mysqld.exe" --install "moodleMySQL-1" --defaults-file="C:\Bitnami\moodle-3.7.2-1/mysql\my.ini"

net start "moodleMySQL-1" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "moodleMySQL-1" >NUL
"C:\Bitnami\moodle-3.7.2-1/mysql\bin\mysqld.exe" --remove "moodleMySQL-1"

:end
exit
