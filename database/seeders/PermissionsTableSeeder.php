<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'product_management_access',
            ],
            [
                'id' => 18,
                'title' => 'product_category_create',
            ],
            [
                'id' => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id' => 20,
                'title' => 'product_category_show',
            ],
            [
                'id' => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id' => 22,
                'title' => 'product_category_access',
            ],
            [
                'id' => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id' => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id' => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id' => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id' => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id' => 28,
                'title' => 'product_create',
            ],
            [
                'id' => 29,
                'title' => 'product_edit',
            ],
            [
                'id' => 30,
                'title' => 'product_show',
            ],
            [
                'id' => 31,
                'title' => 'product_delete',
            ],
            [
                'id' => 32,
                'title' => 'product_access',
            ],
            [
                'id' => 33,
                'title' => 'location_create',
            ],
            [
                'id' => 34,
                'title' => 'location_edit',
            ],
            [
                'id' => 35,
                'title' => 'location_show',
            ],
            [
                'id' => 36,
                'title' => 'location_delete',
            ],
            [
                'id' => 37,
                'title' => 'location_access',
            ],
            [
                'id' => 38,
                'title' => 'order_create',
            ],
            [
                'id' => 39,
                'title' => 'order_edit',
            ],
            [
                'id' => 40,
                'title' => 'order_show',
            ],
            [
                'id' => 41,
                'title' => 'order_delete',
            ],
            [
                'id' => 42,
                'title' => 'order_access',
            ],
            [
                'id' => 43,
                'title' => 'shipping_type_create',
            ],
            [
                'id' => 44,
                'title' => 'shipping_type_edit',
            ],
            [
                'id' => 45,
                'title' => 'shipping_type_show',
            ],
            [
                'id' => 46,
                'title' => 'shipping_type_delete',
            ],
            [
                'id' => 47,
                'title' => 'shipping_type_access',
            ],
            [
                'id' => 48,
                'title' => 'payment_method_create',
            ],
            [
                'id' => 49,
                'title' => 'payment_method_edit',
            ],
            [
                'id' => 50,
                'title' => 'payment_method_show',
            ],
            [
                'id' => 51,
                'title' => 'payment_method_delete',
            ],
            [
                'id' => 52,
                'title' => 'payment_method_access',
            ],
            [
                'id' => 53,
                'title' => 'stock_create',
            ],
            [
                'id' => 54,
                'title' => 'stock_edit',
            ],
            [
                'id' => 55,
                'title' => 'stock_show',
            ],
            [
                'id' => 56,
                'title' => 'stock_delete',
            ],
            [
                'id' => 57,
                'title' => 'stock_access',
            ],
            [
                'id' => 58,
                'title' => 'vendor_create',
            ],
            [
                'id' => 59,
                'title' => 'vendor_edit',
            ],
            [
                'id' => 60,
                'title' => 'vendor_show',
            ],
            [
                'id' => 61,
                'title' => 'vendor_delete',
            ],
            [
                'id' => 62,
                'title' => 'vendor_access',
            ],
            [
                'id' => 63,
                'title' => 'profile_create',
            ],
            [
                'id' => 64,
                'title' => 'profile_edit',
            ],
            [
                'id' => 65,
                'title' => 'profile_show',
            ],
            [
                'id' => 66,
                'title' => 'profile_delete',
            ],
            [
                'id' => 67,
                'title' => 'profile_access',
            ],
            [
                'id' => 68,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
