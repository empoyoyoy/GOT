## Synopsis
This Project is called Rio's Library this project is enabled for cataloging books into the library; 
In this Project A User can register for its User account; User Account is defined as a Librarian and a Bookworm
A Librarian can add/edit/update return and borrow books. 
A Bookworm can borrow books and cannot see borrowed books from the book list

## Motivation


## Installation

Run to cmd : git clone https://github.com/empoyoyoy/GOT.git localdestination

Go to cloned directory ex. cd localdestination
Run to cmd : composer install
Create Database for Database  migration
Rename .env.example to .env in under localdestination folder
Update Database connections in .env file (Database name, username, password)
Run to cmd : php artisan key:generate
Run to cmd : php artisan migrate
Run to cmd : php artisan serve

Access localhost URL: for my case its http://127.0.0.1:8000/

Default user is being set up 
Librarian
User Name: librarian@riolibrary.com
Password : 1234567

Bookworm
User Name: bookworm@riolibrary.com
Password : 1234567

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)
