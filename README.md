# GetIpAdress
基于纯真ip库查询ip真实地理位置，超级简单开箱即用<br>

### 特点：
1. 不配置和使用数据库，妈妈再也不用担心配置问题了
2. 使用简单，功能专（dān）注（yī）
3. 使用 composer 进行安装管理，国际标准，方便快捷，即安即用，随时更新数据库

### install
```
composer require ssskit/get-ip-address
```

### Demo
```php
use GetIpAddress\IpOperationClass\GetIpHandle;

echo GetIpHandle::getAddress('171.12.10.156');
```

### About me
Email：ssskit@qq.com<br>
个人博客：http://ssskit.cn