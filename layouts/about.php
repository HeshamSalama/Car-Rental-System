

<section class="about" id="About">
            <div class="container">
                <?php
echo '
<h2 class="text-left" style="cursor:pointer;">
The easiest way to rent cars Online <h1 class="text-left">Pick your car now</h2>
</h2>';
                        ?>
		<?php
			include'Models/Database.php';
			$file = "db/db_connect.php";
			$DatabaseObject = new Database($file);
			$query = "Select * from url where id = 1";

			if($result = mysqli_query($DatabaseObject->connection,$query))
{
			$row = mysqli_fetch_assoc($result);
echo'

	<h1 class="title2 title">'.$row["title"].'</h1>
                <div class="line"></div>
                <p class="lead text">
                    '.$row["text"].'
                </p>
		';
}
?>

            </div>
        </section>
