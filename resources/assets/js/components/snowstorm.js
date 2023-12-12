import { hasElement } from './../helpers/general.js'

(function() {
  window.addEventListener('DOMContentLoaded', () => {
    if ( !hasElement('#snowstorm') ) return

    requestFrame();

    // Set variables
    let canvasElem = document.getElementById('snowstorm');
    let flakes = [];
    let canvas = canvasElem;
    let ctx = canvasElem.getContext('2d');
    let flakeCount = window.innerWidth <= 1024 ? 15 : 35;
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    startAnimation();
    
    // Set event listeners
    window.addEventListener('resize', function() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });

    function requestFrame() {
      const requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
      function(callback) {
          window.setTimeout(callback, 1000 / 60);
      };

      window.requestAnimationFrame = requestAnimationFrame;
    }

    function flakeAttributes() {
      return {
        opacity : (Math.random() * 0.065),
        speed: (Math.random() * 0.15),
        size: (Math.random() * 50) + 20,
        x: Math.floor(Math.random() * canvas.width),
        y: Math.floor(Math.random() * canvas.height),
        stepSize: (Math.random()) / 30,
        step: 0,
        velX: 0
      }
    }

    function startAnimation() {
      for (let i = 0; i < flakeCount; i++) {

        // Create each snowflake with its attributes
          const attrs = flakeAttributes();

          flakes.push({
            speed: attrs['speed'],
            velY: attrs['speed'],
            velX: attrs['velX'],
            x: attrs['x'],
            y: attrs['y'],
            size: attrs['size'],
            stepSize: attrs['stepSize'],
            step: attrs['step'],
            opacity: attrs['opacity'],
        });
      }

      snow();
    }

    function snow() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      for (let i = 0; i < flakeCount; i++) {
          let flake = flakes[i];

          ctx.fillStyle = 'rgba(255,255,255,' + flake.opacity + ')';
          flake.y += flake.velY;
          flake.x += flake.velX;

          // If the flakes reach the bottom, restart the loop from the top
          if (flake.y >= canvas.height) reset(flake);

          ctx.beginPath();
          ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
          ctx.fill();
      }
      requestAnimationFrame(snow);
    }

    // Readds the flake at the top of the canvas
    function reset(flake) {
      const attrs = flakeAttributes();

      flake.x = attrs['x'];
      flake.y = attrs['y'];
    }
  });
})()
