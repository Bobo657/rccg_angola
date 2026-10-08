---
name: RCCG Angola
description: A welcoming parish doorstep in the seal's own indigo, with real photography of parish life.
colors:
  seal-indigo: "#28166f"
  indigo-hover: "#382390"
  indigo-deep: "#1c1052"
  indigo-night: "#120b34"
  indigo-mid: "#4a33ad"
  indigo-soft: "#b3a8e6"
  indigo-mist: "#e8e4f8"
  indigo-wash: "#f3f1fb"
  paper: "#f7f6fb"
  ink: "#17122e"
  muted: "#5a5574"
  line: "#dedaf0"
typography:
  display:
    fontFamily: "Young Serif, ui-serif, Georgia, serif"
    fontSize: "clamp(2.5rem, 5vw, 4.1rem)"
    fontWeight: 400
    lineHeight: 1.08
    letterSpacing: "-0.012em"
  headline:
    fontFamily: "Young Serif, ui-serif, Georgia, serif"
    fontSize: "clamp(2.25rem, 4vw, 3rem)"
    fontWeight: 400
    lineHeight: 1.08
    letterSpacing: "-0.012em"
  title:
    fontFamily: "Young Serif, ui-serif, Georgia, serif"
    fontSize: "1.25rem"
    fontWeight: 400
    lineHeight: 1.2
  body:
    fontFamily: "Figtree, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1.0625rem"
    fontWeight: 400
    lineHeight: 1.65
  label:
    fontFamily: "Figtree, ui-sans-serif, system-ui, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 600
    lineHeight: 1.4
rounded:
  photo: "12px"
  panel: "16px"
  pill: "999px"
spacing:
  section-sm: "80px"
  section-lg: "128px"
  gutter: "16px"
components:
  button-primary:
    backgroundColor: "{colors.seal-indigo}"
    textColor: "#ffffff"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
    height: "48px"
  button-primary-hover:
    backgroundColor: "{colors.indigo-hover}"
  button-light:
    backgroundColor: "#ffffff"
    textColor: "{colors.indigo-deep}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
  button-outline:
    textColor: "{colors.seal-indigo}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
---

# Design System: RCCG Angola

## Overview

**Creative North Star: "The Parish Doorstep"**

The site behaves like the front door of a parish: before anything else it tells a stranger where, when and who. The seal's deep indigo is used as large committed fields (the info strip, the weekly schedule, the closing banner, the footer) against an indigo-tinted off-white, and real photographs of the congregation carry the warmth. Nothing is decorative that a visitor could mistake for content.

Density is moderate and airy: wide sections, one idea per section, hairline rules instead of boxes. Layout is deliberately asymmetric on desktop (text left, tall photograph right; offset photo grids) and collapses to a single column on phones. Motion is limited to a gentle fade-up reveal, image hover zoom, a menu height transition and cross-page view transitions, all disabled under reduced motion.

**Key Characteristics:**
- Seal indigo as a field color, not a sprinkle of accent.
- Real parish photography only; no stock or illustration.
- Hairline dividers and lists in place of cards.
- Pill buttons; photographs and panels with modest radii.
- Phone numbers, addresses and times are always tappable and always near the top.

## Colors

One brand hue, sampled from the logo, with every neutral tinted toward it. No second accent. The seal's green and red are intentionally not used in the interface.

