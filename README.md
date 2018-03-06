## Synopsis
This Project is called Rio's Library this project is enabled for cataloging books into the library; <br />
In this Project A User can register for its User account; User Account is defined as a Librarian and a Bookworm <br />
A Librarian can add/edit/update, filter books by title,author,genre and library section, return and borrow books. <br />
A Bookworm can borrow books, filter books by title,author,genre and library section; <br />
Bookworm users cannot see borrowed books from the book list

## Motivation


## Installation

Run to cmd : git clone https://github.com/empoyoyoy/GOT.git localdestination <br />
Go to cloned directory ex.  Run to cmd : cd localdestination <br />
Run to cmd : composer install <br />
Setup Database  for Database  migration <br />
Rename .env.example to .env in under localdestination folder <br />
Update Database connections in .env file (Database name, username, password) <br />
Run to cmd : php artisan key:generate <br />
Run to cmd : php artisan migrate <br />
Run to cmd : php artisan serve <br />

Access localhost URL: for my case its http://127.0.0.1:8000/ <br />
Default user is being set up upon migrating the database  <br />
Librarian <br />
User Name: librarian@riolibrary.com <br />
Password : 1234567 <br />

Bookworm <br />
User Name: bookworm@riolibrary.com <br />
Password : 1234567 <br />

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)
