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
use RuntimeException;
use const true;

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

    public function testConstructorEndLine()
    {
        $options = [
            'algo' => 'bcrypt',
        $hasher = new Hasher($options);
        // Should hit end of line in function.
    }

    public function testHasherCreateVerifyAndNeedsRehashHashFunction()
    {
        $options = [
            'algo' => 'bcrypt',
            'cost' => 10
        ];
        $hasher = new Hasher($options);
        $hash = $hasher->create('Hello World!');
        $this->assertTrue(true);
        if ($hasher->verify('Hello World!', $hash)) {
            $this->assertTrue(true);
            if (!$hasher->verify('Hello Tom!', $hash)) {
                $this->assertTrue(true);
            } else {
                throw new RuntimeException('Could not verify \'hasher::verify\'.');
            }
        } else {
            throw new RuntimeException('Could not verify \'hasher::verify\'.');
        }
        $options = [
            'algo' => 'bcrypt',
            'cost' => 15
        ];
        $hasherAlt = new Hasher($options);
        if ($hasherAlt->needsRehash($hash)) {
            // Using the hash above with two different costs.
            // They should not match.
            $this->assertTrue(true);
        } else {
            throw new RuntimeException('Could not verify \'hasher::needsRehash\'.');
        }
    }
}
