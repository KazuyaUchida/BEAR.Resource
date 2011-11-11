<?php
namespace helloworld\Interceptor;

use Ray\Aop\MethodInterceptor,
    Ray\Aop\MethodInvocation;

/**
 * @Log Interceptor
 *
 */
class Log implements MethodInterceptor
{
    public function invoke(MethodInvocation $invocation)
    {
        $result = $invocation->proceed();
        $class = get_class($invocation->getThis());
        $input = $invocation->getArguments();
        echo "[Log] target = $class, input = $input, result = $result\n";
        return $result;
    }
}