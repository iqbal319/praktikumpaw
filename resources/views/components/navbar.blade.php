<section class="navbar">
    <div class="container">
        <nav>
            <h6>Simple Siakad</h6>
            <ul class="menu">
                <li>
                    <a href="/" {{ $page == "home" ? 'class=active' : "" }}>Data Mahasiswa</a>
                </li>
                <li>
                    <a href="/create" {{ $page == "input" ? 'class=active' : "" }}>Input Data</a>
                </li>
                <li>
                    <a href="/about" {{ $page == "about" ? 'class=active' : "" }}>About Us</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
