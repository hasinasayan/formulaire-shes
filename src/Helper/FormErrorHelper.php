<?php


namespace App\Helper;


use Symfony\Component\Form\FormInterface;

class FormErrorHelper
{
    /**
     * @param FormInterface $form
     * @return array<string, string>
     */
    public static function getAllErrorMessages(FormInterface $form) : array
    {
        $iterator = $form->getErrors(true);
        $errors = [];
        foreach ($iterator as $formError) {
            $origin = $formError->getOrigin();
            $errors[$origin->getName()] = $formError->getMessage();
        }

        return $errors;
    }

    public static function format(array $inputs) : array
    {
        $output = [];

        foreach ($inputs as $key => $value) {
            $output[$key] = [
                'message' => $value
            ];
        }

        return $output;
    }
}