<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Black Theme Form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
    <h2>Form</h2>

    <form action="includes/formhandler.php" method="post">
        <label for="firstname">First Name</label>
        <input required id="firstname" type="text" name="firstname" placeholder="Enter first name">

        <label for="lastname">Last Name</label>
        <input id="lastname" type="text" name="lastname" placeholder="Enter last name">

        <label for="favoritepet">Favorite Pet</label>
        <select id="favoritepet" name="favoritepet">
            <option value="">-- Select your pet --</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="parrot">Parrot</option>
            <option value="rabbit">Rabbit</option>
            <option value="fish">Fish</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
