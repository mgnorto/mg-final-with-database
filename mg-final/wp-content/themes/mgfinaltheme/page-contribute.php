<?php while (have_posts()) : the_post(); ?>
  <h1 class="title">Have a Conspiracy to Contribute? Fill out this form!</h1>
<div class="contribute-form">
    <form name="contribute-form" action="javascript:submitForm();">
        <span>Conspiracy Name/Topic:</span><br><input type="text" name="topic"><br><br>
        <span>Image (please include a related image URL): </span><br><input name="img" type="text"><br><br>
        <span>Theories:<br><textarea name="theories"></textarea></span><br><br>
        <input type="submit">        
    </form>
</div>
<div class="submission"></div>



<?php endwhile; ?>