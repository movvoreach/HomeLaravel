<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function show($char)
    {
        $dictionary = [
            'A' => ['word' => 'Apple', 'image' => 'apple.png', 'Description' => 'An apple is a sweet, edible fruit produced by an apple tree. Apples are rich in fiber and vitamin C and are commonly eaten fresh or used in cooking, baking, and beverages. They come in many varieties, colors, and flavors.'],
            'B' => ['word' => 'Ball', 'image' => 'ball.png', 'Description' => 'A ball is a round object used in many games and sports. It can be made of various materials such as rubber, leather, or plastic, and can be bounced, thrown, kicked, or hit as part of gameplay or recreational activities.'],
            'C' => ['word' => 'Cat', 'image' => 'cat.png', 'Description' => 'A cat is a small, furry, carnivorous mammal often kept as a domestic pet. Known for their agility, independence, and playful behavior, cats are also valued for their ability to hunt vermin.'],
            'D' => ['word' => 'Dog', 'image' => 'dog.png', 'Description' => 'Dogs are loyal, friendly animals that are commonly kept as pets. They are known for their companionship, trainability, and wide range of breeds, each with unique characteristics and personalities.'],
            'E' => ['word' => 'Elephant', 'image' => 'elephant.png', 'Description' => 'Elephants are the largest land mammals on Earth. They are known for their intelligence, long trunks, tusks made of ivory, and social nature. They live in herds and play an important role in their ecosystems.'],
            'F' => ['word' => 'Fish', 'image' => 'fish.png', 'Description' => 'Fish are aquatic animals that have gills for breathing and fins for swimming. They come in thousands of species and live in both freshwater and marine environments, forming a crucial part of the food chain.'],
            'G' => ['word' => 'Giraffe', 'image' => 'giraffe.png', 'Description' => 'Giraffes are the tallest land animals, native to Africa, and easily recognized by their extremely long necks and legs. They feed on tree leaves and are generally peaceful, social animals.'],
            'H' => ['word' => 'Hat', 'image' => 'hat.png', 'Description' => 'A hat is a piece of clothing worn on the head for warmth, fashion, or protection. Hats come in many styles such as caps, fedoras, and helmets, and often reflect cultural or personal expression.'],
            'I' => ['word' => 'Ice cream', 'image' => 'icecream.png', 'Description' => 'Ice cream is a frozen dessert made from dairy products like cream and milk, often flavored with sweeteners and fruits. It is popular worldwide and enjoyed especially in hot weather as a treat.'],
            'J' => ['word' => 'Juice', 'image' => 'juice.png', 'Description' => 'Juice is a drink made by extracting liquid from fruits or vegetables. It is a refreshing and nutritious beverage, often served with breakfast or as a healthy alternative to sugary sodas.'],
            'K' => ['word' => 'Kite', 'image' => 'kite.png', 'Description' => 'A kite is a lightweight object with a frame covered by fabric or paper, flown in the wind at the end of a string. Kites are used for entertainment, sport, and in some cultures, for ceremonies or festivals.'],
            'L' => ['word' => 'Lion', 'image' => 'lion.png', 'Description' => 'Lions are large, powerful carnivores known as "king of the jungle." They live in groups called prides, mainly in Africa, and are famous for their manes, roaring sounds, and hunting skills.'],
            'M' => ['word' => 'Monkey', 'image' => 'monkey.png', 'Description' => 'Monkeys are intelligent, agile primates found in forests and jungles around the world. They are known for their playful behavior, ability to use tools, and strong social bonds within groups.'],
            'N' => ['word' => 'Nest', 'image' => 'nest.png', 'Description' => 'A nest is a structure built by birds, and sometimes other animals, to hold eggs or offspring. Made from twigs, leaves, or other materials, nests provide warmth, protection, and a place to grow.'],
            'O' => ['word' => 'Orange', 'image' => 'orange.png', 'Description' => 'Oranges are citrus fruits prized for their sweet and tangy flavor. Rich in vitamin C, they can be eaten fresh or juiced and are commonly used in cooking, baking, and drinks around the world.'],
            'P' => ['word' => 'Pencil', 'image' => 'pencil.png', 'Description' => 'A pencil is a common writing instrument made of a graphite core inside a wooden casing. It is used by students, artists, and professionals for drawing, sketching, or writing, and can be easily erased.'],
            'Q' => ['word' => 'Queen', 'image' => 'queen.png', 'Description' => 'A queen is a female ruler of a country or a member of a royal family. Queens may have ceremonial, symbolic, or political roles depending on the country and its system of government.'],
            'R' => ['word' => 'Rabbit', 'image' => 'rabbit.png', 'Description' => 'Rabbits are small, furry mammals with long ears and strong hind legs. They are known for their fast reproduction and burrowing behavior, and are kept both as pets and farm animals.'],
            'S' => ['word' => 'Sun', 'image' => 'sun.png', 'Description' => 'The sun is a massive, glowing ball of gas at the center of our solar system. It provides the Earth with light and warmth, making life possible, and controls the planet’s climate and weather.'],
            'T' => ['word' => 'Tiger', 'image' => 'tiger.png', 'Description' => 'Tigers are large, striped cats known for their strength and stealth. Native to Asia, they are apex predators and play an important role in maintaining balance in their ecosystems.'],
            'U' => ['word' => 'Umbrella', 'image' => 'umbrella.png', 'Description' => 'An umbrella is a collapsible canopy used for protection against rain or sunlight. It is a common personal accessory found in homes, cars, and workplaces around the world.'],
            'V' => ['word' => 'Violin', 'image' => 'violin.png', 'Description' => 'A violin is a wooden string instrument played with a bow. Known for its expressive and melodic tones, the violin is used in orchestras, solo performances, and many styles of music.'],
            'W' => ['word' => 'Watch', 'image' => 'watch.png', 'Description' => 'A watch is a small timekeeping device worn on the wrist. Modern watches can also include smart features like heart rate monitoring, GPS, and phone notifications.'],
            'X' => ['word' => 'Xylophone', 'image' => 'xylophone.png', 'Description' => 'A xylophone is a musical instrument made of wooden bars struck with mallets. It produces melodic tones and is often used in orchestras, bands, and music education.'],
            'Y' => ['word' => 'Yacht', 'image' => 'yacht.png', 'Description' => 'A yacht is a luxurious sailing or motor boat used for pleasure cruising. Yachts vary in size and are associated with leisure, sport, or high-end travel on water.'],
            'Z' => ['word' => 'Zebra', 'image' => 'zebra.png', 'Description' => 'Zebras are African animals known for their distinctive black-and-white stripes. They live in herds and graze on grasslands, using their patterns as camouflage and a way to confuse predators.'],
        ];
        
        $dictionary = $dictionary[$char];

        return view('dictionary', compact('char', 'dictionary'));

    }
}

