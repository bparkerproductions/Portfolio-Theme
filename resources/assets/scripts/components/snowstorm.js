export default {
  init() {
    this.requestFrame();

    //set variables
    let canvasElem = document.getElementById('snowstorm');
    SnowStorm.flakes = [];
    SnowStorm.canvas = canvasElem;
    SnowStorm.ctx = canvasElem.getContext('2d');
    SnowStorm.flakeCount = this.getFlakeCount();
    SnowStorm.mX = -100;
    SnowStorm.mY = -100;
    SnowStorm.canvas.width = window.innerWidth;
    SnowStorm.canvas.height = window.innerHeight;

    this.startAnimation();
    this.setEventListener();
  },
  getFlakeCount() {
    let isSmaller = window.innerWidth <= 1024;
    return isSmaller ? 50 : 200;
  },
  requestFrame() {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };

    window.requestAnimationFrame = requestAnimationFrame;
  },
  setEventListener() {
    SnowStorm.canvas.addEventListener('mousemove', function(e) {
      SnowStorm.mX = e.clientX,
      SnowStorm.mY = e.clientY
    });

    window.addEventListener('resize', function() {
      SnowStorm.canvas.width = window.innerWidth;
      SnowStorm.canvas.height = window.innerHeight;
    });
  },
  startAnimation() {
    for (var i = 0; i < SnowStorm.flakeCount; i++) {
    var x = Math.floor(Math.random() * SnowStorm.canvas.width),
        y = Math.floor(Math.random() * SnowStorm.canvas.height),
        size = (Math.random() * 3) + 2,
        speed = (Math.random() * 5) + 0.5,
        opacity = (Math.random() * 0.5) + 0.3;

      SnowStorm.flakes.push({
        speed: speed,
        velY: speed,
        velX: 0,
        x: x,
        y: y,
        size: size,
        stepSize: (Math.random()) / 30,
        step: 0,
        opacity: opacity,
    });
    }
    SnowStorm.snow();
  },
}

var SnowStorm = {
  snow() {
    SnowStorm.ctx.clearRect(0, 0, SnowStorm.canvas.width, SnowStorm.canvas.height);

    for (var i = 0; i < SnowStorm.flakeCount; i++) {
        var flake = SnowStorm.flakes[i],
            x = SnowStorm.mX,
            y = SnowStorm.mY,
            minDist = 350,
            x2 = flake.x,
            y2 = flake.y;

        var dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y));

        if (dist < minDist) {
            var force = minDist / (dist * dist),
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

        SnowStorm.ctx.fillStyle = 'rgba(255,255,255,' + flake.opacity + ')';
        flake.y += flake.velY;
        flake.x += flake.velX;

        if (flake.y >= SnowStorm.canvas.height || flake.y <= 0) {
          SnowStorm.reset(flake);
        }


        if (flake.x >= SnowStorm.canvas.width || flake.x <= 0) {
          SnowStorm.reset(flake);
        }

        SnowStorm.ctx.beginPath();
        SnowStorm.ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
        SnowStorm.ctx.fill();
    }
    requestAnimationFrame(SnowStorm.snow);
  },
  reset(flake) {
    flake.x = Math.floor(Math.random() * SnowStorm.canvas.width);
    flake.y = 0;
    flake.size = (Math.random() * 3) + 2;
    flake.speed = (Math.random() * 1) + 0.5;
    flake.velY = flake.speed;
    flake.velX = 0;
    flake.opacity = (Math.random() * 0.5) + 0.3;
  },
}