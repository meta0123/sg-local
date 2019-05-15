@echo off

echo 'start git clone'

pause

for /f %%j in (j.txt) do git clone git@github.com:istar588/%%j.git "C:/Users/User/Documents/Github/%%j"

echo 'git clone finish'

pause