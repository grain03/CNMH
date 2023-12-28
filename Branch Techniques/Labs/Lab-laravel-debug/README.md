# Lab debug laravel


## Travail a faire

Calcule la somme de deux nombres et faire debug de function de la somme


## Critère de validation

* Installation xdebug
* Utilisation vscode
* Créer un controller CalculeController et appliquer la logique de calcule*



## Installation

* Install XDebug sur vscode


```shell
# Config php.ini

[XDEBUG]
zend_extension="C:\php-8.1.24\ext\php_xdebug.dll"
xdebug.mode=debug
xdebug.client_host = 127.0.0.1
xdebug.client_port = 9003

xdebug.start_with_request = yes
``` 



* Creer launch.json file

```shell

{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 0,
            "runtimeArgs": [
                "-dxdebug.start_with_request=yes"
            ],
            "env": {
                "XDEBUG_MODE": "debug,develop",
                "XDEBUG_CONFIG": "client_port=${port}"
            }
        },
        {
            "name": "Launch Built-in web server",
            "type": "php",
            "request": "launch",
            "runtimeArgs": [
                "-dxdebug.mode=debug",
                "-dxdebug.start_with_request=yes",
                "-S",
                "localhost:0"
            ],
            "program": "",
            "cwd": "${workspaceRoot}",
            "port": 9003,
            "serverReadyAction": {
                "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
                "uriFormat": "http://localhost:%s",
                "action": "openExternally"
            }
        }
    ]
}
```



## Commandes 

```shell
    composer create-project laravel/laravel lab-laravel-debug
```
```shell
    php artisan make:controller CalculateController
```
```shell
    php artisan serve
```



## Reference

[https://dev.to/snakepy/how-to-debug-laravel-apps-with-laravel-apps-with-xdebuger-in-vs-code-8cp](https://dev.to/snakepy/how-to-debug-laravel-apps-with-laravel-apps-with-xdebuger-in-vs-code-8cp)
