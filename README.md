<# Twinkle Tales – Backend APIs

Twinkle Tales is a **Laravel-based backend project** designed for an interactive educational platform where kids explore space missions, choose roles (like pilot or astronaut), and play quiz-based levels.
This backend powers all the game logic, user progress tracking, and APIs consumed by the frontend.

---

## 🚀 Features

* **Guest Registration with Unique Code** – kids join without email/password, using a generated guest code.
* **Role Selection** – assign roles (Pilot, Farmer, Astronaut, etc.) with descriptions and role videos.
* **Quizzes & Levels** – question/answer system for each level, stored in database.
* **Progress Tracking** – current level and score are stored per user.
* **API-Ready** – all data is served through clean REST APIs, ready to integrate with any frontend.

---

## 📌 API Endpoints

### Authentication

* `POST /api/register` → Register a new guest user.
* `POST /api/login` → Login with a guest code.

### Roles

* `GET /api/roles` → Fetch all available roles.
* `POST /api/users/{user}/choose-role` → Assign a role to a user.

### Quizzes

* `GET /api/quiz/{level}` → Get quiz questions for a specific level.

### Progress

* `POST /api/progress/update` → Update user progress (level/score).
* `GET /api/progress/{user_id}` → Retrieve progress for a user.

---

## ⚙️ Setup (Quick Start)

1. Clone this repository & install dependencies:

   ```bash
   git clone https://github.com/amiramahmoud77/twinkle-tales.git
   cd twinkle-tales
   composer install
   ```

2. Configure your `.env` file for database connection, then run:

   ```bash
   php artisan migrate --seed
   ```

3. Start the server locally:

   ```bash
   php artisan serve
   ```

   API will be available at: `http://127.0.0.1:8000/api/...`

---

## 📝 Notes

* The project is backend-only; frontend will consume these APIs.
* Designed and built with a focus on **clean architecture** and **API-first approach**.
## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
