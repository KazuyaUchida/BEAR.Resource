<?php

namespace helloWorld\Module;

use Ray\Di\AbstractModule,
    Ray\Di\InjectorInterface;

/**
 * Application default module
 */
class HelloModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind()->annotatedWith('ResourceAdapters')->toProvider('\helloWorld\Module\ResourceAdaptersProvider');
        $this->bind()->annotatedWith('GreetingMessage')->toInstance(['en' => 'Hello World', 'ja' => 'Konichiwa Sekai']);
        $interceptors = array(new \helloworld\Interceptor\Log);
        $this->registerInterceptAnnotation('Log', $interceptors);
    }
}


