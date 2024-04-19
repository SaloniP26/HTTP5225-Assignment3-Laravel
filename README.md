# HTTP5225-Assignment3-Laravel

# Quotify Project

Quotify is a web application for managing and sharing quotes.

## 📝 Table of Contents

- [🚀 Introduction](#-introduction)
- [✨ Features](#-features)
- [🛠️ Setup](#️️-setup)
- [📋 Usage](#️-usage)
- [📷 Images](#-images)
- [👩‍💻 Contributor](#-contributor)

## 🚀 Introduction

Quotify is a Laravel-based web application that allows users to manage and share quotes. Users can create, edit, delete, and view quotes through a user-friendly interface.

## ✨ Features

- Create new quotes
- Edit existing quotes
- Delete quotes
- View list of all quotes
- View individual quote details

## 🛠️ Setup

To run this project locally, follow these steps:

1. **Clone the repository:**

    
    git clone <repository-url>
  

2. **Install dependencies:**

    
    cd Quotify
    composer install
    npm install && npm run dev
    
    
3. **Set up the database:**

    - Create a new MySQL database for the project.
    - Update the `.env` file with your database details:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        

3. **Run migrations and seed the database:**

    
    php artisan migrate --seed
    

4. **Serve the application:**

    
    php artisan serve
    

5. **Access the application:**

    Open your web browser and navigate to `http://localhost:8000`.

## 📋 Usage

- Navigate to the homepage to view all quotes.
- Click on the "Add New Quote" button to create a new quote.
- Click on a quote to view its details.
- Use the edit and delete buttons to modify or remove quotes.

## 📊 Table Name: quotes

Attributes:
- id: Unique identifier for the quotes. (Integer)
- quote: Quotes displayed. (String)
- author: Quote author. (String)
- imgurl: Random image for quotes. (String - URL to the image)

![database](https://github.com/SaloniP26/HTTP5225-Assignment3-Laravel/assets/144495609/3b60f993-f984-4010-a8e3-e6a5d917b53c)


## 📷 Images


![home](https://github.com/SaloniP26/HTTP5225-Assignment3-Laravel/assets/144495609/a18309ad-c482-42b7-9962-58d407d7de23)

![add](https://github.com/SaloniP26/HTTP5225-Assignment3-Laravel/assets/144495609/f0c11a3b-9452-472c-9efb-d2d3c7de2d42)

![edit](https://github.com/SaloniP26/HTTP5225-Assignment3-Laravel/assets/144495609/0bf39acf-78d4-4697-9838-88575b8b6c72)


## 👩‍💻 Contributor

- Saloni Pawar

