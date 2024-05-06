# Simple Note-taking Application
## Project Overview
This is a simple Note-taking application built using Laravel. The application allows users to input their daily notes and manage them efficiently.

## Features
<b>User Authentication: </b>Users can register, login, and logout securely to access their notes.<br>
<b>Note Management:</b> Users can create, edit, and delete notes.
Each note includes a title, content, creation date, and last modified date.<br>
<img src="public\asset\noteTakingDashboard.png" alt="">
<b>CRUD Operations:</b> Implement CRUD operations for managing notes.<br>

#### Create Note
<img src="public\asset\create-note.png" alt="">

#### Save Note
<img src="public\asset\save-note.png" alt="">

#### Read Note
<img src="public\asset\viewNote.png" alt="">

#### Update Note
<img src="public\asset\updateNote.png" alt="">

#### Delete Note
<img src="public\asset\delete-note.png" alt="">
<b>Search Functionality:</b>
Users can search for notes based on titles or content.
<img src="public\asset\searchNote.png" alt="">

<b>User Interface:</b> Utilizes a Bootstrap template from Bootstrap Examples for designing the user interface.
Designed with an intuitive and user-friendly interface for creating, viewing, and managing notes.

## Technologies Used
<b>Laravel:</b> Backend framework for building the application.<br>
<b>Bootstrap: </b>Frontend framework for designing the user interface.<br>
<b>Laravel Breeze:</b> Used for quick setup of authentication.

## Getting Started
<b>Clone the repository: </b>
```bash
git clone 
```
<b> Install dependencies:</b>
```bash
composer install 
```
<b>Set up environment variables: </b>
Rename .env.example to .env and configure database settings.<br>
<b> Generate application key:</b>
```bash
 php artisan key:generate
```
<b>Run migrations: </b>
```bash
php artisan migrate
php artisan serve
```


## Usage
Register or login to access the application.
Once logged in, you can create, edit, delete, and search for notes.
Notes are displayed with their titles, creation dates, and last modified dates.
Clicking on a note allows you to view and edit its content.
Credits
Bootstrap Examples - For the Bootstrap template used in the UI design.
