<?php

namespace App\DataFixtures;

use App\Entity\SneakerSell;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PublicSneakerFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sneakers = [
            [
                "name" => "Air Max 97 Silver bullet",
                "description" => "The Nike Air Max 97 Silver Bullet is an iconic sneaker known for its sleek, metallic silver design inspired by Japan’s high-speed bullet trains.
                It features a full-length visible Air cushioning unit, reflective 3M accents, and wavy lines that give it a futuristic, streamlined look.
                Originally released in 1997, it's a timeless blend of style and comfort, perfect for sneaker enthusiasts and collectors alike.",
                "size" => 42.5,
                "condition" => 8,
                "brand" => "Nike",
                "category" => "og",
                "color" => "Grey",
                "price" => 200.00,
                "image" => "am97.jpg",
                "proofOfPurchase" => "receipt1.pdf"
            ],
            [
                "name" => "Jordan 1 Tie And DYE",
                "description" => "The Air Jordan 1 Tie-Dye is a unique twist on the classic Jordan 1 silhouette, featuring a vibrant, eye-catching tie-dye pattern.
                 Released in 2020, it combines shades of blue and green across the upper, creating a bold, artistic look.
                 The shoe maintains the traditional leather construction, with black and white accents that balance out the design.
                 It's a stylish and creative take on a timeless sneaker, appealing to both Jordan fans and fashion-forward individuals.",
                "size" => 44,
                "condition" => 9,
                "brand" => "Nike",
                "category" => "Og",
                "color" => "blue",
                "price" => 300.00,
                "image" => "aj1_tie_dye.jpg",
                "proofOfPurchase" => "none"
            ],
            [
                "name" => "Converse x Comme des Garçons",
                "description" => "The Converse x Comme des Garçons Play Low Black is a stylish collaboration between the iconic sneaker brand and the avant-garde Japanese fashion label.
                Featuring a classic black canvas upper, the shoe is adorned with the signature Comme des Garçons heart logo with eyes on the side.
                Its minimalist design is complemented by white laces, a rubber toe cap, and the classic Converse vulcanized sole, blending simplicity with a playful, artistic touch.
                This sneaker is a must-have for fans of fashion-forward streetwear.",
                "size" => 41,
                "condition" => 7,
                "brand" => "Converse",
                "category" => "Casual",
                "color" => "Black",
                "price" => 80.00,
                "image" => "converse_cdg.jpg",
                "proofOfPurchase" => "receipt2.pdf"
            ],
            [
                "name" => "Tennis_outdoor ",
                "description" => "The Adidas Tennis Outdoor Volleyball Olympics 1985 is a retro-style sneaker inspired by the classic designs of the 1980s.
                Created for outdoor volleyball, it features a sturdy leather upper with breathable mesh panels for durability and comfort.
                The shoe's distinctive three-stripe branding on the sides and a rubber outsole provide excellent traction on outdoor courts.
                Its timeless design, rooted in Adidas' heritage, captures the spirit of the 1985 Olympic era, making it a nostalgic favorite for vintage sportswear enthusiasts.",
                "size" => 43,
                "condition" => 9,
                "brand" => "Adidas",
                "category" => "Tennis",
                "color" => "Red",
                "price" => 90.00,
                "image" => "tennis_outdoor.jpg",
                "proofOfPurchase" => "receipt3.pdf"
            ],
            [
                "name" => "Air Max 96 ultra ready",
                "description" => "The Nike Air Max 96 Ultra Ready is a modern update of the classic Air Max 96 silhouette, offering a sleek and lightweight design.
                Featuring breathable mesh with synthetic overlays, this shoe retains the signature wavy lines and a retro-inspired aesthetic.
                The visible Air cushioning unit provides all-day comfort, while the streamlined design enhances flexibility and support.
                With a futuristic look that blends performance and style, the Air Max 96 Ultra Ready is perfect for both casual wear and athletic use.",
                "size" => 45,
                "condition" => 10,
                "brand" => "Nike",
                "category" => "Casual",
                "color" => "White",
                "price" => 180.00,
                "image" => "am96.jpg",
                "proofOfPurchase" => "receipt4.pdf"
            ],
            [
                "name" => "Wave Luminous",
                "description" => "The Mizuno Wave Luminous Blue is a high-performance indoor court shoe designed for athletes seeking both comfort and stability.
                Its striking blue design is paired with advanced Wave technology, offering excellent cushioning and support for dynamic movements.
                The lightweight mesh upper ensures breathability, while the non-marking outsole provides superior grip on indoor surfaces.
                Ideal for volleyball and other court sports, the Mizuno Wave Luminous blends function with a sleek, modern look.",
                "size" => 40.5,
                "condition" => 8,
                "brand" => "Mizuno",
                "category" => "Traning",
                "color" => "Blue",
                "price" => 100.00,
                "image" => "mizuno.jpg",
                "proofOfPurchase" => "none"
            ],
            [
                "name" => "Presto x Off-White",
                "description" => "The Nike Presto x Off-White Black is a highly coveted collaboration between Nike and designer Virgil Abloh.
                 Featuring a deconstructed look, the shoe is crafted with a black mesh upper, exposed stitching, and signature Off-White design elements like the red zip-tie and bold 'AIR' branding on the heel strap. 
                 The sneaker combines comfort with Abloh's unique, minimalist aesthetic, while the lightweight Presto design ensures a snug, sock-like fit. 
                 This fusion of streetwear and high fashion makes it a standout in both sneaker culture and contemporary design.",
                "size" => 44,
                "condition" => 9,
                "brand" => "Nike",
                "category" => "Casual",
                "color" => "",
                "price" => 170.00,
                "image" => "presto.jpg",
                "proofOfPurchase" => "receipt5.pdf"
            ],
            [
                "name" => "Tn Tiger",
                "description" => "The Nike Air Max Plus TN Tiger is a bold and iconic sneaker, known for its striking tiger-inspired design. 
                Featuring a gradient orange-to-black upper that mimics tiger stripes, this shoe stands out with its aggressive, animalistic look. 
                The signature wavy TPU overlays enhance its structure, while the visible Tuned Air (TN) units provide exceptional cushioning and support. 
                Originally released in the late 1990s, the Tiger edition remains one of the most sought-after colorways, blending street style with athletic performance.",
                "size" => 42,
                "condition" => 8,
                "brand" => "Nike",
                "category" => "Og",
                "color" => "yellow",
                "price" => 190.00,
                "image" => "tn_tiger.jpg",
                "proofOfPurchase" => "receipt6.pdf"
            ],
            [
                "name" => "Air Max Tailwind Skepta",
                "description" => "The Nike Air Max Tailwind 5 x Skepta in Blue and Black is a striking collaboration between the British rapper and Nike, blending bold style with innovative design.
                Featuring a gradient blue-to-black mesh upper with reflective detailing, the shoe captures Skepta's unique aesthetic.
                The distinctive cage overlay and visible Air Max cushioning provide both support and comfort, while the reflective accents add a futuristic touch. 
                This sneaker is a fusion of streetwear and performance, embodying Skepta’s creative vision with a bold, standout look.",
                "size" => 44.5,
                "condition" => 9,
                "brand" => "Nike",
                "category" => "Rap",
                "color" => "Blue",
                "price" => 180.00,
                "image" => "skepta.jpg",
                "proofOfPurchase" => "none"
            ],
            [
                "name" => "New Balance Running - M's 890 v1",
                "description" => "The New Balance 890v1 Men’s Running Shoe in red is a lightweight, performance-driven sneaker designed for serious runners. 
                Featuring a breathable red mesh upper with synthetic overlays, it provides both comfort and support during high-intensity runs. 
                The REVlite midsole offers responsive cushioning without adding weight, making it ideal for long distances. 
                With its sleek design and durable rubber outsole for enhanced traction, the 890v1 combines speed, style, and functionality, making it a favorite among runners seeking both performance and a bold look.",
                "size" => 43.5,
                "condition" => 7,
                "brand" => "New Balance",
                "category" => "Running",
                "color" => "Red",
                "price" => 100.00,
                "image" => "nb890.jpg",
                "proofOfPurchase" => "receipt7.pdf"
            ]
        ];

        foreach ($sneakers as $sneakerData) {
            $sneaker = new SneakerSell();
            $sneaker->setName($sneakerData["name"])
                ->setDescription($sneakerData["description"])
                ->setSize($sneakerData["size"])
                ->setCondition($sneakerData["condition"])
                ->setBrand($sneakerData["brand"])
                ->setCategory($sneakerData["category"])
                ->setColor($sneakerData["color"])
                ->setPrice($sneakerData["price"])
                ->setImage($sneakerData["image"])
                ->setPseudo('toto pseudo')
                ->setEmailCustomer('customer-email@gmai.com')
                ->setProofOfPurchase($sneakerData["proofOfPurchase"]);

            $manager->persist($sneaker);
        }

        $manager->flush();
    }
}
