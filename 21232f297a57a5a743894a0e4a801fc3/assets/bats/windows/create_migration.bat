set CUR_YYYY=%date:~10,4%
set CUR_MM=%date:~4,2%
set CUR_DD=%date:~7,2%
set CUR_HH=%time:~0,2%

if %CUR_HH% lss 10 (set CUR_HH=0%time:~1,1%)

set CUR_NN=%time:~3,2%
set CUR_SS=%time:~6,2%

set SUBFILENAME=%CUR_DD%%CUR_MM%%CUR_YYYY%_%CUR_HH%%CUR_NN%%CUR_SS%

echo SET time_zone = "+00:00"; > .\21232f297a57a5a743894a0e4a801fc3\assets\database\migrations\%SUBFILENAME%.sql