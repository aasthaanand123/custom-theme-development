<form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="searchform" autocomplete="off">
    <label for="search"></label>
    <input type="text" name="s" id="search" value="<?php echo the_search_query();?>" placeholder="What to bake today!" class="fredericka" required/>
    <button type="submit" class="fredericka">Search</button>
</form>