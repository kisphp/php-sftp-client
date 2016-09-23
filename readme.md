# Simple PHP SFTP Client

## Installation

......

## Usage

Create a config class that implements `ConfigInterface`

```php
<?php

use Kisphp\ConfigInterface;

class Config implements ConfigInterface
{
    public function getHost()
    {
        return '10.10.0.61';
    }
    
    public function getPort()
    {
        return 22;
    }
    
    public function getUsername()
    {
        return 'vagrant';
    }
    
    public function getPassword()
    {
        return 'vagrant';
    }
}
```

Instantiate SftpConnect class and pass your Config object to it

```php
$s = new SftpConnect(new Config());
```

## Upload a file

```php
$s->sendFile(__DIR__ . '/source.php', 'b.php'); // will return true for success and false for failure
```

## Download a file

```php
$s->receiveFile('a.php', 'c.php'); // will return true for success and false for failure
```
