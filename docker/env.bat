chcp 65001
cls
:go
ECHO off
echo ----------------------------------------
echo                   docker
echo ----------------------------------------
echo a.啟動 c.關閉 l.顯示 q.離開
echo ----------------------------------------
set /p input=Input:
cls

If "%input%" == "a" Goto a
If "%input%" == "c" Goto c
If "%input%" == "l" Goto l
If "%input%" == "q" Goto q
echo 請輸入正確指令
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