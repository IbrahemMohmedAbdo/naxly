<?php
namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Service::class);
    }
}
