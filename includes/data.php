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
            'image' => 'https://kateandmark.in/cdn/shop/files/1couchsofaonlinesofaleathersetteeset.webp?v=1755251540&width=720',
            'description' => 'Premium corner sofa with comfortable seating',
            'dimensions' => 'L 250cm x W 180cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 2,
            'name' => 'SOFA 3+1+1',
            'category' => 'Living Room',
            'image' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR5iMnZzsJCAgf8vUeHCRaAw8LhOmvrWiMoogmSYU8GmVcH_wEHCieR6XmNSf4JctA5QnLtwwNjLGRlbyHjoIwKDxZPbSfti5k0u8VnIrOM',
            'description' => 'Complete sofa set with 3-seater and 2 single chairs',
            'dimensions' => '3-Seater: L 210cm x W 90cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'New'
        ],
        [
            'id' => 3,
            'name' => 'WOODEN SOFA',
            'category' => 'Living Room',
            'image' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQY1SGStNuUab2KKz2cFwXutYpt9QoGk2q5j8H4hPqNM3eWZ8Xm174JnZzDFtkcjbLZRfEam1zIHWcX5rpVThuONrUo8tZt5j2B2FpIDsy5',
            'description' => 'Traditional wooden sofa with elegant design',
            'dimensions' => 'L 200cm x W 85cm x H 90cm',
            'material' => 'Sheesham Wood'
        ],
        [
            'id' => 4,
            'name' => 'WOODEN L SHAPE SOFA',
            'category' => 'Living Room',
            'image' => 'https://kateandmark.in/cdn/shop/files/IMAGE_1.webp?v=1758109342&width=720',
            'description' => 'L-shaped wooden sofa perfect for corners',
            'dimensions' => 'L 240cm x W 160cm x H 85cm',
            'material' => 'Teak Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 5,
            'name' => 'WOODEN SOFA CUSHION',
            'category' => 'Living Room',
            'image' => 'https://kateandmark.in/cdn/shop/files/1_couch_for_sofa_set_sofa_l_shape_sofa.webp?v=1762321876&width=720',
            'description' => 'Comfortable cushioned wooden sofa',
            'dimensions' => 'L 190cm x W 80cm x H 85cm',
            'material' => 'Wood Frame with Premium Cushions'
        ],
        [
            'id' => 6,
            'name' => 'WINGS CHAIR',
            'category' => 'Living Room',
            'image' => 'https://kateandmark.in/cdn/shop/files/Image_2_2418982c-6688-47fa-b53b-355f5e53a0c1.webp?v=1760072897&width=550',
            'description' => 'Elegant wing chair with high back support',
            'dimensions' => 'L 80cm x W 75cm x H 110cm',
            'material' => 'Fabric & Solid Wood Frame'
        ],
        [
            'id' => 7,
            'name' => 'RECLINERS',
            'category' => 'Living Room',
            'image' => 'https://kateandmark.in/cdn/shop/files/01MainImage_15231a85-9e84-4ffd-ab76-0ce4fd20c47d.webp?v=1755251668&width=720',
            'description' => 'Comfortable reclining chair for relaxation',
            'dimensions' => 'L 85cm x W 90cm x H 105cm',
            'material' => 'Leather & Metal Frame',
            'badge' => 'New'
        ],
        [
            'id' => 8,
            'name' => 'ROCKING CHAIR',
            'category' => 'Living Room',
            'image' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQhzXafoh4WeH9lfhfGflMhqDQVujSrQ_GGwNsVsInGnNJeE7xECDBr7mDcPRgNBMoAKe0NxHB1A7q1rB4aUnF-m7Vye5DXx-Ja7_K2Dag',
            'description' => 'Traditional wooden rocking chair',
            'dimensions' => 'L 70cm x W 85cm x H 100cm',
            'material' => 'Solid Wood'
        ],

        // Bedroom Category
        [
            'id' => 9,
            'name' => 'WOODEN COTS',
            'category' => 'Bedroom',
            'image' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ3C9aErRpPPgWdspyB1PspnKwfFld4cW-3itQjeDAH6BiPMuLeqdywpXpkT3mKzJeUJSugF8wsrumKMR6qfRluTt85bApaPVTP-jvl2Z4',
            'description' => 'Handcrafted wooden bed with elegant design',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Sheesham Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 10,
            'name' => 'STORAGE COTS',
            'category' => 'Bedroom',
            'image' => 'https://m.media-amazon.com/images/I/61rEQm6WUcL._SX679_.jpg',
            'description' => 'Wooden bed with built-in storage compartments',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Engineered Wood with Storage',
            'badge' => 'New'
        ],
        [
            'id' => 11,
            'name' => 'WARDROBE',
            'category' => 'Bedroom',
            'image' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRABi5Jrhe1kudprtISsrOXR4oTFYxPFr6Pad4haA-_om4Eo22lMglVtIpW9OwLdJli5x-E6JaXcfNjHQpYc6camxHZS6qlA_9e3Ud5PHs',
            'description' => 'Spacious wardrobe with multiple compartments',
            'dimensions' => 'L 180cm x W 60cm x H 210cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 12,
            'name' => 'DRESSING TABLE',
            'category' => 'Bedroom',
            'image' => 'https://m.media-amazon.com/images/I/71PDAy-0+nL._SX679_.jpg',
            'description' => 'Elegant dressing table with mirror and drawers',
            'dimensions' => 'L 120cm x W 45cm x H 160cm',
            'material' => 'Solid Wood with Mirror'
        ],

        // Dining Category
        [
            'id' => 13,
            'name' => 'DINING TABLES',
            'category' => 'Dining',
            'image' => 'https://www.royaloakindia.com/media/catalog/product/d/t/dt30461-4_dt30477l-cr_gtg.jpg?optimize=high&bg-color=255,255,255&fit=bounds&height=500&width=800&canvas=800:500',
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
            'image' => 'https://kateandmark.in/cdn/shop/files/3bedbybedkingsizebedratedoublebedwithstorage_fe72ce13-2408-425c-9e60-362b88d8a9f9.webp?v=1755251553&width=720',
            'description' => 'Orthopedic memory foam mattress for better sleep',
            'dimensions' => 'L 200cm x W 180cm x H 20cm',
            'material' => 'Memory Foam',
            'badge' => 'New'
        ],
        [
            'id' => 15,
            'name' => 'PILLOWS',
            'category' => 'Mattresses',
            'image' => 'https://lifencolors.in/cdn/shop/files/pair-sea-mist-cushions-white-sofa-decor.webp?v=1764761866&width=1800',
            'description' => 'Comfortable pillows for perfect sleep',
            'dimensions' => 'L 70cm x W 45cm x H 15cm',
            'material' => 'Memory Foam & Cotton Cover'
        ],

        // Home Office Category
        [
            'id' => 16,
            'name' => 'OFFICE CHAIR',
            'category' => 'Home Office',
            'image' => 'https://damroimages.blob.core.windows.net/damroimages/brown29-1.jpg',
            'description' => 'Ergonomic office chair for comfortable work',
            'dimensions' => 'L 65cm x W 65cm x H 110cm',
            'material' => 'Mesh & Metal Frame',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 17,
            'name' => 'COMPUTER TABLE',
            'category' => 'Home Office',
            'image' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTC3JGjRyvadWzSa0ReEwNh0kEqFMG6Gtc4eGufM6S4rcssc38CNVCq_QB6uoQANYIhozdSawH6clssRjlcCt2KsXsbgknbXU5aGtEjLv74',
            'description' => 'Modern computer table with cable management',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 18,
            'name' => 'STUDY TABLE',
            'category' => 'Home Office',
            'image' => 'https://images.squarespace-cdn.com/content/v1/65d325ddd662de7fdcb2411f/f4901722-26a3-4b5a-b2f7-d19471536eba/download.jpg',
            'description' => 'Spacious study table with storage drawers',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Solid Wood'
        ],
        [
            'id' => 19,
            'name' => 'BOSS CHAIRS',
            'category' => 'Home Office',
            'image' => 'https://www.greensoul.online/cdn/shop/files/694880632-kiev_grey.png?v=1756712010',
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
            'image' => 'https://ddassstore.com/cdn/shop/files/Solid_Sheesham_Wooden_Pooja_Temple_Or_Mandap_for_Home_Office_DDASSWTSolid-1.jpg?v=1741075447',
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