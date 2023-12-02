
<form class="relative" role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <input class="font-semibold rounded-lg w-full border shadow-lg border-primary py-3 pr-7 pl-2" type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search Our Blog...">
    <button>
        <svg class="absolute top-4 right-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 27l7.5-7.5M28 13a9 9 0 1 1-18 0a9 9 0 0 1 18 0Z"/></svg>
    </button>
</form>

