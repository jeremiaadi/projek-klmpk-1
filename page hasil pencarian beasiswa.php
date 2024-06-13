<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Grid</title>
    <style>
        body {
            font-family:  Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .search-button {
            padding: 10px 110px;
            font-size: 16px;
            border: 1px solid #6C0C0C;
            border-radius: 5px;
            background-color: #6C0C0C;
            cursor: pointer;
            margin-bottom: 20px;
            color:white;
            box-shadow: 1px 1px 5px black
            
        }

        .content {
            width: 80%;
            text-align: center;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .item {
            text-align: center;
            width: 250px; /* Increased width to fit larger photos */
        }

        .photo {
            height: 200px; /* Increased height */
            width: 250px; /* Increased width */
            margin-bottom: 10px;
            border: px solid #6C0C0C;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px; /* Adjusted font size */
            border-radius: 5px;
            box-shadow: 1px 1px 5px black
        }

        .title {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 18px; /* Adjusted font size */
        }

        .read-more {
            color: #6C0C0C;
            cursor: pointer;
            font-size: 16px; /* Adjusted font size */
        }

        .load-more {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #6C0C0C;
            border-radius: 25px;
            background-color: #6C0C0C;
            cursor: pointer;
            color:white;
            box-shadow: 1px 1px 5px black
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="search-button">Search</button>
        <div class="content">
            <h2>Menampilkan hasil semua karier/lowangan pekerjaan</h2>
            <div class="grid" id="photoGrid">
                <!-- Initial 3 photos -->
                <div class="item">
                    <div class="photo">foto</div>
                    <div class="title">Judul</div>
                    <div class="read-more">Baca selengkapnya</div>
                </div>
                <div class="item">
                    <div class="photo">foto</div>
                    <div class="title">Judul</div>
                    <div class="read-more">Baca selengkapnya</div>
                </div>
                <div class="item">
                    <div class="photo">foto</div>
                    <div class="title">Judul</div>
                    <div class="read-more">Baca selengkapnya</div>
                </div>
            </div>
            <button class="load-more" id="loadMoreButton">Tampilkan lagi</button>
        </div>
    </div>
    <script>
        const loadMoreButton = document.getElementById('loadMoreButton');
        const photoGrid = document.getElementById('photoGrid');

        loadMoreButton.addEventListener('click', function() {
            for (let i = 0; i < 3; i++) {
                const item = document.createElement('div');
                item.classList.add('item');
                
                const photo = document.createElement('div');
                photo.classList.add('photo');
                photo.textContent = 'foto';
                
                const title = document.createElement('div');
                title.classList.add('title');
                title.textContent = 'Judul';
                
                const readMore = document.createElement('div');
                readMore.classList.add('read-more');
                readMore.textContent = 'Baca selengkapnya';
                
                item.appendChild(photo);
                item.appendChild(title);
                item.appendChild(readMore);
                
                photoGrid.appendChild(item);
            }
            // Scroll to the bottom of the page after adding new photos
            window.scrollTo(0, document.body.scrollHeight);
        });
    </script>
</body>
</html>