
<div align="center">
  <h1>Twinkle Tales – Backend APIs</h1>
  <p><strong>Interactive Educational Space Adventure Platform</strong></p>
  
  <p style="max-width: 700px; margin: 20px auto; font-size: 1.1em;">
    Laravel-powered backend for an engaging kids' learning game where children explore space missions, choose exciting roles (Pilot, Astronaut, Farmer...), answer quizzes, and advance through levels.
  </p>

 
  <div style="margin: 20px 0;">
    <img src="https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
    <img src="https://img.shields.io/badge/PHP-8.2-blue?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
    <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
    <img src="https://img.shields.io/badge/REST%20API-Ready-green?style=for-the-badge" alt="REST API">
  </div>

  <p><strong>Quick Demo</strong></p>
  <img src="Twinkle-ScreenShots/1.png" alt="Twinkle Tales Game Demo" width="600" style="border-radius: 16px; box-shadow: 0 12px 40px rgba(0,0,0,0.3); margin: 20px 0;">

  <br><br>
</div>

## 🌟 Features

- Guest registration with unique code (no email/password needed for kids)
- Role selection (Pilot, Astronaut, Farmer...) with descriptions & videos
- Level-based quizzes with questions and answers
- Real-time progress tracking (current level + score)
- Clean RESTful API endpoints ready for any frontend (Flutter, React, etc.)

## 📌 Main API Endpoints

| Method | Endpoint                        | Description                              |
|--------|---------------------------------|------------------------------------------|
| POST   | /api/register                   | Register new guest user with unique code |
| POST   | /api/login                      | Login using guest code                   |
| GET    | /api/roles                      | Get all available roles                  |
| POST   | /api/users/{user}/choose-role   | Assign a role to user                    |
| GET    | /api/quiz/{level}               | Get quiz questions for a level           |
| POST   | /api/progress/update            | Update user level & score                |
| GET    | /api/progress/{user_id}         | Get user progress                        |

## 🚀 Quick Setup

1. **Clone & install**
   ```bash
   git clone https://github.com/amiramahmoud77/twinkle-tales.git
   cd twinkle-tales
   composer install
   ```

2. **Configure .env**
   ```bash
   cp .env.example .env
   ```
   Update database credentials:
   ```env
   DB_DATABASE=twinkle_tales
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Run migrations & seed**
   ```bash
   php artisan key:generate
   php artisan migrate --seed
   ```

4. **Start server**
   ```bash
   php artisan serve
   ```
   API base URL: **http://127.0.0.1:8000/api**

## 📸 Screenshots

### Highlights
<div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin: 30px 0;">
  <img src="Twinkle-ScreenShots/1.png" alt="Twinkle Tales Screenshot 1" width="320" style="border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.2);">
  <img src="Twinkle-ScreenShots/2.png" alt="Twinkle Tales Screenshot 2" width="320" style="border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.2);">
  <img src="Twinkle-ScreenShots/3.png" alt="Twinkle Tales Screenshot 3" width="320" style="border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.2);">
</div>

### More Screenshots
<div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: center;">
  <img src="Twinkle-ScreenShots/4.png" alt="Screenshot 4" width="280" style="border-radius: 10px;">
  <img src="Twinkle-ScreenShots/5.png" alt="Screenshot 5" width="280" style="border-radius: 10px;">
  <img src="Twinkle-ScreenShots/6.png" alt="Screenshot 6" width="280" style="border-radius: 10px;">
  <!-- أضيفي باقي الصور هنا بنفس الطريقة -->
</div>

## 🛠 Tech Stack

- Laravel 12 (PHP 8.2)
- MySQL Database
- Eloquent ORM
- RESTful API
- Composer for dependencies


















