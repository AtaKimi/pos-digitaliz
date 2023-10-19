<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    #[Description('Canceled')]
    const CANCELED = 1;
    #[Description('Pending')]
    const PENDING = 2;
    #[Description('Cooking')]
    const COOKING = 3;
    #[Description('Serving')]
    const SERVING = 4;
    #[Description('Done')]
    CONST DONE = 5;
}
