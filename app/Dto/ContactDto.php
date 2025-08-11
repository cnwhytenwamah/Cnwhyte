<?php

namespace App\Dto;

use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class ContactDto
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $name,
        public string $email,
        public ?string $phone,
        public string $message
    ){}

    public function toArray():array
    {
        return $this->extractToArray([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ]);
    }

    public static function FormData(ContactFormRequest $request):Contact
    {
        return new self(
            name: $request->validated(key: 'name'),
            email: $request->validated(key: 'email'),
            phone: $request->validated(key: 'phone'),
            message: $request->validated(key: 'message')
        );
    }
}
