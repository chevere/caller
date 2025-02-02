<?php

/*
 * This file is part of Chevere.
 *
 * (c) Rodolfo Berrios <rodolfo@chevere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chevere\Tests;

use Chevere\Caller\Caller;
use PHPUnit\Framework\TestCase;

final class CallerTest extends TestCase
{
    public function testConstruct(): void
    {
        $file = 'File';
        $line = 123;
        $caller = new Caller($file, $line);
        $this->assertSame($file, $caller->file());
        $this->assertSame($line, $caller->line());
        $this->assertSame(
            $file . ':' . $line,
            $caller->__toString()
        );
    }
}
