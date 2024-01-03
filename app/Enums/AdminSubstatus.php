<?php

namespace App\Enums;

enum ClientSubstatus: string
{
    case Editor = 'Editor';
    case Moderator = 'Moderator';
    case SuperAdmin = 'Super Admin';
}
