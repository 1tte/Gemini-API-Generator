@echo off
REM Enable delayed expansion for variables within loops
setlocal enabledelayedexpansion

REM Number of times to run the PHP script
set count=175

REM Define colors
set color_default=0F
set color_start=0B
set color_running=0E
set color_success=0A
set color_failure=0C

REM Loop to run the PHP script 10 times
for /L %%i in (1,1,%count%) do (
    php projects.php
)

REM Final message with a different color
color 0D
echo Created API key for %count% times.

REM Pause to view output
pause

REM Reset color to default before exiting
color !color_default!