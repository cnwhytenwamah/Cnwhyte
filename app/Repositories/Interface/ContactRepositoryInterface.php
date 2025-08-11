<?php

namespace App\Repositories\Interface;

use App\Models\Contact;

interface ContactRepositoryInterface
{
    public function create(array $data):?Contact;
}
