<?php

namespace Template\Domain\Company\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Template\Domain\Company\Models\Company;
use Template\Domain\Users\Models\User;

class CompanyUserLogin
{
    use Dispatchable, SerializesModels;

    /**
     * @var User
     */
    public $user;

    /**
     * @var Company
     */
    public $company;

    /**
     * Create a new event instance.
     *
     * @param User $user
     * @param Company $company
     */
    public function __construct(User $user, Company $company)
    {
        $this->user = $user;
        $this->company = $company;
    }
}
