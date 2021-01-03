<?php

namespace Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private $twig;

    public function __construct($template, $data)
    {
        $this->template = $template;
        $this->data = $data;

        $this->load($template);

    }

    public static function render($template, $data = []): View
    {
        return new self($template, $data);
    }

    public function load($template)
    {

        try {

            $loader = new FilesystemLoader(TEMPLATE_PATH);
            $twig = new Environment($loader);

            echo $twig->render($template . '.html.twig', $this->data);

        } catch (Exception $e) {
            throw new \Error("Template [ $template ] couldn't be loaded.");
        }
    }

}
