<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/24/2017
 * Time: 5:12 PM
 */

namespace AppBundle\Validators;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ElectronicConstraintValidator extends ConstraintValidator
{
    public function validate($electronic, Constraint $constraint)
    {
        /*if (empty($electronic->getPrice())||empty($electronic->getBrand())||empty($electronic->getModel())) {
            $this->context->buildViolation('All fields must have a value!')
                ->addViolation();
        }*/
        if (!is_numeric($electronic->getPrice())) {
            $this->context->buildViolation('Price should be numeric!')
                ->addViolation();
        }
        

    }
    
}
