<?php

namespace App\DataFixtures;

use App\Entity\Sneaker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SneakerFixtures extends Fixture
{
    const SNEAKERS = [
        [
            "name" => "Jordan 1 Chicago",
            "size" => 42.5,
            "description" => "The Jordan 1 Chicago is one of the most iconic sneakers in history. Released in 1985, this shoe is part of the first line of sneakers signed by Michael Jordan in collaboration with Nike, the Air Jordan 1.",
            "condition" => 8,
            "brand" => "nike",
            "color" => "red",
            "category" => "og",
            "price" => 50000,
            "image" => "jordan1_chicago.png",
        ],
        [
            "name" => "Jordan 11 Space Jam",
            "size" => 44,
            "description" => "The Jordan 11 Space Jam, released in 1996, is a legendary sneaker worn by Michael Jordan in the film Space Jam.",
            "condition" => 9,
            "brand" => "nike",
            "color" => "black",
            "category" => "movie",
            "price" => 400,
            "image" => "jordan11_spacejam.png",
        ],
        [
            "name" => "Jordan 4 x Carhartt",
            "size" => 43,
            "description" => "The Jordan 4 Carhartt x Eminem, released in 2015, is an ultra-rare collaboration featuring durable Carhartt materials and Eminem's signature branding.",
            "condition" => 10,
            "brand" => "nike",
            "color" => "black",
            "category" => "rap",
            "price" => 30000,
            "image" => "jordan4_carhartt.png",
        ],
        [
            "name" => "Jordan 1 x Travis Scott",
            "size" => 41,
            "description" => "A collaboration with Travis Scott, featuring a reversed Swoosh.",
            "condition" => 9,
            "brand" => "nike",
            "color" => "brown",
            "category" => "rap",
            "price" => 1500,
            "image" => "jordan1_travis.png",
        ],
        [
            "name" => "Air Force 1 07",
            "size" => 43.5,
            "description" => "The Nike Air Force 1, named after the U.S. President's airplane, revolutionized basketball footwear and became a global streetwear icon.",
            "condition" => 10,
            "brand" => "nike",
            "color" => "white",
            "category" => "og",
            "price" => 100,
            "image" => "airforce1.png",
        ],
        [
            "name" => "Air Max One Red White OG",
            "size" => 42.5,
            "description" => "The Air Max 1, introduced in 1987, revolutionized sneaker design as the first to feature visible Air cushioning.",
            "condition" => 8,
            "brand" => "nike",
            "color" => "red",
            "category" => "og",
            "price" => 300,
            "image" => "airmax1_redwhite.png",
        ],
        [
            "name" => "Air Mag",
            "size" => 44,
            "description" => "The Nike Air Mag, first seen in the 1989 film Back to the Future Part II, is an iconic sneaker known for its futuristic design and self-lacing technology. Released in limited quantities, it has become a legendary and highly coveted piece in sneaker history.",
            "condition" => 9,
            "brand" => "nike",
            "color" => "grey",
            "category" => "movie",
            "price" => 50000,
            "image" => "air_mag.png",
        ],
        [
            "name" => "Cortez OG",
            "size" => 41,
            "description" => "The Nike Cortez, famously worn by Tom Hanks in Forrest Gump, is a classic sneaker that debuted in 1972. Known for its sleek design and comfort, it became a cultural icon, symbolizing the rise of Nike and leaving a lasting impact on fashion and film.",
            "condition" => 7,
            "brand" => "nike",
            "color" => "white",
            "category" => "movie",
            "price" => 70,
            "image" => "cortez_og.png",
        ],
        [
            "name" => "Stan Smith",
            "size" => 45,
            "description" => "The adidas Stan Smith, introduced in the early 1970s and named after the tennis legend, is a minimalist sneaker that became a global icon. Renowned for its clean design and versatility, it remains one of the most beloved and timeless shoes in fashion history.",
            "condition" => 6,
            "brand" => "adidas",
            "color" => "white",
            "category" => "tennis",
            "price" => 80,
            "image" => "stan_smith.png",
        ],
        [
            "name" => "Superstar",
            "size" => 41,
            "description" => "The adidas Superstar, popularized by Run-DMC in the 1980s, is an iconic sneaker that became a symbol of hip-hop culture. Known for its distinctive shell toe and bold design, it remains a timeless classic in both music and streetwear.",
            "condition" => 8,
            "brand" => "adidas",
            "color" => "white",
            "category" => "rap",
            "price" => 90,
            "image" => "superstar.png",
        ],
        [
            "name" => "SL-72",
            "size" => 43,
            "description" => "The adidas SL 72, worn by Paul Michael Glaser as Starsky in the 1970s TV show Starsky & Hutch, is a vintage sneaker known for its lightweight design and retro style. It gained cultural significance as a symbol of '70s cool and remains a nostalgic favorite.",
            "condition" => 7,
            "brand" => "adidas",
            "color" => "blue",
            "category" => "movie",
            "price" => 120,
            "image" => "sl72.png",
        ],
        [
            "name" => "NB 992 gry/wht",
            "size" => 41,
            "description" => "The New Balance 992, famously worn by Steve Jobs, is a classic sneaker known for its comfort and understated design. Released in 2006, it became an emblem of Jobs' iconic minimalist style and has since gained a cult following for its blend of technology and simplicity.",
            "condition" => 9,
            "brand" => "new balance",
            "color" => "grey",
            "category" => "og",
            "price" => 200,
            "image" => "nb992.png",
        ],
        [
            "name" => "Onizuka Mexico 66",
            "size" => 46,
            "description" => "The Onitsuka Tiger Mexico 66, featured in Kill Bill and worn by Bruce Lee, is a classic sneaker known for its sleek design and distinctive stripes. Originally released in 1966, it has gained iconic status through its association with martial arts and film culture.",
            "condition" => 8,
            "brand" => "asics",
            "color" => "yellow",
            "category" => "movie",
            "price" => 130,
            "image" => "onizuka_mexico66.png",
        ],
        [
            "name" => "Old Skool",
            "size" => 41,
            "description" => "The Vans Old Skool, introduced in 1977, is a classic sneaker known for its signature side stripe and durable design. Originally popularized by skate culture, it remains a versatile and enduring icon in both casual and streetwear fashion.",
            "condition" => 9,
            "brand" => "vans",
            "color" => "black",
            "category" => "skate",
            "price" => 60,
            "image" => "old_skool.png",
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SNEAKERS as $sneakersData) {
            $sneaker = new Sneaker();
            $sneaker->setName($sneakersData["name"])
                ->setSize($sneakersData["size"])
                ->setDescription($sneakersData["description"])
                ->setCondition($sneakersData["condition"])
                ->setPrice($sneakersData["price"])
                ->setBrand($this->getReference($sneakersData["brand"]))
                ->setColor($this->getReference($sneakersData["color"]))
                ->setCategory($this->getReference($sneakersData["category"]))
                ->setImage($sneakersData["image"]);
            $manager->persist($sneaker);
        }

        $manager->flush();
    }
}

