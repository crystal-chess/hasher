<?php

declare(strict_types=1);
/**
 * Crystal Chess - Basic password hashing with PHP.
 *
 * @author Crystal Chess Contributors <https://github.com/orgs/crystal-chess/people>
 *
 * @link <https://github.com/crystal-chess/hasher> Crystal Hasher.
 */

namespace CrystalChess;

/**
 * The hasher interface.
 */
interface HasherInterface
{
    /**
     * Set the hasher options.
     *
     * @param array $options The hasher options.
     *
     * @return self Returns this class.
     */
    public function setOptions(array $options = []): HasherInterface

    /**
     * Create a new hasher instance.
     *
     * @param array $options The hasher options.
     *
     * @return void Returns nothing.
     */
    public function __construct(array $options = []);

    /**
     * Create a hash.
     *
     * @param string $text The text to hash.
     *
     * @return string The hashed text.
     */
    public function create(string $text): string;

    /**
     * Verify the text matches the hash.
     *
     * @param string $text The text to check.
     * @param string $hash the hash to check against.
     *
     * @return bool Returns true if the match and false if not.
     */
    public function verify(string $text, string $hash): bool;
}
