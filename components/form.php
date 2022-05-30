
<form action="/components/form.php" method="get">
    Name: <input type="text" name="fullname" placeholder="Required">
<input type="submit">
</form>

Your name is: <?php echo $_GET["fullname"]; ?>