<?php


class ParfumsCrawler  extends BaseCrawler implements ICrawler {

    public function parsePrice() {
        $result = $this->crawler->filter('.product-list-variants .item [itemprop="price"]');
        if ($result->count() > 0) {
            foreach ($result as $res) {
                $text = $res->textContent;
                dump($text);
                if (!empty($text)) {
                    $price = $this->formatResult($text);
                }
            }
        }
        die();
        return null;
    }

    protected function parseImage() {
        $result = $this->crawler->filter('#product-image img');
        if ($result->count() > 0) {
            return $result;
        }
        return null;

    }

    protected function parseName() {
        $result = $this->crawler->filter('h1');
        if ($result->count() > 0) {
            return $result->text();
        }
        return null;

    }

}