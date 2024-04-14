    <div class="banner">
        
        <h1>Level 2 Calculus (L2MAC)</h1>

        <div class="slides" id="slides">

            <?php 
                $directory = "images/class";
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

    <div class="blocks">

        <div class="block" onclick="location.href='index.php?page=subpages/2.6_algebra'">
            <h1>2.6</h1>
            <p>Algebra</p>
        </div>        

        <div class="block" onclick="location.href='index.php?page=subpages/2.7_calculus'">
            <h1>2.7</h1>
            <p>Calculus</p>
        </div>        

    </div>

    <div class="summary">

        <div class="text-left">
            <h2>Course Outline</h2>
            <p>• Level 2 Mathematics with Calculus</p>
        </div>
    
        <div class="vr"></div>
        
        <p>L2MAC covers two of the NCEA Level 2 Mathematics externally assessed standards and 
        two internally assessed standards. It is possible to obtain a maximum of 16 credits. By the
        end of this course, students will have developed sufficient knowledge and skills to solve problems 
        by applying algebraic, calculus, graphical and trigonometric methods.</p>

    </div>

    <script>
        setInterval(nextSlide, 4000); // auto slideshow
    </script>