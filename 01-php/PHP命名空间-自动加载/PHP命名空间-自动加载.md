# 命令空间 & 自动加载

## 命名空间

可以更好地组织代码，与Java中的包类似。
总结：通过以上代码，可以看到，在不同的命名空间下，可以有相同的类名或者方法名。

## 类自动载入

随着PHP项目的变大，会导致一个PHP文件的前面有很多的require去包含各种依赖的PHP文件。如果某个类删除，但是在别的文件里有导入的情况，就会导致致命错误。解决以上问题的方法，就是__autoload()函数。


## PSR-0

PHP的命名空间必须与绝对路径一致。
类名首字母大写。
除了入口文件之外，其他的PHP文件必须是一个类，不能有执行的代码。
