<?php

trait HtmlPageTrait
{

    /**
     * @Given page should contain :text
     */
    public function pageShouldContain(string $text)
    {
        if (!str_contains($this->getSession()->getPage()->getText(), $text)) {
            throw new Exception("Page do not contains text $text");
        }
    }

    /**
     * @Given page should not contain :text
     */
    public function pageShouldNotContain(string $text)
    {
        if (str_contains($this->getSession()->getPage()->getText(), $text)) {
            throw new Exception("Page contains text $text");
        }
    }
}