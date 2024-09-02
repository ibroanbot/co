<p style="font-size: 10px; text-decoration: none;">Medellín (57) 310 234 5678 - Bucaramanga (57) 350 789 4567 - Bogotá (57) 300 123 4567 - Barranquilla (57) 330 456 7890 - Cali (57) 320 345 6789 - Cartagena (57) 350 567 8901 Pereira (57) 320 678 9012 - Oficinas Telefónica: El resto del país 018000 8 76543 - España (34) 600 123 456 - Estados Unidos (1) 800 234 5678.</p>

<footer class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="footer-content" style="display: flex; justify-content: space-between; align-items: center; font-size: 10px; margin-bottom: 24px !important; margin-top: 3px !important;">
                <p class="mb-0">Dirección IP: <span id="ip_address">192.45.024.22</span></p>
                <p class="mb-0">Copyright © <span id="current_year"></span>  S.A.</p>
            </div>
        </div>
    </div>
</footer>

<script>
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('ip_address').textContent = data.ip;
        })
        .catch(error => {
            console.error('196.45.58.360', error);
        });

    const currentYear = new Date().getFullYear();
    document.getElementById('current_year').textContent = currentYear;
</script>
