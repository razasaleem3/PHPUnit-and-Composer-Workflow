<?php
require_once (__DIR__.'/../app/libraries/Checkout.php');
use App\Libraries\Checkout;

/**
 * Created by PhpStorm.
 * User: Developer4
 * Date: 10/31/2016
 * Time: 8:05 PM
 */
// add comment to test pull request done
class CheckoutTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->checkout = new Checkout;
    }
    public function testCanAddNumbers()
    {//int/brand/givenchy/158890-five-shark-black-stainless-steel-watch/p2729314/
        $this->assertEquals("Item Successfully Added", $this->checkout->add("int","brand","givenchy","158890-five-shark-black-stainless-steel-watch","p2729314"));
//        $this->assertEquals("Domain Not Available", $this->checkout->add("uk","brand","givenchy","158890-five-shark-black-stainless-steel-watch","p2729314"));
//        $this->assertEquals("category Not exists", $this->checkout->add("int","mens-all-clothing-jeans","givenchy","158890-five-shark-black-stainless-steel-watch","p2729314"));
//        $this->assertEquals("Brand Not Exists", $this->checkout->add("int","brand","CK","158890-five-shark-black-stainless-steel-watch","p2729314"));
//        $this->assertEquals("Item Successfully Added", $this->checkout->add("int","brand","givenchy","158890-watch","p2729314"));
//        $this->assertEquals("Item Number Not Exists", $this->checkout->add("int","brand","givenchy","158890-five-shark-black-stainless-steel-watch","p27293"));

    }
}