### Primary
- **Seal Indigo** (#28166F): hero strip, schedule and mission bands, primary buttons, headings (via Indigo Deep #1c1052 for H1/H2 on light grounds).
- **Indigo Night** (#120B34): footer ground.
- **Indigo Hover** (#382390): primary button hover.

### Neutral
- **Paper** (#F7F6FB): page ground, a cool off-white; never cream.
- **Ink** (#17122E): body text. Never pure black.
- **Muted Ink** (#5A5574): secondary text on paper (contrast above 6:1).
- **Hairline** (#DEDAF0): dividers and borders.
- **Indigo Wash** (#F3F1FB) / **Mist** (#E8E4F8): tinted sections and image placeholders.
- **Indigo Soft** (#B3A8E6): secondary text and icons on indigo grounds.

### Named Rules
**The Seal-Only Rule.** Brand color is the logo's indigo and its tints. Do not introduce a second hue for emphasis; use weight, scale or an indigo field instead.

**The Cool Paper Rule.** Light grounds are indigo-tinted whites. Warm cream/parchment is the generic church look and is out.

## Typography

**Display Font:** Young Serif (self-hosted, single weight)
**Body Font:** Figtree (self-hosted, weights 400-700)

**Character:** A warm, sturdy old-style serif for headlines (it reads as hymnbook and family Bible, not corporate) with a friendly humanist sans for reading; welcoming and unhurried.

### Hierarchy
- **Display** (400, clamp 2.5-4.1rem, 1.1): the home H1 only.
- **Headline** (400, clamp 2.25-3rem, 1.1): section headings (H2).
- **Title** (400, 1.25rem): schedule rows, pastor names, list titles.
- **Body** (400, 1.0625rem, 1.65): reading text; measure capped at 68ch (`.reading`).
- **Label** (600, 0.875rem): captions, small metadata, footer column headings.

### Named Rules
**The Two-Face Rule.** Headings use Young Serif (never bolded; it has one weight); everything a visitor reads or taps uses Figtree. Numbers set in the serif use lining figures so phone numbers stay scannable.

## Layout

Container is `max-w-7xl` with 16px / 24px / 32px gutters. Sections breathe at 80px mobile and 112-128px desktop. Desktop uses a 12-column grid with asymmetric splits (5/7, 6/6, 4/8). Below 1024px everything is a single column; the main navigation becomes a hamburger with a height-animated panel. The home hero is full-bleed (min 100dvh) with a left-aligned text block; a glass strip at its foot holds the next gathering (computed from the schedule in Luanda time), the address and the phone number. On phones a fixed Call / Directions bar stays at the bottom of every page.

## Elevation & Depth

Flat by default. Separation comes from color fields and hairlines. The only shadows are a wide, indigo-tinted diffusion under the info strip and the offset hero photo, and a soft dropdown shadow.

### Shadow Vocabulary
- **Strip lift** (`0 30px 60px -30px rgba(40,22,111,0.6)`): the where/when panel.
- **Photo lift** (`0 20px 40px -20px rgba(40,22,111,0.5)`): the overlapping hero photo.
- **Menu lift** (`0 18px 40px -18px rgba(40,22,111,0.35)`): desktop About dropdown.

### Named Rules
**The Tinted Shadow Rule.** Shadows are always indigo-tinted with a soft blur and negative spread; never grey or hard-offset.

## Shapes

Buttons are pills (999px). Photographs 12px, panels 16px, avatars circular. Layout lines are 1px hairlines. No decorative masks or clipped shapes.

## Components

### Buttons
- **Shape:** pill, 48px min height, 12px 24px padding, 600 weight.
- **Primary:** Seal Indigo with white text; hover Indigo Hover.
- **Light:** white with Indigo Deep text, used on indigo grounds.
- **Outline:** 1.5px currentColor border, tinted fill on hover.
- **Active:** `scale(0.98)` with 1px nudge; arrow icon slides 3px on hover.

### Schedule list
Hairline-divided rows: day (muted, small), event (Young Serif title), time (tabular, right-aligned). The main Sunday service is larger.

### Parish list
Hairline rows with a circular face crop, pastor name, parish and place, and a tappable phone number.

### Hero
Full-bleed choir photograph under an indigo scrim (left-heavy on desktop, even on mobile), slow settle animation on the photo, nav floating transparent over it, a glass panel (blur 18px, 1px white-16% border, inset top highlight) carrying live status.

### Navigation
Over the home hero the header is transparent with white text and turns solid paper after 24px of scroll or when the menu opens. Elsewhere: sticky paper bar with a bottom hairline; pill hover/active states; About opens a small dropdown on hover and keyboard focus; "Plan your visit" is the single filled button. Mobile: 44px hamburger, full-width panel with 48px rows and a call button.

### Photo
Rounded frame on an Indigo Mist placeholder; images are webp with intrinsic width/height, lazy-loaded below the fold, and zoom 3.5% on hover.

## Do's and Don'ts

### Do:
- **Do** keep service time, address and phone within the first screen on every page type that sells the visit.
- **Do** use only content that exists in the parish's own materials; show real photographs with their real captions.
- **Do** make every phone, email and address tappable (`tel:`, `mailto:`, map link).
- **Do** respect `prefers-reduced-motion` for reveals, hover zoom, transitions and view transitions.

### Don't:
- **Don't** add a second brand hue, cream grounds, or gradient text.
- **Don't** use three-equal-card icon rows, centered hero stacks, or nested cards.
- **Don't** invent testimonials, statistics, sermons or events the parish has not supplied.
- **Don't** use grey or hard-offset shadows.

**Not canonized from the build:** the decorative "Parishioners" graphic baked into the coordinator's photo file (a content defect pending a clean portrait), and the identical fade-up reveal applied to nearly every section (acceptable but not a house style to extend).
