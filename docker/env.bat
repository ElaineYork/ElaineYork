chcp 65001
cls
:go
ECHO off
echo ----------------------------------------
echo                   docker
echo ----------------------------------------
echo a.�Ұ� c.���� l.��� q.���}
echo ----------------------------------------
set /p input=Input:
cls

If "%input%" == "a" Goto a
If "%input%" == "c" Goto c
If "%input%" == "l" Goto l
If "%input%" == "q" Goto q
echo �п�J���T���O
goto go

:a
docker-compose up -d
goto go

:c
docker-compose down
goto go

:l
docker ps -a
goto go

:q