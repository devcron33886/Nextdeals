<?php

return [
    'userManagement' => [
        'title' => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'permissions' => 'Permissions',
            'permissions_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'email_verified_at' => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password' => 'Password',
            'password_helper' => ' ',
            'roles' => 'Roles',
            'roles_helper' => ' ',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
            'two_factor' => 'Two-Factor Auth',
            'two_factor_helper' => ' ',
            'two_factor_code' => 'Two-factor code',
            'two_factor_code_helper' => ' ',
            'two_factor_expires_at' => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
            'approved' => 'Approved',
            'approved_helper' => ' ',
            'verified' => 'Verified',
            'verified_helper' => ' ',
            'verified_at' => 'Verified at',
            'verified_at_helper' => ' ',
            'verification_token' => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'productManagement' => [
        'title' => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory' => [
        'title' => 'Categories',
        'title_singular' => 'Category',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'description' => 'Description',
            'description_helper' => ' ',
            'photo' => 'Photo',
            'photo_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productTag' => [
        'title' => 'Tags',
        'title_singular' => 'Tag',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
        ],
    ],
    'product' => [
        'title' => 'Products',
        'title_singular' => 'Product',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'description' => 'Description',
            'description_helper' => ' ',
            'price' => 'Price',
            'price_helper' => ' ',
            'category' => 'Categories',
            'category_helper' => ' ',
            'tag' => 'Tags',
            'tag_helper' => ' ',
            'photo' => 'Photo',
            'photo_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'location' => 'Location',
            'location_helper' => ' ',
        ],
    ],
    'location' => [
        'title' => 'Location',
        'title_singular' => 'Location',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order' => [
        'title' => 'Order',
        'title_singular' => 'Order',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'email' => 'Customer email',
            'email_helper' => ' ',
            'subtotal' => 'Amount',
            'subtotal_helper' => ' ',
            'status' => 'Order Status',
            'status_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'shippingType' => [
        'title' => 'Shipping Type',
        'title_singular' => 'Shipping Type',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Shipping Title',
            'title_helper' => ' ',
            'price' => 'Shipping Price',
            'price_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'paymentMethod' => [
        'title' => 'Payment Method',
        'title_singular' => 'Payment Method',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'stock' => [
        'title' => 'Stock',
        'title_singular' => 'Stock',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'product' => 'Product',
            'product_helper' => ' ',
            'amount' => 'Stock Quantity',
            'amount_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'vendor' => [
        'title' => 'Vendors',
        'title_singular' => 'Vendor',
    ],
    'profile' => [
        'title' => 'Profiles',
        'title_singular' => 'Profile',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'is_verified' => 'Is Verified',
            'is_verified_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
