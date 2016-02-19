# yii2-ztree
ZTree for Yii 2

# 安装
使用 composer，在命令行下使用以下命令：

```php
composer require "yadjet/yii2-ztree:dev-master" 
```

#使用
```php
<?=
\yadjet\ztree\Ztree::widget([
    'id' => '__ztree__',
    'nodes' => $nodes,
    'settings' => [
        'check' => [
            'enable' => true
        ]
]])
?>
```