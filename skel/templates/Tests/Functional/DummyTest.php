<?php

declare(strict_types=1);

namespace Toujou\Eventsauce\Tests\Functional;

use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

class DummyTest extends FunctionalTestCase
{
    /**
     * @test
     */
    public function dummyTest(): void
    {
        self::assertTrue(true);
    }
}
