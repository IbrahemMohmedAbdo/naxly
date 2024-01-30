<?php
namespace App\Repositories;

use App\Models\Cases;
use App\Repositories\BaseRepository;

class CasesRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Cases::class);
    }
}
