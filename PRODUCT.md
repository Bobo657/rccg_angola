# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack
Laravel 13 (Blade views, `Route::view` routes, no database-backed features). Tailwind CSS compiled with the standalone/CLI build and the output committed to `public/css`, no Vite, because deployment is a plain FTP upload with no build step. No Bootstrap/React/Vue in the new design.

## Users
- First-time visitors in Luanda, Angola (and diaspora / RCCG members relocating) deciding whether and where to attend: they need address, when services are, who they will meet, and a phone number.
- Existing members of RCCG Resurrection Ground Parish and the other Angolan parishes looking for programs, pastors and parish contacts.

## Product Purpose
Public website of The Redeemed Christian Church of God (RCCG) Angola, Resurrection Ground Parish, Luanda. Founded 6 October 2013, pioneered by Pastor Joseph Ugochukwu Okenwa, who is Country Coordinator of RCCG Angola. Success: a visitor knows who the church is, where and when it meets, and how to reach a person.

## Positioning
The Angolan arm of a global church (mother parish: RCCG Resurrection Parish Lekki, Nigeria) with a real multi-parish presence in Luanda, a Country Coordinator, and a live-radio ministry.

## Operating Context
Static, content-only site. Contact details live in `config/app.php` (`app.phone`, `app.email`, `app.address`). Existing weekly programs (shown on the old homepage): Sundays 8:00 Workers' Meeting, 8:30 Sunday School, 9:05-11:30 Main Service; Tuesdays 18:00-19:30 Bible Study (Digging Deep); Thursdays 18:00-19:30 Faith Clinic; first Monday-Wednesday of each month 18:00-19:00 fasting and prayer ("The God of Every Month").

## Capabilities and Constraints
- Routes: `/`, `/about`, `/our_beliefs`, `/our_history`, `/gallery`, `/contact`.
- No sermons, events, ministries, prayer-request or online-giving features or data exist. Confirmed scope with the owner: redesign existing content only; do not build or fake those features.
- Parishes and contacts (existing content): Resurrection Ground (HQ) Pastor Ekpe Declan C.; Mount Olives, Prenda; City Church, Talatona; A Mão de Deus, Vila Flor; Solution Arena, Zango 4.
- Site is English-only today; Angola's official language is Portuguese. Translation is undecided and out of scope unless requested.
- Giving: existing copy only describes tithing (Malachi 3:10) and "several options"; no bank or payment details exist and none may be invented.

## Brand Commitments
- Logo: `public/images/logo-wide.png`, the RCCG seal. Primary color is the logo's deep indigo `#28166F`. The seal also carries green and red; the design uses indigo as the single accent.
- Existing real photography (sanctuary, choirs, men's/women's/youth weekends, radio studio, pastors) in `public/images/`.

## Evidence on Hand
- Real photos and one worship video (`public/images/praise.mp4`). Real captions for the weekend celebrations.
- Absent, must not be fabricated: testimonials, attendance numbers, impact statistics, sermon archive, event calendar, payment details.

## Product Principles
1. Answer "where, when, who" before anything else.
2. Use only content that exists; mark and omit rather than invent.
3. People and worship over decoration.
4. Fast and light on modest mobile connections: optimized images, minimal JavaScript.

## Accessibility & Inclusion
WCAG AA contrast, keyboard navigation, visible focus, reduced-motion support, large touch targets. Many visitors will be on mobile.
