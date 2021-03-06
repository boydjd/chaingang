# chaingang [![Build Status](https://secure.travis-ci.org/ehough/chaingang.png)](http://travis-ci.org/ehough/chaingang)

[Chain-of-Responsibility/Chain-of-Command pattern](http://en.wikipedia.org/wiki/Chain-of-responsibility_pattern) for PHP 5.2+

### Sample Usage

```php
/*
 * Build some commands.
 */
$command1 = new MyCommand1();   //implements Ehough\ChainGang\Api\Command
$command2 = new MyCommand2();   //implements Ehough\ChainGang\Api\Command

/*
 * Build and assemble the chain.
 */
$chain = new Ehough\ChainGang\Impl\StandardChain();
$chain->addCommand($command1);
$chain->addCommand($command2);

/*
 * Build the execution context.
 */
$context = new Ehough\ChainGang\Impl\StandardContext();
$context->put('foo', 'bar');

/*
 * Execute the chain.
 */
$successfullyHandled = $chain->execute($context);
```
