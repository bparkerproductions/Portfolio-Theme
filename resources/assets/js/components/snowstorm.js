import Helpers from './../helpers/general.js'

(function() {

  if ( !Helpers.hasElement('#snowstorm') ) return

  document.getElementById('snowstorm');
  requestFrame();

  // Set variables
  let canvasElem = document.getElementById('snowstorm');
  let flakes = [];
  let canvas = canvasElem;
  let ctx = canvasElem.getContext('2d');
  let flakeCount = getFlakeCount();
  let mX = -100;
  let mY = -100;
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  startAnimation();
  setEventListener();

  function getFlakeCount() {
    let isSmaller = window.innerWidth <= 1024;
    return isSmaller ? 10 : 20;
  }

  function requestFrame() {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };

    window.requestAnimationFrame = requestAnimationFrame;
  }

  function setEventListener() {
    canvas.addEventListener('mousemove', function(e) {
      mX = e.clientX,
      mY = e.clientY
    });

    window.addEventListener('resize', function() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  }

  function flakeAttributes() {
    return {
      opacity : (Math.random() * 0.1),
      speed: (Math.random() * 1),
      size: (Math.random() * 50) + 20,
      x: Math.floor(Math.random() * canvas.width),
      y: Math.floor(Math.random() * (canvas.height / 2)),
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
        let flake = flakes[i],
            x = mX,
            y = mY,
            minDist = 350,
            x2 = flake.x,
            y2 = flake.y;

        const dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y));

        if (dist < minDist) {
            const force = minDist / (dist * dist),
                xcomp = (x - x2) / dist,
                ycomp = (y - y2) / dist,
                deltaV = force / 2;

            flake.velX -= deltaV * xcomp;
            flake.velY -= deltaV * ycomp;

        } else {
            flake.velX *= .98;
            if (flake.velY <= flake.speed) {
                flake.velY = flake.speed
            }
            flake.velX += Math.cos(flake.step += .05) * flake.stepSize;
        }

        ctx.fillStyle = 'rgba(255,255,255,' + flake.opacity + ')';
        flake.y += flake.velY;
        flake.x += flake.velX;

        if (flake.y >= canvas.height || flake.y <= 0) {
          // reset(flake);
        }


        if (flake.x >= canvas.width || flake.x <= 0) {
          // reset(flake);
        }

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
    flake.y = 0;
    flake.size = attrs['size'];
    flake.speed = attrs['speed'];
    flake.velY = attrs['speed'];
    flake.velX = attrs['velX'];
    flake.opacity = attrs['opacity'];
  }
})()
