<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name        = "Yerman's Factory";
        $company->rfc         = "XAXX010101000";
        $company->logo        = "logo_yermans_factory.jpg";
        $company->description = "Yerman's Factory is a new company, with an important social vision, ready to create opportunities for everyone.";
        $company->email       = "yermans@gmail.com";
        $company->save();

        $company = new Company();
        $company->name        = "Wens S.A.S";
        $company->rfc         = "XAXX010101000";
        $company->logo        = "logo_wens_sas.jpg";
        $company->description = "Quality and commitment is what sets us apart from the rest. The customer comes first for us.";
        $company->email       = "wens@gmail.com";
        $company->save();
    }
}
