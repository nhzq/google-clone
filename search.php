<?php  
    
    if (isset($_GET['term'])) {
        $term = $_GET['term'];
    } else {
        exit("You must enter a search term");
    }

    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    } else {
        $type = "sites";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Doodle</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-content">
                <div class="logo-container">
                    <a href="index.php">
                        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" />
                    </a>
                </div>

                <div class="search-container">
                    <form action="search.php" method="GET">
                        <div class="search-bar-container">
                            <input class="search-box" type="text" name="term">
                            <button class="search-button">
                                <img src="assets/images/icons/search.png" style="">
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabs-container">
                <ul class="tab-list">
                    <li class="<?php echo $type == 'sites' ? 'active' : ''; ?>">
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li class="<?php echo $type == 'images' ? 'active' : ''; ?>">
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                            Images
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>