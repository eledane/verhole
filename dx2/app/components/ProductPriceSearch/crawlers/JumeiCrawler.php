<?php

class JumeiCrawler extends BaseCrawler implements ICrawler
{
    protected $priceRegexes = array(
      '#price:\s*"([^"]+)"#i',
      '#price="([^"]+)"#i',
    );

    protected $nameSelectors = array(
      '.subpage_menu_l span:nth-last-child(1)',
      '.deal_con_content table tr:nth-of-type(1) td:nth-of-type(2) span',
    );

    protected $imageSelectors = array(
      '#detail_main_img',
      '#deal_img',
    );

    protected $categorySelectors = array(
      '.subpage_menu_l a:nth-last-of-type(1)',
      '.deal_con_content table tr:nth-of-type(4) td:nth-of-type(2) span',
    );

    public function parsePrice()
    {
        $html = $this->crawler->html();

        foreach ($this->priceRegexes as $priceRegex) {
            if (preg_match($priceRegex, $html, $matches)) {
                if (isset($matches[1]) && $matches[1] !== '') {
                    return $matches[1];
                }
            }
        }

        return NULL;
    }

    protected function parseImage()
    {

        foreach ($this->imageSelectors as $imageSelector) {
            $result = $this->crawler->filter($imageSelector);
            if ($result->count() > 0) {
                return $result;
            }
        }
        return NULL;

    }

    protected function parseName()
    {
        foreach ($this->nameSelectors as $nameSelector) {
            $result = $this->crawler->filter($nameSelector);
            if ($result->count() > 0) {
                return $result->text();
            }
        }
        return NULL;

    }

    protected function parseCategory()
    {
        foreach ($this->categorySelectors as $categorySelector) {
            $result = $this->crawler->filter($categorySelector);
            if ($result->count() > 0) {
                return $result->text();
            }
        }
        return NULL;
    }

}
