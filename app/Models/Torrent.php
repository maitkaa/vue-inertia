<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torrent extends Model
{
    private $id = 0;
    private $hash = '';
    private $fileName = '';
    private $episodeUrl = '';
    private $torrentUrl = '';
    private $magnetUrl = '';
    private $title = '';
    private $imdbId = '';
    private $season = '';
    private $episode = '';
    private $smallScreen = '';
    private $largeScreen = '';
    private $seeds = 0;
    private $peers = 0;
    private $releaseDateUnix = '';
    private $size = 0;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getEpisodeUrl(): string
    {
        return $this->episodeUrl;
    }

    /**
     * @param string $episodeUrl
     */
    public function setEpisodeUrl(string $episodeUrl): void
    {
        $this->episodeUrl = $episodeUrl;
    }

    /**
     * @return string
     */
    public function getTorrentUrl(): string
    {
        return $this->torrentUrl;
    }

    /**
     * @param string $torrentUrl
     */
    public function setTorrentUrl(string $torrentUrl): void
    {
        $this->torrentUrl = $torrentUrl;
    }

    /**
     * @return string
     */
    public function getMagnetUrl(): string
    {
        return $this->magnetUrl;
    }

    /**
     * @param string $magnetUrl
     */
    public function setMagnetUrl(string $magnetUrl): void
    {
        $this->magnetUrl = $magnetUrl;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getImdbId(): string
    {
        return $this->imdbId;
    }

    /**
     * @param string $imdbId
     */
    public function setImdbId(string $imdbId): void
    {
        $this->imdbId = $imdbId;
    }

    /**
     * @return string
     */
    public function getSeason(): string
    {
        return $this->season;
    }

    /**
     * @param string $season
     */
    public function setSeason(string $season): void
    {
        $this->season = $season;
    }

    /**
     * @return string
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * @param string $episode
     */
    public function setEpisode(string $episode): void
    {
        $this->episode = $episode;
    }

    /**
     * @return string
     */
    public function getSmallScreen(): string
    {
        return $this->smallScreen;
    }

    /**
     * @param string $smallScreen
     */
    public function setSmallScreen(string $smallScreen): void
    {
        $this->smallScreen = $smallScreen;
    }

    /**
     * @return string
     */
    public function getLargeScreen(): string
    {
        return $this->largeScreen;
    }

    /**
     * @param string $largeScreen
     */
    public function setLargeScreen(string $largeScreen): void
    {
        $this->largeScreen = $largeScreen;
    }

    /**
     * @return int
     */
    public function getSeeds(): int
    {
        return $this->seeds;
    }

    /**
     * @param int $seeds
     */
    public function setSeeds(int $seeds): void
    {
        $this->seeds = $seeds;
    }

    /**
     * @return int
     */
    public function getPeers(): int
    {
        return $this->peers;
    }

    /**
     * @param int $peers
     */
    public function setPeers(int $peers): void
    {
        $this->peers = $peers;
    }

    /**
     * @return string
     */
    public function getReleaseDateUnix(): string
    {
        return $this->releaseDateUnix;
    }

    /**
     * @param string $releaseDateUnix
     */
    public function setReleaseDateUnix(string $releaseDateUnix): void
    {
        $this->releaseDateUnix = $releaseDateUnix;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }


}
