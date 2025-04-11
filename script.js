 window.addEventListener('load', () => {
    const startBtn = document.getElementById("startBtn");
    const overlay = document.getElementById("welcomeOverlay");
    const audio = document.getElementById("weddingSong");
  
    const startTime = 07; // in seconds
    const endTime = 56;   // in seconds
  
    startBtn.addEventListener("click", () => {
      overlay.remove();
  
      // Set song to start from 30s
      audio.currentTime = startTime;
  
      audio.play().catch(err => {
        alert("Tap again to play the music.");
        console.error("Audio Play Error: ", err);
      });
  
      // Loop between 30s and 90s
      audio.addEventListener("timeupdate", () => {
        if (audio.currentTime >= endTime) {
          audio.currentTime = startTime;
          audio.play();
        }
      });
    });
  });
  
  