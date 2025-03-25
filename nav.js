// nav.js
document.querySelector('nav').innerHTML = `
<div class="container-fluid">
    <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-center w-100 gap-2">
            <li class="nav-item">
                <a class="nav-link btn btn-rosa" 
                   href="index.html?access=plazadeespana07/12/2024">
                    <i class="fas fa-home"></i> Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-rosa" href="historia.html">
                    <i class="fas fa-heart"></i> Historia
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-rosa" href="galeria.html">
                    <i class="fas fa-images"></i> Galería
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-rosa" href="extras.html">
                    <i class="fas fa-gift"></i> Extras
                </a>
            </li>
        </ul>
    </div>
</div>`;