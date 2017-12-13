<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/24/2017
 * Time: 2:54 PM
 */

namespace AppBundle;


class MySerializer
{
    public static function serialize($object,$objName) {
        $methods=get_class_methods($objName);
        
        $str="{";
        foreach ($methods as $value) {
            if(substr($value,0,3)==='get'){
                is_numeric($object->{$value}())?
                $str.= '"'.lcfirst(ltrim($value,'get')).'":'.$object->{$value}().',':
                $str.= '"'.lcfirst(ltrim($value,'get')).'":"'.$object->{$value}().'",';
            }
        }
        $str=rtrim($str,",");
        $str.= "}";
        echo $str;
    }
    
    public static function deserialize($data, $objName)
    {
        $createdObject = new $objName();
        $arr = json_decode($data);
        foreach ($arr as $key => $value) {
            $createdObject->{'set'.ucfirst($key)}($value);
        }
        
        return $createdObject;
        
    }
}