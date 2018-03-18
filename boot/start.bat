@ECHO OFF
start /min cmd /k Call phpserve.bat
start /min cmd /k Call ngserve.bat
start cmd /k Call ngcd.bat

cd ..
cd frontend
@ECHO ON