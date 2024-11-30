    const toggleButton = document.getElementById('toggle-sidebar');
    const sidebar = document.getElementById('sidebar');

    toggleButton.addEventListener('click', function() {
        // Toggle class untuk menyempitkan/merentangkan sidebar
        sidebar.classList.toggle('shrunk');
        
        // Ganti simbol tombol dari << ke >>
        if (sidebar.classList.contains('shrunk')) {
            toggleButton.innerHTML = '&#x00bb;';  // Tombol ">>" untuk memperbesar
        } else {
            toggleButton.innerHTML = '&#x00ab;';  // Tombol "<<" untuk memperkecil
        }
    });
