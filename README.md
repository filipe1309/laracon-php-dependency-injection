# Demystifying Dependency Injection Containers by Kai Sassnowski

https://www.youtube.com/watch?v=y7EbrV4ChJs&ab_channel=LaraconEU


```
composer init
composer install

php test.php
```

A container is like an aggregation of factories  
It works recursively  
Example:  
```php
$container = new Container();

$container->set(User::class, function (Container $c) {
  return new User($c->get(SessionStorage::class));
});

$container->set(SessionStorage::class, function (Container $c) {
  return new SessionStorage($c->get(Logger::class));
});

$container->set(Logger::class, function (Container $c) {
  return new Logger();
});
```

Equals to
```php
new User(new SessionStorage(new Logger()));
```
