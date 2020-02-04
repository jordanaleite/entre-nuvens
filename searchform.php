<form class="form-inline justify-content-center" method="get" id="search" action="<?php bloginfo('url'); ?>/">
  <div class="w-100">
      
    <input placeholder="quero saber..." class="form-control form-menu" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <button class="btn btn-menu" type="submit" id="searchsubmit" value="Search"><div class="icon-search"></div></button>
      
  </div>
</form>
