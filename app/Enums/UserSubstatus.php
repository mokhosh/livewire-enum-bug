<?php

namespace App\Enums;

enum UserSubstatus: string
{
    case Unverified = 'Unverified';
    case Verified = 'Verified';
    case VIP = 'VIP';
}
