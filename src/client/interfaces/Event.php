<?php

namespace mirolabs\redcart\client\interfaces;


interface Event
{
    function notify($eventName, $message);
}