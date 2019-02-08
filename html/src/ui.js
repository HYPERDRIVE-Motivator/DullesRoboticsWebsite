// Generated by CoffeeScript 1.12.8
(function() {
  window.ui = {};

  ui.state = "HOME";

  eval(onecup["import"]());

  window.SpecialText = (function() {
    SpecialText.type = "Raw";

    SpecialText.text = "Text";

    function SpecialText(type, text) {
      this.type = type;
      this.text = text;
    }

    return SpecialText;

  })();

  ui.spliceText = function(text) {
    var breakPoints, foundEnd, i, index, j, k, l, lastIndex, len, m, n, o, p, q, ref, ref1, ref2, ref3, ref4, splicedText, stack, tempArray, textArray, textRef;
    textArray = [];
    tempArray = [];
    stack = [];
    breakPoints = [];
    for (i = l = ref = text.length - 1; ref <= 0 ? l <= 0 : l >= 0; i = ref <= 0 ? ++l : --l) {
      if (text.substring(i, i + 2) === "!>") {
        stack.push(i);
      }
    }
    for (i = m = ref1 = stack.length - 1; ref1 <= 0 ? m <= 0 : m >= 0; i = ref1 <= 0 ? ++m : --m) {
      foundEnd = false;
      index = stack[i];
      for (j = n = ref2 = index - 2; ref2 <= 0 ? n <= 0 : n >= 0; j = ref2 <= 0 ? ++n : --n) {
        if (text.substring(j, j + 2) === "<!") {
          foundEnd = true;
          for (k = o = ref3 = i - 1; ref3 <= 0 ? o <= 0 : o >= 0; k = ref3 <= 0 ? ++o : --o) {
            stack[k] -= index - j + 2;
          }
          tempArray.push(text.substring(j + 2, index - 1));
          text = text.substring(0, j) + text.substring(index + 2, text.length);
          breakPoints.push(j);
          break;
        }
      }
      if (!foundEnd) {
        break;
      }
    }
    lastIndex = 0;
    for (i = p = 0, ref4 = breakPoints.length - 1; 0 <= ref4 ? p <= ref4 : p >= ref4; i = 0 <= ref4 ? ++p : --p) {
      index = breakPoints[i];
      textArray.push(text.substring(lastIndex, index));
      textArray.push(tempArray[i]);
      lastIndex = breakPoints[i];
    }
    if (text !== "") {
      textArray.push(text.substring(lastIndex, text.length));
    }
    splicedText = [];
    for (textRef = q = 0, len = textArray.length; q < len; textRef = ++q) {
      text = textArray[textRef];
      if (text.indexOf("Break>") !== -1) {
        text = text.substring(6, text.length);
        splicedText.push(new SpecialText("Break", text));
      } else {
        splicedText.push(new SpecialText("Raw", text));
      }
    }
    return splicedText;
  };

  ui.navButton = function(menu, name, x, y) {
    return div(".navButton", function() {
      left(x);
      top(y);
      if (ui.state === name) {
        box_shadow("0 0 0 4px #ffb3b3, 0 0 0 6px hsl(0, 100%, 50%)");
        text_shadow("0 0 10px #FF0000;");
      }
      onclick(function() {
        if (menu === false) {
          onecup.goto(name + ".html");
          return ui.state = name;
        }
      });
      return text(name);
    });
  };

  ui.nav = function() {
    var navBorderLength, navWidth;
    navWidth = window.innerWidth - 30;
    navBorderLength = 12;
    return div(".navBar", function() {
      width(navWidth);
      position("relative");
      top("10px");
      margin("auto");
      height("120px");
      div(function() {
        position("relative");
        font_family("Impact");
        margin("auto");
        text_align("center");
        text("DULLES ROBOTICS");
        return font_size("24px");
      });
      ui.navButton(false, "HOME", window.innerWidth - 445, 40);
      ui.navButton(false, "ABOUT", window.innerWidth - 325, 40);
      ui.navButton(false, "BLOG", window.innerWidth - 205, 40);
      ui.navButton(false, "MEDIA", window.innerWidth - 510, 78);
      ui.navButton(false, "DOCUMENTS", window.innerWidth - 390, 78);
      ui.navButton(false, "CONTACT", window.innerWidth - 270, 78);
      return ui.navButton(true, "MORE", window.innerWidth - 150, 78);
    });
  };

  window.body = function() {
    img({
      src: "imgs/sitebg.png",
      width: window.innerWidth,
      height: window.innerHeight
    }, function() {
      position("absolute");
      background_size("100% 100%");
      display("block");
      top("0");
      return overflow("hidden");
    });
    return div(function() {
      position("relative");
      width(window.innerWidth);
      height(window.innerHeight);
      overflow_y("auto");
      ui.nav();
      switch (ui.state) {
        case "HOME":
          ui.home();
          break;
        case "ABOUT":
          ui.about();
          break;
        case "BLOG":
          ui.blogging();
          break;
      }
    });
  };

}).call(this);
