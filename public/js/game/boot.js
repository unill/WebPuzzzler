var Boot = {
    preload: function(){
        //background
        game.load.image('background', '../assets/images/background.jpg');

        //loading bar
        game.load.image('loading', '../assets/images/loading.png');
        game.load.image('logo','../assets/images/splash.png');
        game.load.script('utils','../js/game/lib/utils.js');
        game.load.script('loadUsers','../js/game/lib/loadUsers.js');
        game.load.script('splash', '../js/game/screens/splash.js');

    },
    create:function () {
        game.state.add('Splash',splash);
        game.state.start('Splash');

    }
};