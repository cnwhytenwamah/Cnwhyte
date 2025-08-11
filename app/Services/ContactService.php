<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\Interface\ContactRepositoryInterface;

class ContactService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected ContactRepositoryInterface $contactRepository
    ){}

    
}
