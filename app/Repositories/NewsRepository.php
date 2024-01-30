<?php
namespace App\Repositories;

use App\Models\News;
use App\Repositories\BaseRepository;

class NewsRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(News::class);
    }
}
