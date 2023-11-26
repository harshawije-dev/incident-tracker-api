<?php

enum Status: string
{
    case UNREAD = 'Unread';
    case OPEN = 'Open';
    case PROGRESS = 'On-Progress';
    case CLOSED = 'Closed';
}

return [
    'ticket_status' => Status::class,
];
