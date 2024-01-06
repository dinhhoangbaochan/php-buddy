# How to connect to a MySQL database?

There are 2 methods: Procedural and Object Oriented (OOP).

## Procedural Method
It's the basic method to connect to a database in PHP, using built-in functions.

### Steps

To connect to a MySQL database, you should:
1. Use `mysqli_connect` to connect to an existing database, remember to use the correct information to fill the arguments (take a look at the quick explanation I write below.)
2. Use `mysqli_connect_error` to check if the connection you just made is successful or not. 

## `mysqli_connect` built-in function

The first method is to use `mysqli_connect` built-in function of PHP. The name says it all, `mysqli_connect` is a function that uses to connect to a database. The basic syntax of this function is:

```sql
mysqli_connect($hostname, $username, $password, $database_name)
```

To simply explain:
- `$hostname` is the host IP of the server where you store your database. If your source code stores the same place with your database, it's simply `localhost`. If you store your database in another server then hostname will be the IP of that server.
- `$username` is the username to connect to your database.
- `$password` is similiar as `$username`.
- `$database_name` is your database name, that's what it is.

## `mysqli_connect_error` builtin-function
This function is a built-in function which is used to return an error description of the last connection error, if there is any error at all. So to speak, you just use this function below your connection and if it fails, you will receive an error message. The syntax:

```sql
mysqli_connect_error();
```

## Example

If you are using XAMPP to try PHP on your local machine, you could try to use the connect information like this:

```PHP
$db_host = "localhost";
$db_usrname = "root";
$db_passwrd = "root";
$db_name = "my_database";

$conn = mysqli_connect($db_host, $db_usrname, $db_passwrd, $db_name);

// If there's any error, show it on the screen, and stop your program.
if ( mysqli_connect_error() ) {
  echo mysqli_connect_error();
  exit;
}

// Otherwise, the code below this will run.
```

## Object Oriented Programming Method
