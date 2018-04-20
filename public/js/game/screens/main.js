"use strict";
var main = {
    preload: function() {
        game.load.image('background','../assets/images/background.jpg');
        //load student
        // game.load.image('student', '../assets/images/student.png');
        //load unlocked lock
        game.load.image('unlock','../assets/images/unlock.svg');

        //load locked lock
        game.load.image('lock', '../assets/images/lock.png');

        //loading a ball
        game.load.image('ball','../assets/images/ball.png');
        //load a green ball
        game.load.image('greenBall','../assets/images/greenball.png');
    },
    create: function() {
       var  background = game.add.sprite(0,0,'background');

        //add student
       // game.student = this.add.sprite(35,410,'student');
        //game.student.scale.set(0.05,0.05);

        // Load weeks from backend
        var weeks = [
            {
                name: 'Week 1',
                completed: true
            },
            {
                name: 'Week 2',
                completed: true
            },
            {
                name: 'Week 3',
                completed: true
            },
            {
                name: 'Week 4',
                completed: false
            },
            {
                name: 'Week 5',
                completed: false
            },
        ];

        var weekData = weeks.map(function(week, index) {
            // Move these "magic numbers" to variables
            const ballX = 100 + index * 50;
            const ballY = 365 - index * 35;

             if(week.completed) {
                var lock = game.add.sprite(ballX, ballY + 45, 'unlock');
            var ball = game.add.sprite(ballX,ballY,'greenBall');

            }
                else{
                 var lock = game.add.sprite(ballX, ballY + 45, 'lock');
            var ball = game.add.sprite(ballX,ballY,'ball');

                 }


                 ball.scale.set(0.10,0.10);
                    lock.scale.set(0.05,0.05);


            //text
            var label = this.add.text(ballX - 20, ballY + 20, week.name);
            label.fontSize =15;
            //	Stroke color and thickness
            label.stroke = '#000000';
            label.strokeThickness = 6;
            label.fill = '#43d637';

            var weekGroup = game.add.group();
            weekGroup.inputEnableChildren = true;

            weekGroup.add(ball);
            weekGroup.add(label);
            weekGroup.add(lock);


            function weekClicked(elem) {
                console.log('Clicked', elem);
            }
            weekGroup.onChildInputDown.add(weekClicked, this);

            return {
                // weekGroup :weekGroup


            };


            //weekGroup.event.onInputDown.add(listener, this);

        }.bind(this));
/*
        var line = game.add.graphics(0,0);
        //set a fill and line style
        line.beginFill(0xffd900);
        line.lineStyle(5, 0xffd900, 5);
        line.moveTo(ballX,ballY);
        line.lineTo(ballX+ index*50, ballY + index*35);
        line.endFill();
*/
      //  window.graphics = line;

    },
    try:function(){
        alert("click worked")
    },
    update: function() {

    }
};

