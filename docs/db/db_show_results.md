# How to show result from your database
After getting your connection successfully, you will want to `get` something from your database and `show` it to your screen, that's the basic action of a query, in my own explanation. So remember, whenever somebody says to your something like `Oh I queried all the data from table xyz`, you will understand that he `gets` a data from that table to show to the screen.

## `mysqli_query` built-in function

`mysqli_query` is a function where you use to get data from database. Here's its basic syntax:

```PHP
mysqli_query( $connection, $sql );
```

There are 2 arguments here:
- `$connection`: the connect information that you have after using the `mysqli_connect`, refer to [How to connect to a MySQL database?](/docs/db/db_connect.md);
- `$sql`: the query string to get the data.

Now if your `mysqli_query()` call is successful, you will receive an object, if not then you'll receive `FALSE`.

## `mysqli_fetch_[type]` 
`mysqli_fetch` is a kind of functions that you use to `fetch` all the data in different `types`. In PHP, there are 4 types of fetching:
- `mysqli_fetch_array()`.
- `mysqli_fetch_assoc()`.
- `mysqli_fetch_row()`.
- `mysqli_fetch_object()`.