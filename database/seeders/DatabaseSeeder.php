<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Product::factory()->create([
            'name' => 'Sacha Inchi Oil',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB3fap6X4ERGXVkhw1MTbnivMBIy4IrMdtNNQd41yXIsjOCOK-FdhQCEOtA_xIuWmDgIj7Ltv39o9XORUX88GrAJW4CSXiAHp1EEUnMaSwtX8nJFNs1xE4w5q6rvnPVd5B2EShMw8BkUXx8cctEJaPcxbpc9a6THeJIcGQtHk8CwJ2KwHdMdlyJqDzn9A_X_-Ap2jDyDAwbjp6mRfifvaaZ4No6xIG3TV-gabnJVW7I-RKI8PNiYHcJrCN1RuriFZ_jHqjJnZ_dIttn'
        ]);
        Product::factory()->create([
            'name' => 'Sacha Inchi Seeds',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAKnah2IcgO9x3y9TxKoU6MLfWQeZPraYZo7yaa5c_c1RS6xRrBCoGmpKl915D1C51LzZCmXh-SdjF6gVeQw6kmy5cQkr5WHA6fRjoDSVZ8ft5Gxq7IG4HFrSoeWniVUVfZm0NGY9mLsTUtE40WnxVKcfU-K_4kwc4Rk4Pk9yfpt9YPwwvB1wlWGsK7QJKcKIrRGX6r-eY1Ezq7xa5TXGQ-20yGVsC0tRlkPJB19pKollnDKLDK-XgMXahc7VQCTPod-LkBb5nVlQuL'
        ]);
        Product::factory()->create([
            'name' => 'Sacha Inchi Powder',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCMMPeuKBEp1Ao6gnCPaztA2e2raRlq_iVt6FsVc7Rqr21tDQESo2hdFeBfQ1_lJxj6J1QrjyjIB9cq-ttaHmnI5OCiZcJa6Tr4mklY3AjlHF8hF1CtBaRZBB3l85ZTthfFVhqkvKA29G--PlXfw_ZWbK3tBaGcSSxa4KlSoZSoQ3sQ51A9d5J06d79bBpSqvu-XdBmYAoifaRgTbSKezT_9Ts3L_DUIxWOeT7eMoaBxfjqytcQNvB0Lv3AsR1izK7xYK3lvJfnk79A'
        ]);
        Product::factory()->create([
            'name' => 'Sacha Inchi Capsules',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBOdOz6RVin23EdXSZ2bmqB2NpLpekMUw67br2wP0trg87JJVDiyumNCvaNSOoAY3s-hUWhlzsn1YGLHNcLAya7R9NddTXVIveWr0bxGvITCc0GccX0_6BVa43atLfmLC2RTAthcxeYi_HseRn8MxaRH0fzTQTixSaklFLnuFPhbePbou1faWYV168xrLJG8BmU4WagRsfhlET8fCZAw4Y0QVsYIsRbv_Z9pP15LdaPTTmbNeq_gaTIlIeQtAcImm4Wf74-smWSey6k'
        ]);
        Product::factory()->create([
            'name' => 'Sacha Inchi Tea',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDjTnMZETv3LTL-KEb5M_ODLqbybnli-bxO-pJ2XpM81FFxoKMEyJdip7lltSbDmQStZg2brTNbfF3G2IW-950myOarJfhBuuq8aCEOpRnaary1mN-MOM5V_f4tjqxXzDecoxtPqziL2E_5jTLFbM0gb7-xdF3C7C0jH0yuIi_mib7iAuFrZBjEUXsl4XGGivISchh7SZPEj4sGoK_fwJpBdVgyGO2_kxgUBWaIk6iXwXRlbY-esXKOWik75TBHBIoVyCzL1SCZ3Jza'
        ]);
        Product::factory()->create([
            'name' => 'Sacha Inchi Snacks',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAJPlGLbcQBa-wIKbP5eHswdOS3BgtvZM-8ieUgXaZmnNVq9r4T4qEpcrbdAv7iIlHRmZOHtRHeHwbELqj8uKk1X5uhTkMkJfck0SNzw2mWoS9HLpL3N91lJM-0kyjsCEWb69NuGKdu5-Un59fCYE7X9O840LVdOfII_hRDIdEpFRX8ofnaDSQcbxwbFOdrPyFJluuSjeO4JhHCpcmqLYh1rXSy6mgwDRmA7K9Bi24WV1KQ2uQLGKIOR6TpOHBZQAX1vZr54I6BS-e9'
        ]);
        User::factory()->create([
            'name' => 'Admin Ganteng',
            'email' => 'a@gmail.com',
            'password' => 'a',
            'is_admin' => true,  
        ]);
    }
}
