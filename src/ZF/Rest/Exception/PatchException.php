<?php
/**
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2-Clause
 */

namespace ZF\Rest\Exception;

/**
 * Throw this exception from a "patch" resource listener in order to indicate
 * an inability to patch an item and automatically report it.
 */
class PatchException extends DomainException
{
}