@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\zedapps-cbt\hypersonic\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\zedapps-cbt\ingres\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\ingres\scripts\ctl.bat START)
if exist C:\zedapps-cbt\mysql\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\mysql\scripts\ctl.bat START)
if exist C:\zedapps-cbt\postgresql\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\postgresql\scripts\ctl.bat START)
if exist C:\zedapps-cbt\apache\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\apache\scripts\ctl.bat START)
if exist C:\zedapps-cbt\openoffice\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\openoffice\scripts\ctl.bat START)
if exist C:\zedapps-cbt\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\apache-tomcat\scripts\ctl.bat START)
if exist C:\zedapps-cbt\resin\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\resin\scripts\ctl.bat START)
if exist C:\zedapps-cbt\jetty\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\jetty\scripts\ctl.bat START)
if exist C:\zedapps-cbt\subversion\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\zedapps-cbt\lucene\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\lucene\scripts\ctl.bat START)
if exist C:\zedapps-cbt\third_application\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\zedapps-cbt\third_application\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\third_application\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\lucene\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\zedapps-cbt\subversion\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\subversion\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\jetty\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\jetty\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\hypersonic\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\resin\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\resin\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\zedapps-cbt\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\openoffice\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\openoffice\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\apache\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\apache\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\ingres\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\ingres\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\mysql\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\mysql\scripts\ctl.bat STOP)
if exist C:\zedapps-cbt\postgresql\scripts\ctl.bat (start /MIN /B C:\zedapps-cbt\postgresql\scripts\ctl.bat STOP)

:end

