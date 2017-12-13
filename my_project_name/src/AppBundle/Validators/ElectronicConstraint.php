<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/24/2017
 * Time: 5:15 PM
 */

namespace AppBundle\Validators;


use Symfony\Component\Validator\Constraint;
/**
 * @Annotation
 */
class ElectronicConstraint extends Constraint
{
    public function validatedBy()
    {
        return get_class($this).'Validator';
    }
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}