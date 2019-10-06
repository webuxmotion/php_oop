# Composer usage guide

## 1. Create file composer.json

```
{
  "require": {},
  "autoload": {
    "psr-4": {
      "classes\\": "classes"  
    } 
  } 
}
```

## 2. Install composer

```
composer install
```

If composer.json was edited, you should update autoload file using this command:

```
composer dump-autoload
```
