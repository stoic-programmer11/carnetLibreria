<!DOCTYPE html> <html> <head> <title>Carnet de Lector</title> <style>
body {
background-color: white;
color: white;
font-family: Arial, sans-serif;
}

.container {
margin-top: 50px;
}

.card {
background-color: white;
color: black;
border: 2px solid red;
}

.card-header {
background-color: red;
color: white;
}

.card-body {
padding: 20px;
}

.student-photo {
width: 100px;
height: auto;
}
</style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Carnet de Lector
            </div>
            <div class="card-body">
                @if ($student->photo)
                <?php
                $imagePath = public_path('uploads/' . $student->photo);
                $imageData = base64_encode(file_get_contents($imagePath));
                $imageBase64 = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . $imageData;
                ?>
                <img src="{{ $imageBase64 }}" alt="Student Photo" class="student-photo">
                @else
                <div style="width: 100px; height: 100px; border: 1px solid black;"></div>
                @endif

                <p class="card-text">Nombre: {{ $student->name }}</p>
                <p class="card-text">Género: {{ $student->gender }}</p>
                <p class="card-text">Celular: {{ $student->phone }}</p>
                <p class="card-text">Email: {{ $student->email }}</p>

            </div>
        </div>
    </div>
</body>

</html>