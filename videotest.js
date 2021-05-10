var config = {
    type: Phaser.AUTO,
    width: window.innerWidth,
    height: window.innerHeight,
    backgroundColor: '#2d2d2d',
    parent: 'phaser-example',
    scene: {
        preload: preload,
        create: create
    }
};

var game = new Phaser.Game(config);

function preload ()
{
    this.load.video('sonic', 'assets/sonic.mp4', 'loadeddata', false, true);
}

function create ()
{
    var vid = this.add.video(400, 300, 'sonic');

    vid.play(true);
    
    // Prevents video freeze when game is out of focus (i.e. user changes tab on the browser)
    vid.setPaused(false);
}
