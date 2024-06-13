<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Beasiswa</title>
    <style>
        /* Reset some default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        #search-input {
            width: 200px;
            padding: 10px;
            border: 0;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        #search-button {
            padding: 5px 10px;
            font-size: 1em;
            background-color: #6C0C0C;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px;
            color: white;
            box-shadow: 2.5px 2.5px 5px rgba(0, 0, 0, 0.5);
        }

        #search-button:hover {
            background-color: #e0e0e0;

        }

        .scholarship-list {
            margin-bottom: 20px;
           
            
        }

        .scholarship-item {
            width: 800px;
            height: 110px;
            margin-bottom: 20px;
            text-align: left;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 2.5px 2.5px 5px rgba(0, 0, 0, 0.5);
        

        }

        .scholarship-item img {
            width: auto;
            height: auto;
            border-radius: 5px;
            box-shadow: 2.5px 2.5px 5px rgba(0, 0, 0, 0.5);
            
        }

        .scholarship-details {
            margin-left: 20px;
        }

        .scholarship-details h2 {
            font-size: 1.5em;
            margin: 10px 0;
            color: black; /* Mengubah warna tulisan "Beasiswa" menjadi hitam */
        }

        .scholarship-details a {
            color: #6C0C0C; /* Mengubah warna tulisan "Baca selengkapnya" menjadi merah (#6C0C0C) */
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        #load-more {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            background-color: #6C0C0C; /* Mengubah warna background tombol "Tampilkan lagi" menjadi merah (#6C0C0C) */
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        #load-more:hover {
            background-color: #3E0808; /* Warna hover untuk tombol "Tampilkan lagi" */
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="search-bar">
            <input type="text" id="search-input" placeholder="Cari">
            <button id="search-button">Cari</button>
        </section>
        <section class="scholarship-list" id="scholarship-list">
            <div class="scholarship-item">
                <img src="https://via.placeholder.com/100" alt="Gambar Beasiswa">
                <div class="scholarship-details">
                    <h2>Beasiswa</h2>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="scholarship-item">
                <img src="https://via.placeholder.com/100" alt="Gambar Beasiswa">
                <div class="scholarship-details">
                    <h2>Beasiswa</h2>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="scholarship-item">
                <img src="https://via.placeholder.com/100" alt="Gambar Beasiswa">
                <div class="scholarship-details">
                    <h2>Beasiswa</h2>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="scholarship-item">
                <img src="https://via.placeholder.com/100" alt="Gambar Beasiswa">
                <div class="scholarship-details">
                    <h2>Beasiswa</h2>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
        </section>
        <button id="load-more">Tampilkan lagi</button>
    </div>
    <script>
        document.getElementById('load-more').addEventListener('click', function() {
            const scholarshipList = document.getElementById('scholarship-list');

            for (let i = 0; i < 4; i++) {
                const item = document.createElement('div');
                item.className = 'scholarship-item';

                const img = document.createElement('img');
                img.src = 'https://via.placeholder.com/100';
                img.alt = 'Gambar Beasiswa';

                const details = document.createElement('div');
                details.className = 'scholarship-details';

                const title = document.createElement('h2');
                title.textContent = 'Beasiswa';

                const link = document.createElement('a');
                link.href = '#';
                link.textContent = 'Baca selengkapnya';

                details.appendChild(title);
                details.appendChild(link);
                item.appendChild(img);
                item.appendChild(details);
                scholarshipList.appendChild(item);
            }
        });
    </script>
</body>
</html>