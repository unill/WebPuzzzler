var w = window.innerWidth * window.devicePixelRatio,
    h = window.innerHeight * window.devicePixelRatio;

// var w = screen.width,
//     h = screen.height;

var game = new Phaser.Game(w, h, Phaser.AUTO, 'gameDiv');


game.state.add('Boot',Boot);
//game.state.add('main', main);
//game.state.add('load', loadState);
//game.state.add('menu', menuState);

game.state.start('Boot');