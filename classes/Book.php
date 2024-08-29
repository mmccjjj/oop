<?php

class Book
{
    function __construct(
        protected string $title,
        protected string $subtitle,
        protected int $pages,
        protected string $author,
        protected int $price
    ) {}
}
