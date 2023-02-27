<?php

namespace Cornatul\Feeds\DTO;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Normalizers\ModelNormalizer;

/**
 * @package Cornatu\Feeds\DTO
 * @class SentimentDto
 *
 */
class SentimentDto extends Data
{
    public string $title;
    public ?string $date;
    public string $text;
    public string $html;
    public string $markdown;
    public string $banner;
    public string $summary;
    public ?array $authors;
    public ?array $keywords;
    public ?array $images;
    public ?array $entities;
    public ?array $sentiment;
}