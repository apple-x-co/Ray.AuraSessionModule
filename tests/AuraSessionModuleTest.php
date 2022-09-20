<?php
/**
 * This file is part of the Ray.AuraSessionModule package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\AuraSessionModule;

use Aura\Session\Session;
use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class AuraSessionModuleTest extends TestCase
{
    public function testAuraSessionModule()
    {
        $injector = new Injector(new AuraSessionModule);
        $session = $injector->getInstance(Session::class);
        $this->assertInstanceOf(Session::class, $session);
    }
}
