    <div class="banner">
        <h1>Maths Competition</h1>

        <div class="slides" id="slides">

            <?php 
                $directory = "images/competition";
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
            <p>• Maths Competition</p>
        </div>
    
        <div class="vr"></div>
        
        <p>Every year Takapuna Grammar School offers students opportunities 
        to compete in the Otago Junior Mathematics Competition and Australian Mathematics Competition, 
        as well as the school-based Mathex Competition for year 9 and 10 students.
        A lunch time training session runs on every Tuesday in RN50.</p>

    </div>

    <script>
        setInterval(nextSlide, 4000); // auto slideshow
    </script>