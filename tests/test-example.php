<?php

class Example_Test extends WP_UnitTestCase {

    function test_it_works() {
        $this->assertTrue( function_exists( 'do_action' ) );
    }

    function test_wp_phpunit_is_loaded_via_composer() {
        $this->assertStringStartsWith(
            dirname( __DIR__ ) . '/vendor/',
            getenv( 'WP_PHPUNIT__DIR' )
        );

        $this->assertStringStartsWith(
            dirname( __DIR__ ) . '/vendor/',
            ( new ReflectionClass( 'WP_UnitTestCase' ) )->getFileName()
        );
    }
}