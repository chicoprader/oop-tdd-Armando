<?php

namespace App;

interface Notificable
{
    public function notify(object $subject);
}
