<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #FFA500;
            text-align: center;
            padding: 10px;
        }
        h1 {
            color: black;
        }
        section {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        h2 {
            color: #FFA500;
        }
        ul, ol {
            margin-left: 20px;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }


    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
   
     
    <div>
    

    <header>
        <h1>The DlavenCe Recipe</h1>
    </header>
    <section>
	<img src="img/p1.jpg" "width="50%" height="400" alt=" The DlavenCe " />
        <h2>Ingredients:</h2>
        <ul>
           <strong> <li>1 pizza dough</li></strong>
            <li>#169 1 cup shredded mozzarella cheese</li>
            <li>4 eggs</li>
			<li>stroberies</li>
            <li>4 slices of bacon</li>
            <li>1/2 cup diced bell peppers</li>
            <li>1/2 cup sliced mushrooms</li>
            <li>Salt and pepper to taste</li>
			<hr>
			<hr align="left" noshade="2" width="400">
        </ul> <br>
    </section>
    <section>
        <h2>Instructions:</h2>
        <ol>
            <li>Preheat your oven to 425°F (220°C).</li>
            <li>Roll out the pizza dough on a baking sheet.</li>
            <li>Spread the tomato sauce evenly over the dough.</li>
            <li>Sprinkle the shredded mozzarella cheese on top.</li>
            <li>In a separate pan, cook the bacon until crispy, then crumble it.</li>
            <li>In the same pan, sauté the diced bell peppers and sliced mushrooms until they soften.</li>
            <li>Sprinkle the cooked bacon and sautéed vegetables over the pizza.</li>
            <li>Make 4 wells in the toppings and crack an egg into each well.</li>
            <li>Season with salt and pepper.</li>
            <li>Bake in the preheated oven for 15-20 minutes or until the egg whites are set.</li>
            <li>Remove from the oven and let it cool for a few minutes.</li>
            <li>Slice and serve your delicious breakfast pizza.</li>
        </ol>
    </section>
    <p>   
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
   <!-- <img src="p4.jpg"  "width="70%" height="500" alt="The DlavenCe" /> -->
    <footer>
        <p> Lets enjoy and share the meals.</p>
    </footer>
    </div>
</body>
</html>
