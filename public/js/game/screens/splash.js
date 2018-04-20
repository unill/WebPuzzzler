// var splash = function(){};
//
//     splash.prototype =
var splash =
    {
        loadScripts: function () {
            game.load.script('HomePage','../js/game/main.js');
            game.load.script('Menu','../js/game/menu.js');
            },
        loadBgm: function () {
           game.load.audio('dangerous', '../assets/audio/Dangerous.mp3');
        },
        loadImages: function () {
                       },
        loadfonts: function () {
            WebFontConfig ={
                custom : {
                    families: ['CakennTruffles'],
                    urls: ['../css/game/cakefont.css']
                }

            }

        },
        init: function () {
            var loadingBar = 'soomething';
            //var logo, loadingBar, loadStatus;
            this.loadingBar = game.make.sprite(game.world.centerX, 400, "loading");
            this.logo = game.make.sprite(game.world.centerX, 100, 'logo');
            this.loadStatus = game.make.text(game.world.centerX, 360, 'Loading...', {fill: 'green'})
            WebPuzzler.lib.centerGameObjects([this.logo, this.loadStatus]);
        },
        preload: function () {
            game.add.sprite(0, 0, 'background');
            game.add.existing(this.logo).scale.setTo(0.5);
            game.add.existing(this.loadingBar).scale.setTo(0.5);
            game.add.existing(this.loadStatus);
            this.load.setPreloadSprite(this.loadingBar);
            this.loadImages();
            this.loadfonts();
            this.loadBgm();

            WebPuzzler.lib.loadUsers().then(function(users) {
               console.log('Loaded users', users);
            });
            console.log('Finished preloading');

        },
        addGameStates: function () {
            game.state.add("HomePage",main);
            game.state.add("Menu",Menu);
            game.state.ad
        },
        addGameMusic: function(){
            music = game.add.audio('dangerous');
            music.loop =true;
            music.play();
        },
        create: function () {
            this.loadStatus.setText('Ready !');
             this.addGameStates();
             this.addGameMusic();
            setTimeout(function () {
      game.state.start("HomePage", main);


            }, 200);
        },
        resize: function () {
// will be used to create responsive
        }
    },playSound =true,
      playMusic =true,
      music;