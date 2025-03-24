// Este script inserta el menú de navegación en la página
document.querySelector('nav').innerHTML = `
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html?access=plazadeespana07/12/2024">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="historia.html">Nuestra Historia</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
                <li class="nav-item"><a class="nav-link" href="anecdotas.html">Anécdotas</a></li>
                <li class="nav-item"><a class="nav-link" href="extras.html">Extras</a></li>
            </ul>
        </div>
    </div>
`;
