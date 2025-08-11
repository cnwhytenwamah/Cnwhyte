<?php

namespace App\Repositories\Eloquents;

use App\Models\Contact;
use App\Repositories\Interface\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected Contact $model
    ){}

    public function create(array $data):?Contact
    {
        return $this->model->create($data);
    }
}
