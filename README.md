## Synopsis
This project is called Rio's Library. This project enables cataloging books into the library. </br>
In this project, a user can register for a user account. User Account can be defined as a librarian and a bookworm.</br>
A librarian can add, edit, filter books by title, author, genre and library section, return and borrow books. </br>
A bookworm can borrow books, filter books by title, author, genre and library section. </br>
Bookworm users cannot see borrowed books from the book list while Librarians can see borrowed books so that they can tag the book as returned </br>


## Installation
<ul>
<li> Run to cmd : git clone https://github.com/empoyoyoy/GOT.git localdestination </li>
<li> Go to cloned directory ex.  Run to cmd : cd localdestination </li>
<li> Run to cmd : composer install </li>
<li> Setup Database (mysql) for Database  migration </li>
<li> Rename .env.example to .env in under localdestination folder </li>
<li> Update Database connections in .env file (Database name, username, password) </li>
<li> Run to cmd : php artisan key:generate </li>
<li> Run to cmd : php artisan migrate </li>
<li> Run to cmd : php artisan serve </li>
<li> Access localhost URL: for my case its http://127.0.0.1:8000/ </li>
</ul>
</br>
Default user is being set up upon migrating the database  
Librarian <br />
User Name: librarian@riolibrary.com <br />
Password : 1234567 <br />

Bookworm <br />
User Name: bookworm@riolibrary.com <br />
Password : 1234567 <br />

This project is using jquery the author did not include jquery .js in the project environment; thus author only included a link to the updated jquery file https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"



