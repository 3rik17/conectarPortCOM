set var1=%1
set var2=%2
set var3=%3
set var4=%4
shift
shift
shutdown -%var4% -f -t %var2% -m \\%var1% -C "%var3%"