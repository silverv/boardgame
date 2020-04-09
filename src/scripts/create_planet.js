
let planet = planetaryjs.planet();
// You can remove this statement if `world-110m.json`
// is in the same path as the HTML page:
planet.loadPlugin(planetaryjs.plugins.earth({
    topojson: { file:   'scripts/planetary/world-110m.json' },
    oceans:   { fill:   '#000080' },
    land:     { fill:   '#339966' },
    borders:  { stroke: '#008000' }
}));
 
let globeWidth = document.querySelector("#globe").width;
let scale = globeWidth / 4;
// Make the planet fit well in its canvas
planet.projection.scale(scale).translate([scale*2, scale]);
let canvas = document.getElementById('globe');
let autorotate = function(degreesPerTick) {
    return function(planet) {
        planet.onDraw(function() {
            var rotation = planet.projection.rotate();
            rotation[0] += degreesPerTick;
            if (rotation[0] >= 180) rotation[0] -= 360;
            planet.projection.rotate(rotation);
        });
    };
};

planet.loadPlugin(autorotate(0.03));
planet.draw(canvas);