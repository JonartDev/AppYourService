<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">

    <div class="sidebar-header">
        <div class="d-flex justify-content-center">
            <div class="logo">
                <a href="/"><img src="assets/images/ayslogo.jpg" style="width: 150px; height: 80px;" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item {{ Request::is('dashboard') ? 'active':''}}">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('memberlist') ? 'active':''}}">
                <a href="/memberlist" class='sidebar-link'>
                    <i class="fas fa-users"></i>
                    <span>Member List</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('efranchiselist') ? 'active':''}}">
                <a href="/efranchiseelist" class='sidebar-link'>
                    <i class="fas fa-user-tie"></i>
                    <span>E-Franchisee List</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('manpower') ? 'active':''}}">
                <a href="/manpower" class='sidebar-link'>
                    <i class="fas fa-users-cog"></i>
                    <span>Approved Manpower</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('rider') ? 'active':''}}">
                <a href="/rider" class='sidebar-link'>
                    <i class="fas fa-motorcycle"></i>
                    <span>Approved Rider</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('store') ? 'active':''}}">
                <a href="/store" class='sidebar-link'>
                    <i class="fas fa-store"></i>
                    <span>Approved Store</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('payoutprocessing') ? 'active':''}}">
                <a href="/payoutprocessing" class='sidebar-link'>
                    <i class="fas fa-money-check"></i>
                    <span>Payout Processing</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('reports') ? 'active':''}}">
                <a href="/reports" class='sidebar-link'>
                    <i class="fas fa-file"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/logout" class='sidebar-link' onclick="return confirm('Are You sure you want to logout?');">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            
            
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

</div>
</div>

