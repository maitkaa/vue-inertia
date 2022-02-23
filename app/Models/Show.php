<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
   private $id = '';
   private $torrentCount = 0;
   private $limit = 0;
   private $page = 0;
   private $torrents = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getTorrentCount(): int
    {
        return $this->torrentCount;
    }

    /**
     * @param int $torrentCount
     */
    public function setTorrentCount(int $torrentCount): void
    {
        $this->torrentCount = $torrentCount;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    public function getTorrents(): array
    {
        return $this->torrents;
    }

    /**
     * @param array $torrents
     */
    public function setTorrents(array $torrents): void
    {
        $this->torrents = $torrents;
    }


}
