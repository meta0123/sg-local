@echo off

echo 'start git clone'

pause

for /f %%i in (i.txt) do git clone git@github.com:istar36588/%%i.git "C:/Users/User/Documents/Github/%%i"

echo 'git clone finish'

pause