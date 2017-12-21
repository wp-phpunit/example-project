<?php

class Example_Test extends WP_UnitTestCase {

    function test_it_works() {
        $this->assertTrue( function_exists( 'do_action' ) );
    }
}