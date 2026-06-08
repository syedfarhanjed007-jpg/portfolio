<div align="center">
  <br/>
  <pre style="font-family: 'JetBrains Mono', monospace; background: #000; color: #00FF41; padding: 20px; border: 1px solid rgba(0,255,65,0.3); border-radius: 8px; text-align: left; display: inline-block;">
    <span style="color: #00cc33;">&gt; </span>git clone https://github.com/syedfarhanjed007-jpg/portfolio
    <span style="color: #00cc33;">&gt; </span>cd portfolio
    <span style="color: #00cc33;">&gt; </span>open index.html
    <span style="color: #00cc33;">&gt; </span>_SYSTEM INITIALIZED_
    <span style="color: #00cc33;">&gt; </span>_WELCOME TO MY PORTFOLIO_
  </pre>
  <br/>
  <h1 align="center">SYED FARHAN</h1>
  <p align="center">
    <strong>AI Engineer · Full-Stack Developer · Creator of Sifra</strong>
  </p>
  <p align="center">
    <a href="https://farhan-29.builds.syeds.shop"><strong>🌐 LIVE DEMO →</strong></a>
  </p>
  <br/>
</div>

---

## Overview

Hacker-terminal themed portfolio featuring:

- **Matrix Code Rain** — Canvas-based katakana/alphanumeric falling characters
- **Glassmorphism Panels** — Terminal-style UI with backdrop blur and neon glow
- **Custom Cursor** — Green dot + expanding ring with magnetic hover
- **Typewriter Effect** — Cycling role titles with typing/deleting animation
- **Scroll Reveals** — IntersectionObserver-triggered staggered animations
- **Skill Progress Bars** — Animated bars that fill on scroll
- **Counter Animation** — Stat numbers count up when visible
- **Neon Glow & Flicker** — CSS keyframe animations for atmospheric effects
- **Scanline Overlay** — CRT monitor scanline effect
- **Responsive** — Works on mobile and desktop

## Tech Stack

| Technology | Purpose |
|------------|---------|
| HTML5 | Structure |
| CSS3 | Styling, animations, glassmorphism, responsive layout |
| JavaScript (Vanilla) | Matrix rain canvas, scroll effects, typewriter, cursor |
| Canvas API | Matrix code rain animation |
| IntersectionObserver | Scroll-triggered reveals and animations |

Zero frameworks. No dependencies except Google Fonts.

## Sections

| Section | Content |
|---------|---------|
| **Hero** | Name, typewriter subtitle, stat counters, system info panel |
| **About** | Terminal bio (`cat bio.txt`), contact info panel |
| **Skills** | Grid of 9 skills with animated progress bars |
| **Projects** | 3 featured projects with terminal-style cards |
| **Contact** | Terminal contact window + message form |

## Project Structure

```
portfolio/
├── index.html           # Single-page application (all CSS + JS inline)
├── vid1.mp4             # Background video assets
├── vid2.mp4
├── ...
├── hero-video.mp4
├── avatar.png           # Profile picture
└── README.md            # This file
```

## Local Development

```bash
# Clone the repo
git clone https://github.com/syedfarhanjed007-jpg/portfolio.git

# Open directly in browser (no build step needed)
open index.html

# Or serve locally with Python
python3 -m http.server 8000
# Visit http://localhost:8000
```

## License

MIT © Syed Farhan
