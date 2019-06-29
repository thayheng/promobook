<aside class="main-sidebar" id="sidebar-wrapper">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href={{ route('AllPostControllerAdmin.index') }}>
                    <i class="fa fa-pencil"> </i> <span>All Posts</span>
                </a>
            </li>
            <li>
                <a href={{ route('newpostadmin') }}>
                    <i class="glyphicon glyphicon-plus"> </i> <span>New Posts</span>
                </a>
            </li>
            <li>
                <a href={{ route('CategoryController.index') }}>
                    <i class="fa fa-list-ol"> </i> <span>Categories</span>
                </a>
            </li>
            <li>
                <a href={{ route('SponsorController.index') }}>
                    <i class="fa fa-support"> </i> <span>Sponsors</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
