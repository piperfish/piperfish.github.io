    <div class="banner">

        <h1>Level 1 Calculus (L1MAC)</h1>
        
        <div class="slides" id="slides">

            <?php 
                $directory = "images/class";
                $images = glob($directory . "/*.jpg");
                
                foreach($images as $image) { // include all images
                    ?>
                        <img class="slide" src="<?php echo $image ?>" alt="class photo">
                    <?php
                }
            ?>

        </div>

        <div class="buttons">
            <button id="prev" onclick="prevSlide()">&lt;</button>
            <button id="next" onclick="nextSlide()">&gt;</button>
        </div>

    </div>

    <div class="blocks">

        <div class="block" onclick="location.href='index.php?page=subpages/1.2_algebra'">
            <h1>1.2</h1>
            <p>Algebra</p>
        </div>        

        <div class="block" onclick="location.href='index.php?page=subpages/1.3_teg'">
            <h1>1.3</h1>
            <p>TEG</p>
        </div>        

        <div class="block" onclick="location.href='index.php?page=subpages/1.6_geometry'">
            <h1>1.6</h1>
            <p>Geometry</p>
        </div>        

    </div>


    <div class="summary">

        <div class="text-left">
            <h2>Course Outline</h2>
            <p>• Level 1 Mathematics with Calculus</p>
        </div>
    
        <div class="vr"></div>
        
        <p>L1MAC is a course with a focus on introducing and developing a broad range of mathematical 
        and statistical skills, concepts and understandings of the Level 6 Mathematics Curriculum in the 
        areas of number strategies and knowledge, patterns and relationships, equations and expressions, 
        shape and transformations.</p>

    </div>

    <script>
        setInterval(nextSlide, 4000); // auto slideshow
    </script>