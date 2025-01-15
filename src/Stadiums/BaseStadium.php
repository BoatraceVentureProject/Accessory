<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author shimomo
 */
abstract class BaseStadium
{
    /**
     * @param \Symfony\Component\BrowserKit\HttpBrowser  $httpBrowser
     */
    public function __construct(protected HttpBrowser $httpBrowser){}

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  string                                 $key
     * @return array
     */
    protected function filterByKey(Crawler $crawler, string $key): array
    {
        return $crawler->filter($key)->each(fn($node) => $node->text());
    }

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  array                                  $keys
     * @return array
     */
    protected function filterByKeys(Crawler $crawler, array $keys): array
    {
        $response = [];

        foreach ($keys as $key) {
            $response[$key] = $this->filterByKey($crawler, $key);
        }

        return $response;
    }

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  string                                 $prefix
     * @return array
     */
    protected function filterByClassPrefix(Crawler $crawler, string $prefix): array
    {
        return $crawler->filterXPath('//*[starts-with(@class, \'' . ltrim($prefix, '.') . '\')]')
            ->each(fn($node) => $node->text());
    }

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  array                                  $prefixes
     * @return array
     */
    protected function filterByClassPrefixes(Crawler $crawler, array $prefixes): array
    {
        $response = [];

        foreach ($prefixes as $prefix) {
            $response[$prefix] = $this->filterByClassPrefix($crawler, $prefix);
        }

        return $response;
    }

    /**
     * @param  string  $value
     * @return string
     */
    protected function removeSpace(string $value): string
    {
        return preg_replace('/[\x00\s]++/u', '', $value);
    }

    /**
     * @param  string $value
     * @return string
     */
    protected function removeNonJapanese(string $value): string
    {
        return preg_replace('/[^\p{Hiragana}\p{Katakana}\p{Han}ー。、]/u', '', $value);
    }

    /**
     * @param  string  $value
     * @return string
     */
    protected function normalize(string $value): string
    {
        return mb_convert_kana($this->removeSpace($value), 'KVa');
    }

    /**
     * @param  array  $array
     * @return array
     */
    protected function normalizeArray(array $array): array
    {
        return array_map([$this, 'normalize'], $array);
    }
}
