<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    use UserTrait, HtmlPageTrait;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @BeforeSuite
     */
    public static function initialize()
    {
        Artisan::call('migrate');
    }

    /**
     * @BeforeScenario
     */
    public static function beforeScenario()
    {
//        DB::beginTransaction();
    }

    public static function afterScenario()
    {
//        DB::rollBack();
    }
}
