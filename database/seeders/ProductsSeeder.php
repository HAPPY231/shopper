<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=>'Samsung Galaxy A52',
                'description'=>'Wielobarwne szczegóły to uczta dla oczu dzięki wyświetlaczowi FHD+ Super AMOLED z odświeżaniem 90Hz, osiągającemu 800 nitów1 i zapewniającemu doskonałą widoczność nawet w świetle dziennym. Funkcja Eye Comfort Shield2 redukuje emisję niebieskiego światła, a Real Smooth utrzymuje płynność obrazu podczas grania i przewijania stron. Wszystko to z wykorzystaniem 6,5-calowego wyświetlacza Infinity-U',
                'price'=>1539.00,
                'condition'=>'new',
                'amount'=>'100',
                'image_url'=>'324234525624',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'5',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Huawei Nova Y90',
                'description'=>'Wybierz smartfon z baterią 5000 mAh, aby móc się cieszyć długimi godzinami rozrywki i rozmów bez konieczności ładowania. Huawei nova Y90 zachwyci Cię również zaawansowanymi aparatami, szybką reakcją wyświetlacza i intuicyjnym w obsłudze interfejsem.',
                'price'=>1099,
                'condition'=>'new',
                'amount'=>'250',
                'image_url'=>'3452527254562',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'6',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Samsung Galaxy A22',
                'description'=>'Smartfon A22 Przyjemny w dotyku z ekranem 6,6 cala i detalami, które przykuwają uwagę .Dzięki aparatowi głównemu 48MP Uchwycisz wartościowe momenty z wszystkimi szczegółami.',
                'price'=>929,
                'condition'=>'new',
                'amount'=>130,
                'image_url'=>'85903834059534',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'8',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Huawei Y6',
                'description'=>'HUAWEI Y6 2018, posiada panoramiczny wyświetlacz FullView o przekątnej 5,7” i proporcjach 18:9. Rozdzielczość ekranu wynosi 1440 x 720.
Dzięki temu wyświetlane na nim obrazy są rzeczywiste, żywe i w świetnej jakości.',
                'price'=>429,
                'condition'=>'new',
                'amount'=>340,
                'image_url'=>'894839754573',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'6',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'iPhone 11',
                'description'=>'Nowy system dwóch aparatów pozwala uchwycić więcej. Szybki procesor i bateria na cały dzień – jeszcze więcej zdziałasz. A dzięki wideo o jakości nieosiągalnej dla żadnego innego smartfona zapisane wspomnienia będą wyglądać piękniej niż kiedykolwiek.',
                'price'=>2499,
                'condition'=>'new',
                'amount'=>120,
                'image_url'=>'325264567324562',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Apple iPhone 13',
                'description'=>'Apple iPhone 13 Pro Max 1TB Alpejska zieleń ma wszystko, czego potrzebujesz, a nawet więcej. Czip A15 Bionic, wydajna bateria, wyświetlacz z technologią OLED, klasa wodoodporności IP68, radykalnie rozbudowany system aparatów, to tylko niektóre z zalet tego urządzenia. Prezentowany model jest w kolorze zielonym i posiada 1TB pamięci wewnętrznej.',
                'price'=>8399,
                'condition'=>'new',
                'amount'=>50,
                'image_url'=>'425616542345342',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Apple iPhone 12',
                'description'=>'
Żeby osiągnąć neutralność węglową do 2030 roku, iPhone’a 12 sprzedajemy bez zasilacza i słuchawek EarPods. W pudełku znajdziesz przewód z USB-C na Lightning do szybkiego ładowania zgodny z zasilaczami USB-C i portami w komputerach.

Zachęcamy do korzystania ze zgodnych z tym modelem iPhone’a przewodów z USB-A na Lightning, zasilaczy i słuchawek, które już masz. Jednak jeśli potrzebujesz nowego zasilacza lub nowych słuchawek Apple, możesz je dokupić.',
                'price'=>3899,
                'condition'=>'new',
                'amount'=>112,
                'image_url'=>'7958920958928905',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'7',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'OPPO F21 Pro',
                'description'=>'OPPO F21 Pro w wersji 4G to nietuzinkowy smartfon, zwłaszcza w kolorze Sunsen Orange. Tylna obudowa pokryta jest skórą i włóknem szklanym!

Poza tym z tyłu znajduje się podwójny aparat foto 64+2 Mpix, z przodu zaś kamerka 32 Mpix. Jest ona umieszczona w otworze ekranu AMOLED FHD+ o przekątnej 6,43″ i odświeżaniu 90 Hz. Smartfon ma 8/128 GB pamięci, złącze słuchawkowe 3,5 mm, Dual SIM i fajny wygląd!',
                'price'=>1699,
                'condition'=>'new',
                'amount'=>400,
                'image_url'=>'34526525435625232',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'3',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Samsung Galaxy S22 Ultra',
                'description'=>'Galaxy S22 zachwyca nowoczesnym i stylowym wyglądem. Ma płaską konstrukcję i ograniczone do minimum ramki. Został wykonany w przykuwających uwagę kolorach z materiałów w najwyższej jakości. Każdy dzień jego użytkowania będzie dla Ciebie przyjemnością.',
                'price'=>5899,
                'condition'=>'new',
                'amount'=>70,
                'image_url'=>'234652164426245512',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'5',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'OPPO Find X5',
                'description'=>'OPPO Find X5 Pro 256 GB czarny to smartfon, który zrewolucjonizuje Twoje życie. Dzięki wydajnemu procesorowi nie musisz się ograniczać, a pojemna bateria ani na chwilę Cię nie zatrzyma. Wyraźne zdjęcia zapewni Ci główny obiektyw, a selfie warte udostępnienia stworzysz z aparatem przednim. Oglądaj ulubione filmy na dużym ekranie AMOLED i przenieś się do świata swoich ulubionych superbohaterów.',
                'price'=>5999,
                'condition'=>'new',
                'amount'=>140,
                'image_url'=>'2344212531254321234',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'3',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Etui do Samsung A22',
                'description'=>'Etui Erbord Armor KickStand to podwójna ochrona Twojego telefonu. Pokrowiec jest dwuczęściowy, składa się z pancerza wykonanego z poliwęglanu, który nakłada się na wykonaną z utwardzanej gumy giętką osłonę. Całość będzie dobrze chronić Twój telefon przed uderzeniami i zarysowaniami.',
                'price'=>40,
                'condition'=>'new',
                'amount'=>1000,
                'image_url'=>'default_image',
                'views'=>'0',
                'seller_id'=>'1',
                'category_id'=>'9',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]
        ];

        Products::insert($products);
    }
}
