<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/logo/Logo Kurflex.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item2">
                    <a class="nav-link {{ ($title === 'Kurikulum') ? 'active' : '' }}" href="/kurikulum">Kurikulum</a>
                </li>
                <li class="nav-item3">
                    <a class="nav-link {{ ($title === 'Materi') ? 'active' : '' }}" href="/materi">Materi</a>
                </li>
                <li class="nav-item4">
                    <a class="nav-link {{ ($title === 'LKS') ? 'active' : '' }}" href="/lks">LKS</a>
                </li>
                <li class="nav-item5">
                    <a class="nav-link {{ ($title === 'Inovasi') ? 'active' : '' }}" href="/inovasi">Inovasi</a>
                </li>
            </ul>

            <form class="form-inline ml-250">
                <a <button class="btn btn-outline-warning" href="/user" margin-left>User</button></a>
            </form>
    </div>
</nav>