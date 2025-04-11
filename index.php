<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aarav & Meera's Wedding Invitation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 🎉 Welcome Overlay -->
<div id="welcomeOverlay" class="position-fixed top-0 start-0 w-100 h-100 bg-white d-flex flex-column justify-content-center align-items-center" style="z-index:9999;">
  <h2 class="mb-4 text-center px-3">Aarav ❤️ Meera's Wedding Invitation</h2>
  <button id="startBtn" class="btn btn-lg btn-pink px-4 py-2 rounded-pill shadow">Tap to Begin the Celebration</button>
</div>

<!-- 🎊 Main Content -->
<div class="container py-5 text-center" id="mainContent">
  <h1 class="mb-4">You're Invited!</h1>
  <p class="lead">Join us in celebrating the love story of Aarav & Meera 💍</p>

  <!-- 💑 Images -->
  <div class="row g-4 my-4">
    <div class="col-md-3 col-6"><img src="images/img1.png" class="img-fluid rounded shadow" alt="Couple 1"></div>
    <div class="col-md-3 col-6"><img src="images/img2.png" class="img-fluid rounded shadow" alt="Couple 2"></div>
    <div class="col-md-3 col-6"><img src="images/img3.png" class="img-fluid rounded shadow" alt="Couple 3"></div>
    <div class="col-md-3 col-6"><img src="images/img4.png" class="img-fluid rounded shadow" alt="Couple 4"></div>
  </div>

  <!-- 📅 Event Details -->
  <div class="card shadow p-4 mb-3">
    <h3 class="text-pink">💚 Mehendi</h3>
    <p>March 12th, 2025 | 4 PM onwards | Aarav's Residence</p>
  </div>

  <div class="card shadow p-4 mb-3">
    <h3 class="text-pink">💛 Haldi</h3>
    <p>March 13th, 2025 | 10 AM onwards | Meera's Residence</p>
  </div>

  <div class="card shadow p-4 mb-3">
    <h3 class="text-pink">💖 Wedding Reception</h3>
    <p>March 14th, 2025 | 7 PM onwards | Grand Lotus Banquet, Pune</p>
  </div>
</div>

<!-- 🎧 Music -->
<audio id="weddingSong" loop>
  <source src="song1.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<script src="script.js"></script>
</body>
</html>
