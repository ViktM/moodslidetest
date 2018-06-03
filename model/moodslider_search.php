<?php

// SQL part of search written in PHP
// Connects to DB
// Prepare SQL - Select data from DB according to $key and value from JS and VIEW (Sliders). Randomly picks 5 (Limited at 5)
// Foreach loop to display the 5 movies' Names and Images
// Calls function by creating $newsearch if GET has data

function search_mood($key, $value) {

    

    $conn = new PDO('mysql:dbname=moodslider;host=localhost', 'root', '');

        
    $sql = $conn->prepare("SELECT * FROM programme_list WHERE ". $key . " = :value ORDER BY RAND() LIMIT 5");

    $sql->bindParam(':value', $value, PDO::PARAM_INT);
    
  
    $sql->execute();
    
    
    
    foreach ($sql->fetchAll() as $programmes): ?>

<div class="col-md-2" >
        <img src="<?php echo $programmes['image']?>" alt="image: <?php echo $programmes['programme_name'];?>" height="320" width="180"/>
        <h4><?php echo $programmes['programme_name'];?></h4>
</div>



        
    <?php endforeach; 


    
}
    

if (!empty($_GET)){
    
    $newsearch = search_mood($_GET['key'], $_GET['value']);
    
}

