<?php

namespace App\Controller\Admin;

use App\Entity\Meter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class MeterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Meter::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('url'),
            IntegerField::new('time'),
            BooleanField::new('active'),
        ];
    }
}
