任务计划程序库，选择创建基本任务

然后即可以按照实际情况逐步进行

执行程序为bat脚本程序

ps:

@echo 设置MySql数据库的IP
set  ipaddress=localhost
@echo 设置MySql数据库名
set  db_name=door

@echo 获取当天的日期格式yyyymmdd 20120311
set  backup_date=%date:~0,4%%date:~5,2%%date:~8,2%
set  backup_date1=date:~0,10

@echo 设置mysqldump 备份的参数
set  db=-uroot -proot -h %ipaddress% %db_name%

@echo 使用mysqldump对指定的MySql进行备份
mysqldump %db%  > D:\door\%db_name%_%backup_date%.sql
@echo echo输出提示信息，使用set来设置常量，使用rem对程序进行注释。
@echo off 关闭命令行执行输出，

如果遇到---'mysqldump' 不是内部或外部命令，也不是可运行的程序---这样的错误，说明你需要配置环境变量：
我的电脑上右键-〉属性-〉高级-〉环境变量-〉新建：变量名：path 变量值：mysqldump.exe所在的目录。

这样在windows下就可以定时备份mysql数据库了。。。