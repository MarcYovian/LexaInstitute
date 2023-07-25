<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/admin/dashboard">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/admin/articles">
                        <i class="fa-solid fa-newspaper"></i>
                        Artikel
                    </a>
                </li>
                <?php if ($user['isAdmin'] == 0) : ?>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/admin/register">
                            <i class="fa-solid fa-user"></i>
                            Add Admin
                        </a>
                    </li>
                <?php endif; ?>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/admin/logout">
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>