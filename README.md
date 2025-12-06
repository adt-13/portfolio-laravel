# Adity Abdullah – AI & Embedded ML Portfolio (Laravel)

This is a simple portfolio website built with **Laravel**, **HTML**, **CSS**, and a bit of **JavaScript** as part of a Web Engineering course.

The site is not about web development itself, but about my interests in:

- Artificial Neural Networks (ANN)
- Spiking Neural Networks (SNN)
- Embedded / edge AI on microcontrollers (ESP32-S3)
- Continual / lifelong learning on-device

## Features

- Dark themed portfolio layout with separate pages:
  - Home
  - About
  - Projects
  - Skills
  - Contact
- Hero section with circular profile photo
- Project descriptions for:
  - Content-based movie recommendation system (Python + Streamlit)
  - Low-power cardiac arrhythmia detection on ESP32-S3 (SNN vs ANN)
  - Continual-learning image classifier on ESP32-S3 with OV2640 camera
- Simple contact form (front-end only)

## Tech Stack

- PHP 8+ / Laravel
- Blade templates
- HTML5, CSS3, basic JavaScript
- (Backend ML work done separately in Python)

## Running Locally

```bash
# install PHP dependencies
composer install

# copy environment file (if needed)
cp .env.example .env

# generate app key
php artisan key:generate

# run development server
php artisan serve
