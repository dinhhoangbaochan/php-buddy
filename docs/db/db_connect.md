# How to connect to a MySQL database?

### `mysqli_connect` built-in function

The first method is to use `mysqli_connect` built-in function of PHP. `mysqli_connect` is a function that mainly uses to connect to a database. The basic syntax of this function is:

```sql
mysql_connect($hostname, $username, $password, $database_name)
```

To simply explain:
- `$hostname` is the host IP of the server where you store your database. If your source code stores the same place with your database, it's simply `localhost`. If you store your database in another server then hostname will be the IP of that server.
- `$username` is the username to connect to your database.
- `$password` is similiar as `$username`.
- `$database_name` is your database name, that's what it is.