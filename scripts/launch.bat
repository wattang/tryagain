@echo off
CALL C:\Bitnami\MOODLE~1.2-1\scripts\setenv.bat
START /MIN "Bitnami Moodle Stack Environment" CMD /C %*
                    