<?php
/**
 * Created by PhpStorm.
 * User: Developer4
 * Date: 10/31/2016
 * Time: 7:29 PM
 */

namespace App\Libraries;


class Checkout
{
    public function available_domain($domain)
    {
        if($domain=="int")
        {
            return 1;
        }
        else
        {
            return "Domain Not Available";
        }
    }
    public function available_category($category)
    {
        if($category=="brand")
        {
            return 1;
        }
        else
        {
            return "category Not exists";
        }
    }
    public function available_brandName($brandName)
    {
        if($brandName=="givenchy")
        {
            return 1;
        }
        else
        {
            return "Brand Not Exists";
        }
    }
    public function available_itemNumber($itemNumber)
    {
        if($itemNumber=="p2729314")
        {
            return 1;
        }
        else
        {
            return "Item Number Not Exists";
        }
    }
    public function add($domain, $category, $brandName, $description, $itemNumber)
    {//int/brand/givenchy/158890-five-shark-black-stainless-steel-watch/p2729314/
        if(!empty($domain))
        {
            $result = $this->available_domain($domain);
            if($result=="1") {
                if (!empty($category)) {
                    $result = $this->available_category($category);
                    if ($result=="1") {
                        if (!empty($brandName)) {
                            $result = $this->available_brandName($brandName);
                            if($result=="1") {
                                if (!empty($itemNumber)) {
                                    $result = $this->available_itemNumber($itemNumber);
                                    if ($result=="1") {
                                        return "Item Successfully Added";
                                    }
                                    else
                                    {
                                        return $result;
                                    }
                                }
                            }
                            else
                            {
                                return $result;
                            }
                        }
                    }
                    else
                    {
                        return $result;
                    }
                }
            }
            else
            {
                return $result;
            }
        }
    }
}