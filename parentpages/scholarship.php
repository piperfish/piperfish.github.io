    <div class="banner">

        <h1>Scholarship Calculus</h1>

        <div class="slides" id="slides">

            <?php 
                $directory = "images/scholarship";
                $images = glob($directory . "/*.jpg");
                
                foreach($images as $image) {
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

    <div class="summary">

        <div class="text-left">
            <h2>Summary</h2>
            <p>• Scholarship Calculus</p>
        </div>
    
        <div class="vr"></div>
    
        <p>Scholarship Calculus is an official NZQA examination that challenges 
        high-level critical thinking, abstraction and generalisation, application 
        of knowledge in complex situations. Questions will be set in the areas of: 
        patterns and relationships, equations and expressions. Our school offers a 
        tutorial programme every Wednesday/Thursday after school for about an hour.</p>

    </div>

    <script>
        setInterval(nextSlide, 4000); // auto slideshow
    </script>