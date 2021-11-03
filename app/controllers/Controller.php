<?php

namespace app\controllers;

use Latte\Engine;
use Transliterator;


/**
 * Class Controller
 * @package app\controllers
 */
abstract class Controller
{
    /**
     * @var array $data
     */
    protected array $data = [];

    /**
     * @var string $view
     */
    protected string $view = "";

    /**
     * @var array $head
     */
    protected array $head = ['page_title' => '', 'page_keywords' => '', 'page_description' => ''];

    /**
     * @var string $controllerName
     */
    public string $controllerName;

    /**
     * @var Engine $latte
     * Variable for class Latte\Engine object
     */
    private Engine $latte;

    public function __construct()
    {
        $this->latte = new Engine();
        $this->latte->addFilter("convertCountry", function ($countryCode) {
            switch ($countryCode) {
                case "CZE":
                    return "Česká republika";
                case "SVK":
                    return "Slovensko";
                case "AUT":
                    return "Rakousko";
                case "DEU":
                    return "Německo";
                case "POL":
                    return "Polsko";
                default:
                    return $countryCode;
            }
        });
    }

    /**
     * Definition of process function for inheritance
     * @param array $params
     * Main url parameters
     * @param array|null $gets
     * Get parameters from url
     */
    abstract function process(array $params, array $gets = null);

    /**
     * Renders selected view
     * @return void
     */
    public function writeView(): void
    {
        if ($this->view) {
            $this->view = __DIR__ . "/../../app/views/" . $this->controllerName . "/" . $this->view . ".latte";
            $params = array_merge($this->head, $this->data);
            $this->latte->render($this->view, $params);
        }
    }


    /**
     * Sets value of $this->$view and sets css and js variables
     * @param string $view
     * View name
     * @return void
     */
    public function setView(string $view): void
    {
        $this->view = $view;

    }

    /**
     * View getter
     * @return string|null
     */
    public function getView(): ?string
    {
        return $this->view;
    }

    /**
     * Convert standard names to dash-based style
     * @param string $argument
     * @return string
     */
    public function basicToDash(string $argument): string
    {
        return preg_replace("[\W+]", "-", $argument);
    }
}
