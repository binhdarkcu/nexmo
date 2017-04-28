<!-- sidebar content -->
<div class="col-xs-12 col-md-3">
    <aside id="nav-aside" class="sidebarfloat">
        <ul class="nav nav-sidebar">
            <li class="navhead">

                <form action="https://docs.nexmo.com/search" method="post" class="search-form" iaf-plugged="true">
                    <input type="search" placeholder="Search..." name="q" iaf-plugged="true" iaf-maxresults="1000" iaf-regxpag="100" iaf-autocomplete="" autocomplete="off">
                    <input type="submit" value="Go" iaf-plugged="true">
                </form>
                <?php echo wpb_list_child_pages();?>
                
            </li>
        </ul>
    </aside>
</div>
