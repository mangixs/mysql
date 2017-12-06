数据表主键重新设置自增
1
ALTER TABLE table_name AUTO_INCREMENT = 1;
2
TRUNCATE TABLE table_name;  表内数据被删

正则匹配
% 通配符 在字符串中表示任意字符出现任意次数
_下划线字符 只匹配单个字符
RTrim()函数去掉列值右边的空格
Upper()函数将文本转换成大写


mysql 开启远程连接
 
mysql -uusername -ppwd
use mysql 
update mysql.user set Host='%' where HOST='localhost' and User='root';
flush privileges;

日志
show variables like 'log_%';
如果设置mysql> set global log_output='table'  的话，则日志结果会记录到名为gengera_log的表中，这表的默认引擎都是CSV
如果设置表数据到文件  set global log_output=file;
设置general log的日志文件路径：set global general_log_file='/tmp/general.log';
开启general log： set global general_log=on;    ---不需要服务器的重启
关闭general log： set global general_log=off;
 set  global sql_log_off=on; 可以让 当前session不记录 执行的sql 语句
