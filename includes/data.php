<?php
// Adishakti Furnitures - Data Functions
// Contains all product data and helper functions

function getProductsData() {
    return [
        // Living Room Category
        [
            'id' => 1,
            'name' => 'SOFA CORNER',
            'category' => 'Living Room',
            'image' => 'assets/images/sofa-corner.webp',
            'description' => 'Premium corner sofa with comfortable seating',
            'dimensions' => 'L 250cm x W 180cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 2,
            'name' => 'SOFA 3+1+1',
            'category' => 'Living Room',
            'image' => 'assets/images/sofa-3-1-1.webp',
            'description' => 'Complete sofa set with 3-seater and 2 single chairs',
            'dimensions' => '3-Seater: L 210cm x W 90cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'New'
        ],
        [
            'id' => 3,
            'name' => 'WOODEN SOFA',
            'category' => 'Living Room',
            'image' => 'assets/images/wooden-sofa.webp',
            'description' => 'Traditional wooden sofa with elegant design',
            'dimensions' => 'L 200cm x W 85cm x H 90cm',
            'material' => 'Sheesham Wood'
        ],
        [
            'id' => 4,
            'name' => 'WOODEN L SHAPE SOFA',
            'category' => 'Living Room',
            'image' => 'assets/images/wooden-l-sofa.webp',
            'description' => 'L-shaped wooden sofa perfect for corners',
            'dimensions' => 'L 240cm x W 160cm x H 85cm',
            'material' => 'Teak Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 5,
            'name' => 'WOODEN SOFA CUSHION',
            'category' => 'Living Room',
            'image' => 'assets/images/wooden-sofa-cushion.webp',
            'description' => 'Comfortable cushioned wooden sofa',
            'dimensions' => 'L 190cm x W 80cm x H 85cm',
            'material' => 'Wood Frame with Premium Cushions'
        ],
        [
            'id' => 6,
            'name' => 'WINGS CHAIR',
            'category' => 'Living Room',
            'image' => 'assets/images/wings-chair.webp',
            'description' => 'Elegant wing chair with high back support',
            'dimensions' => 'L 80cm x W 75cm x H 110cm',
            'material' => 'Fabric & Solid Wood Frame'
        ],
        [
            'id' => 7,
            'name' => 'RECLINERS',
            'category' => 'Living Room',
            'image' => 'assets/images/recliners.webp',
            'description' => 'Comfortable reclining chair for relaxation',
            'dimensions' => 'L 85cm x W 90cm x H 105cm',
            'material' => 'Leather & Metal Frame',
            'badge' => 'New'
        ],
        [
            'id' => 8,
            'name' => 'ROCKING CHAIR',
            'category' => 'Living Room',
            'image' => 'assets/images/rocking-chair.webp',
            'description' => 'Traditional wooden rocking chair',
            'dimensions' => 'L 70cm x W 85cm x H 100cm',
            'material' => 'Solid Wood'
        ],

        // Bedroom Category
        [
            'id' => 9,
            'name' => 'WOODEN COTS',
            'category' => 'Bedroom',
            'image' => 'assets/images/wooden-cots.webp',
            'description' => 'Handcrafted wooden bed with elegant design',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Sheesham Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 10,
            'name' => 'STORAGE COTS',
            'category' => 'Bedroom',
            'image' => 'assets/images/storage-cots.webp',
            'description' => 'Wooden bed with built-in storage compartments',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Engineered Wood with Storage',
            'badge' => 'New'
        ],
        [
            'id' => 11,
            'name' => 'WARDROBE',
            'category' => 'Bedroom',
            'image' => 'assets/images/wardobe.webp',
            'description' => 'Spacious wardrobe with multiple compartments',
            'dimensions' => 'L 180cm x W 60cm x H 210cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 12,
            'name' => 'DRESSING TABLE',
            'category' => 'Bedroom',
            'image' => 'assets/images/dressing-table.webp',
            'description' => 'Elegant dressing table with mirror and drawers',
            'dimensions' => 'L 120cm x W 45cm x H 160cm',
            'material' => 'Solid Wood with Mirror'
        ],

        // Dining Category
        [
            'id' => 13,
            'name' => 'DINING TABLES',
            'category' => 'Dining',
            'image' => 'assets/images/dining-table.webp',
            'description' => 'Premium wooden dining table for family gatherings',
            'dimensions' => 'L 180cm x W 90cm x H 75cm',
            'material' => 'Mango Wood',
            'badge' => 'Bestseller'
        ],

        // Mattresses Category
        [
            'id' => 14,
            'name' => 'MATTRESS',
            'category' => 'Mattresses',
            'image' => 'assets/images/mattress.webp',
            'description' => 'Orthopedic memory foam mattress for better sleep',
            'dimensions' => 'L 200cm x W 180cm x H 20cm',
            'material' => 'Memory Foam',
            'badge' => 'New'
        ],
        [
            'id' => 15,
            'name' => 'PILLOWS',
            'category' => 'Mattresses',
            'image' => 'assets/images/pillow.webp',
            'description' => 'Comfortable pillows for perfect sleep',
            'dimensions' => 'L 70cm x W 45cm x H 15cm',
            'material' => 'Memory Foam & Cotton Cover'
        ],

        // Home Office Category
        [
            'id' => 16,
            'name' => 'OFFICE CHAIR',
            'category' => 'Home Office',
            'image' => 'assets/images/office-chair.webp',
            'description' => 'Ergonomic office chair for comfortable work',
            'dimensions' => 'L 65cm x W 65cm x H 110cm',
            'material' => 'Mesh & Metal Frame',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 17,
            'name' => 'COMPUTER TABLE',
            'category' => 'Home Office',
            'image' => 'assets/images/computer-table.webp',
            'description' => 'Modern computer table with cable management',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 18,
            'name' => 'STUDY TABLE',
            'category' => 'Home Office',
            'image' => 'assets/images/study-table.webp',
            'description' => 'Spacious study table with storage drawers',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Solid Wood'
        ],
        [
            'id' => 19,
            'name' => 'BOSS CHAIRS',
            'category' => 'Home Office',
            'image' => 'assets/images/boss-chair.webp',
            'description' => 'Executive boss chair with premium leather',
            'dimensions' => 'L 70cm x W 70cm x H 120cm',
            'material' => 'Leather & Metal Frame',
            'badge' => 'New'
        ],

        // Home Decor Category
        [
            'id' => 20,
            'name' => 'POOJA MANTAPA',
            'category' => 'Home Decor',
            'image' => 'assets/images/pooja-mantapa.webp',
            'description' => 'Traditional wooden pooja mantapa for worship',
            'dimensions' => 'L 90cm x W 45cm x H 150cm',
            'material' => 'Teak Wood with Carvings',
            'badge' => 'Limited'
        ]
    ];
}

function getCategoriesData() {
    return ['Living Room', 'Bedroom', 'Dining', 'Mattresses', 'Home Office', 'Home Decor'];
}

function getFeaturedProducts() {
    return [
        [
            'name' => 'Modern Living Collection',
            'image' => 'assets/images/carousal-image-living-room.webp',

            'description' => 'Elegant comfort for your space'
        ],
        [
            'name' => 'Luxury Bedroom Sets',
            'image' => 'assets/images/carousal-image-bedroom.webp',
            'description' => 'Where dreams meet design'
        ],
        [
            'name' => 'Dining Excellence',
            'image' => 'assets/images/carousal-image-dining-room.webp',
            'description' => 'Gather in style'
        ]
    ];
}

function getGalleryCategoriesData() {
    return ['All', 'Living Room', 'Bedroom', 'Dining', 'Mattresses', 'Home Office', 'Home Decor'];
}
?>