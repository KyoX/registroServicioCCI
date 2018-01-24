function getRandomColor(max,min) {
    var red = Math.floor(Math.random()* (max - min) + min);
    var green = Math.floor(Math.random()* (max - min) + min);
    var blue = Math.floor(Math.random()* (max - min) + min);
    return 'rgba('+red+','+green+','+blue+',1)';
}