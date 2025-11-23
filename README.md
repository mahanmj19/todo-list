# Todo List API

A simple yet scalable **Todo List API** built with Laravel 11.
This project is designed to manage tasks efficiently and is structured to be easily extended in the future.

---

## Features

* Create a Task
* List all Tasks
* Edit a Task
* Delete a Task
* Toggle Task status (Done / Not Done)

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/mahanmj19/todo-list.git
```

2. Navigate to the project folder:

```bash
cd todo-list
```

3. Install dependencies:

```bash
composer install
```

4. Copy `.env` example and configure your environment:

```bash
cp .env.example .env
```

5. Run database migrations:

```bash
php artisan migrate
```

6. Start the development server:

```bash
php artisan serve
```

---

## API Endpoints

| Method | Endpoint           | Description        |
| ------ | ------------------ | ------------------ |
| GET    | /tasks             | List all tasks     |
| POST   | /tasks             | Create a new task  |
| PUT    | /tasks/{id}        | Update a task      |
| DELETE | /tasks/{id}        | Delete a task      |
| PATCH  | /tasks/{id}/toggle | Toggle task status |

---

## Project Roadmap

This project will gradually grow in functionality, including:

* **Task categorization & priorities**
* **User authentication & authorization**
* **Notifications and reminders**
* **More advanced API responses with pagination & filtering**

---

## Frontend

A frontend interface is planned and will connect to this API.
Currently, the frontend is not implemented, but a placeholder repository will be available:

[Frontend Repo (Coming Soon)](https://github.com/mahanmj19/todo-list-frontend)

---

## Contribution

Contributions are welcome! If you want to help, fork the repo and submit a pull request.

---

## License

This project is licensed under the **MIT License**. See the LICENSE file for details.

---

> ⚡ Note: This is a backend-focused project. Frontend will be developed separately and integrated via API.
