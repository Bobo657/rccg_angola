<?php

/*
| Public content for the RCCG Angola website. Everything here comes from the
| site's existing content. Phone, email and address stay in config/app.php.
*/

return [

    'name' => 'RCCG Angola',

    'full_name' => 'The Redeemed Christian Church of God, Resurrection Ground Parish',

    'tagline' => 'Resurrection Ground Parish, Luanda',

    'founded' => '6 October 2013',

    'description' => 'RCCG Resurrection Ground Parish in Luanda, Angola: a welcoming parish of The Redeemed Christian Church of God. Find service times, our address, pastors and parishes across Luanda.',

    'keywords' => 'RCCG Angola, Redeemed Christian Church of God Angola, RCCG Resurrection Ground Parish, church in Luanda, Christian church Luanda Angola, Sunday service Luanda, RCCG Luanda, Pastor Joseph Okenwa, Igreja em Luanda, Igreja Cristã Redimida de Deus Angola, house fellowship Luanda, church Rangel Luanda',

    'maps_url' => 'https://www.google.com/maps/search/?api=1&query='.'Distrito+Urbano+Rangel,+Avenida+Deolinda+Rodrigues,+Luanda,+Angola',

    'coordinator' => [
        'name' => 'Pastor Joseph Ugochukwu Okenwa',
        'short_name' => 'Pastor Joseph Okenwa',
        'role' => 'Country Coordinator, RCCG Angola',
        'phone' => '+244 945 452 222',
        'email' => 'northpole62001@icloud.com',
        'photo' => 'team-5',
    ],

    'mother_parish' => 'RCCG Resurrection Parish Lekki, at 1st Gate Jakande Estate, Km 15, Lekki Express Way, Nigeria',

    'programs' => [
        ['when' => 'Every Sunday', 'time' => '8:00 – 8:30', 'name' => "Workers' Meeting"],
        ['when' => 'Every Sunday', 'time' => '8:30 – 9:00', 'name' => 'Sunday School Class'],
        ['when' => 'Every Sunday', 'time' => '9:05 – 11:30', 'name' => 'Main Sunday Service', 'main' => true, 'dow' => 0, 'start' => '09:05', 'end' => '11:30'],
        ['when' => 'Tuesdays', 'time' => '18:00 – 19:30', 'name' => 'Bible Study (Digging Deep)', 'dow' => 2, 'start' => '18:00', 'end' => '19:30'],
        ['when' => 'Thursdays', 'time' => '18:00 – 19:30', 'name' => 'Faith Clinic', 'dow' => 4, 'start' => '18:00', 'end' => '19:30'],
        ['when' => 'First Monday to Wednesday of every month', 'time' => '18:00 – 19:00', 'name' => 'Fasting and Prayers, "The God of Every Month"'],
    ],

    'timezone' => 'Africa/Luanda',

    'parishes' => [
        [
            'name' => 'Resurrection Ground Parish',
            'place' => 'Luanda, Angola',
            'pastor' => 'Pastor Ekpe Declan C.',
            'role' => 'Pastor in charge of the parish',
            'headquarters' => true,
            'phone' => '+244 927 556 703',
            'photo' => 'team-0',
        ],
        [
            'name' => 'City Church Parish',
            'place' => 'Talatona, Luanda',
            'pastor' => 'Pastor Adenuga Damilola',
            'phone' => '+244 928 020 296',
            'photo' => 'team-1',
        ],
        [
            'name' => 'I.C.R.D.A, A Mão de Deus Paróquia',
            'place' => 'Vila Flor, Luanda',
            'pastor' => 'Bro Pedro Da Silva Costa',
            'phone' => '+244 943 022 977',
            'photo' => 'team-2',
        ],
        [
            'name' => 'Mount Olives Parish',
            'place' => 'Prenda, Luanda',
            'pastor' => 'Deacon Rufino Sumonga Daniel',
            'phone' => '+244 927 111 732',
            'photo' => 'team-6',
        ],
        [
            'name' => 'Solution Arena Parish',
            'place' => 'Zango 4, Luanda',
            'pastor' => 'Bro Nduka Onyinye',
            'phone' => '+244 925 374 067',
            'photo' => 'team-7',
        ],
    ],

    'vision' => [
        'To make heaven.',
        'To take as many people with us.',
        'To have a member of RCCG in every family of all nations.',
        'To accomplish No. 1 above, holiness will be our lifestyle.',
        'To accomplish No. 2 and 3 above, we will plant churches within five minutes walking distance in every city and town of developing countries and within five minutes driving distance in every city and town of developed countries.',
        'We will pursue these objectives until every Nation in the world is reached for the Lord Jesus Christ.',
    ],

    'core_objective' => "Reach Angolans, equip them with the undiluted Truth of God's Word and the Holy Spirit so that burning with passion and zeal for the Lord's Kingdom, they will eclipse the territory with the principles and glory of God's kingdom.",

    'mandate' => "To be the best training unit of the Redeemed Christian Church of God in the world, and lead the church to achieve the highest excellence in church planting and House Fellowship Development.",

    'pages' => [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'visit', 'label' => 'Plan your visit'],
        ['route' => 'about', 'label' => 'About us'],
        ['route' => 'our_beliefs', 'label' => 'Our beliefs'],
        ['route' => 'our_history', 'label' => 'Our history'],
        ['route' => 'gallery', 'label' => 'Gallery'],
        ['route' => 'contact', 'label' => 'Contact'],
    ],
];
