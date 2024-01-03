<?php

namespace App\Enums;

enum AdminSubstatus: string
{
    case Editor = 'Editor';
    case Moderator = 'Moderator';
    case SuperAdmin = 'Super Admin';
}
