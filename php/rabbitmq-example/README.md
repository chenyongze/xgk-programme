# RabbitMq PHP 实践

AMQP 即Advanced Message Queuing Protocol，高级消息队列协议，是应用层协议的一个开放标准，为面向消息的中间件设计
消息中间件主要用于组件之间的解耦，消息的发送者无需知道消息使用者的存在，反之亦然。

RabbitMQ 是一个开源的AMQP实现，服务器端用Erlang语言编写，支持多种客户端，如：Python、Ruby、.NET、Java、JMS、C、PHP、ActionScript、XMPP、STOMP等，支持AJAX

## 扩展阅读

https://www.php.cn/php-weizijiaocheng-230336.html

## php 安装扩展

```shell
pecl 

https://pecl.php.net/package/amqp

安装 amqp 之前需要  安装 librabbitmq

https://github.com/rabbitmq/rabbitmq-c/releases
https://github.com/rabbitmq/rabbitmq-c/archive/librabbitmq-0.1-amqp_0_9_1.tar.gz

安装步骤



./configure --prefix=/usr/local/ rabbitmq-c-0.7.1

make&&make install

```

目前安装失败

## mac 安装 rabbitMq

```shell

brew install rabbitmq

```
