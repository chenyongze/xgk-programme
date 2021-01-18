# kafka php 例子

## 安装

```shell

pecl 安装
https://pecl.php.net/package/rdkafka

pecl install rdkafka

```

## mac 安装 kafka

```shell

安装
brew install kafka

安装目录
/usr/local/Cellar/kafka/2.7.0

配置目录
/usr/local/etc/kafka


创建一个topic
# 命令行参数含义，后续补充，当前页不是很清楚，约莫能猜出个大概
kafka-topics --create --zookeeper localhost:2181 --replication-factor 1 --partitions 1 --topic sunday

查看topic列表

kafka-topics --list --zookeeper localhost:2181
# 输出：
__consumer_offsets
sunday

```
