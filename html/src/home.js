// Generated by CoffeeScript 2.3.2
(function() {
  // CoffeeScript - HOME

  //Load onecup files
  eval(onecup.import());

  ui.home = function() {
    //Display Flyer
    return img({
      src: "imgs/RoboticsFlyer.jpeg",
      width: (window.innerWidth - 30) / 3,
      height: 2.5 * window.innerHeight / 3
    }, function() {
      position("relative");
      top("50px");
      display("block");
      margin_left("auto");
      return margin_right("auto");
    });
  };

}).call(this);
