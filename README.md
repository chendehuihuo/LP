# LP 框架

****LG****是一套简洁、内存小的PHP Web开发框架(PHP Web Framework)。


## Sponsors


If you are not using any of these frameworks, here's a very simple way to install:

1. Use [Composer](http://getcomposer.org) to install Whoops into your project:

    ```bash
    composer require filp/whoops
    ```

1. Register the pretty handler in your code:

    ```php
    $whoops = new \Whoops\Run;
    $whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ```

