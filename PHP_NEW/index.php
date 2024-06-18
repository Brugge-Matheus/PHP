<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilizando Input File</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .file-upload {
            position: relative;
            display: inline-block;
        }

        .file-label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-upload.filled .file-label {
            background-color: #28a745;
            /* Cor diferente quando um arquivo é selecionado */
        }

        .file-name {
            margin-left: 10px;
            font-size: 14px;
            color: #333;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <body>
        <div class="file-upload">
            <input type="file" id="fileInput">
            <label for="fileInput" class="file-label">Escolha um arquivo</label>
            <span id="fileName" class="file-name"></span>
        </div>
        <script src="script.js"></script>
    </body>

    </html>

    <script>
        document.getElementById('fileInput').addEventListener('change', function() {
            const fileUpload = document.querySelector('.file-upload');
            const fileName = document.getElementById('fileName');
            if (this.files.length > 0) {
                fileUpload.classList.add('filled');
                fileName.textContent = this.files[0].name;
            } else {
                fileUpload.classList.remove('filled');
                fileName.textContent = '';
            }
        });
    </script>
</body>

</html>