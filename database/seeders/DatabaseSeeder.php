<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $companies = [
            [
                'company_id' => 1,
                'name' => 'Tech Innovators',
                'email' => 'contact@techinnovators.com',
                'description' => 'A leading tech company focused on innovative solutions.',
                'logo' => 'path/to/logo1.png',
                'website' => 'https://www.techinnovators.com'
            ],
            [
                'company_id' => 2,
                'name' => 'Creative Solutions',
                'email' => 'info@creativesolutions.com',
                'description' => 'Experts in creative design and branding.',
                'logo' => 'path/to/logo2.png',
                'website' => 'https://www.creativesolutions.com'
            ],
            [
                'company_id' => 3,
                'name' => 'Green Energy Inc.',
                'email' => 'support@greenenergy.com',
                'description' => 'Sustainable energy solutions for a greener future.',
                'logo' => 'path/to/logo3.png',
                'website' => 'https://www.greenenergy.com'
            ],
            [
                'company_id' => 4,
                'name' => 'Digital Hub',
                'email' => 'contact@digitalhub.com',
                'description' => 'Transforming businesses with digital tools and strategies.',
                'logo' => 'path/to/logo4.png',
                'website' => 'https://www.digitalhub.com'
            ],
            [
                'company_id' => 5,
                'name' => 'HealthTech Solutions',
                'email' => 'service@healthtech.com',
                'description' => 'Innovative healthcare solutions powered by technology.',
                'logo' => 'path/to/logo5.png',
                'website' => 'https://www.healthtech.com'
            ]
        ];

        $tags = [
            ['name' => 'efficient production'],
            ['name' => 'innovative solutions'],
            ['name' => 'smart investments'],
            ['name' => 'quality care'],
            ['name' => 'learning for the future'],
            ['name' => 'customer-centric approach'],
            ['name' => 'reliable logistics'],
            ['name' => 'sustainable growth'],
            ['name' => 'data-driven decisions'],
            ['name' => 'strategic partnerships'],
            ['name' => 'advanced automation'],
            ['name' => 'seamless integration'],
            ['name' => 'cloud transformation'],
            ['name' => 'business agility'],
            ['name' => 'AI-powered insights'],
            ['name' => 'market leadership'],
            ['name' => 'supply chain optimization'],
            ['name' => 'employee engagement'],
            ['name' => 'digital transformation'],
            ['name' => 'cybersecurity resilience'],
            ['name' => 'customer satisfaction'],
            ['name' => 'brand loyalty'],
            ['name' => 'financial stability'],
            ['name' => 'operational efficiency'],
            ['name' => 'cost reduction'],
            ['name' => 'scalable solutions'],
            ['name' => 'real-time analytics'],
            ['name' => 'blockchain security'],
            ['name' => 'energy efficiency'],
            ['name' => 'eco-friendly practices'],
            ['name' => 'cloud computing'],
            ['name' => 'business intelligence'],
            ['name' => 'remote collaboration'],
            ['name' => '5G connectivity'],
            ['name' => 'agile methodology'],
            ['name' => 'personalized experiences'],
            ['name' => 'predictive analytics'],
            ['name' => 'machine learning'],
            ['name' => 'continuous improvement'],
            ['name' => 'risk management'],
            ['name' => 'customer retention'],
            ['name' => 'business continuity'],
            ['name' => 'lean management'],
            ['name' => 'workflow automation'],
            ['name' => 'compliance assurance'],
            ['name' => 'cognitive computing'],
            ['name' => 'HR digitalization'],
            ['name' => 'IoT innovation'],
            ['name' => 'product lifecycle management'],
            ['name' => 'cross-functional collaboration']
        ];


    }
}
