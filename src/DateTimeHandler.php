<?php

namespace Garry\GarryDateTimeHandler;

// Check if accessed directly
// if (!defined('ACCESS_ALLOWED')) {
//     http_response_code(403);
//     exit('Direct access not allowed.');
// }

class DateTimeHandler
{
    public function getCurrentDateTime()
    {
        return date('Y-m-d H:i:s');
    }
}
