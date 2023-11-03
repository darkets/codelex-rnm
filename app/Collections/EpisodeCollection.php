<?php

namespace App\Collections;

use App\Models\Episode;

class EpisodeCollection
{
    private array $episodes = [];

    public function add(Episode $episode): void
    {
        $this->episodes[] = $episode;
    }

    public function get(): array
    {
        return $this->episodes;
    }

    public function getEpisodeId(string $episodeSeasonId): ?int
    {
        foreach($this->get() as $episode) {
            /** @var Episode $episode */
            if ($episode->getEpisode() === $episodeSeasonId) {
                return $episode->getId();
            }
        }

        return null;
    }
}