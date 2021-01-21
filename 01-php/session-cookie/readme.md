# PHP session cookie 学习记录

## redis

查看过期时间

127.0.0.1:6379> TTL PHPREDIS_SESSION:09dagf14a2aad7h7aotisubata
(integer) 1396

获取所有redis db 下所有数据

```shell

➜  xgk-test redis-cli
127.0.0.1:6379> keys *
1) "dog"
2) "swoft:key"
3) "a"
4) "PHPREDIS_SESSION:8r0mkor5p0lfqcldduu8bkj5on"

```

## PHP session

* php中的session有效期默认是1440秒（24分钟）
