<?php

declare(strict_types=1);

namespace Toujou\{{capitalized_projectname}}\Tests\Functional;

use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class DummyTest extends FunctionalTestCase
{

    #[Test]
    public function dummyTest(): void
    {
        $this->assertTrue(true);
    }
}
