<?php

declare(strict_types=1);
/**
 * Crystal Chess - Basic password hashing with PHP.
 *
 * @author Crystal Chess Contributors <https://github.com/orgs/crystal-chess/people>
 *
 * @link <https://github.com/crystal-chess/hasher> Crystal Hasher.
 */

namespace CrystalChess\Chess;

use CrystalChess\Hasher;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * Hasher test case.
 */
class HasherTest extends TestCase
{
    public function testConstructorExceptionFromTheInstanceGetter()
    {
        $this->expectException(UnexpectedValueException::class);
        $options = [
            'algo' => 'md5', // The old way of hashing. We do not use this anymore.
        ];
        $hasher = new Hasher($options);
        // Should fail due to exception thrown.
    }
}
