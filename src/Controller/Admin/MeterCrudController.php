<?php

namespace App\Controller\Admin;

use App\Entity\Meter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Meter::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
