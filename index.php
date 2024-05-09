<?php

// connect to WooCommerce
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$consumer_key = 'ck_03dca8aaa2c9ba286b414c52f6727ef366215085';
$consumer_secret = 'cs_760668f59b3bd7932061db5a166435c4f4e74879';

$woocommerce = new Client(
  'http://localhost/18forlove/',
  $consumer_key,
  $consumer_secret,
  [
    'version' => 'wc/v3',
  ]
);
// Create a simple product
$data = [
    'name' => 'Upload Product using REST API by Hoàng Minh Hưng - 21520887',
    'type' => 'T-shirt',
    'regular_price' => '8,87',
    'description' => 'Even if you love me to death now, i would still be broken.',
    'short_description' => 'This product was uploaded by HMH.',
    'categories' => [
        [
            'id' => 10
        ],
        [
            'id' => 10
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];
// Retrieve(Read) the product having ID 448
print_r($woocommerce->get('products/448'));

// Update the product having ID 445
$data = [
    'regular_price' => '80,87'
];

print_r($woocommerce->put('products/445', $data));

// Delete the product having ID 000
// print_r($woocommerce->delete('products/000', ['force' => true]));
?>