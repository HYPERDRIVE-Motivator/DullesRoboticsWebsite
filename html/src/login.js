// Generated by CoffeeScript 1.12.7
(function() {
  eval(onecup["import"]());

  ui.login = function() {
    ui.stateMenu("Login", "Login Navigation", ["Login", "Register", "Forgot Password"], ["Login", "Register", "Forgot Password"], 35, 150, 2, true);
    div(".dullesButton", function() {
      position("absolute");
      left("50px");
      top("90px");
      width("220px");
      text("Exit");
      return onclick(function() {
        return ui.logging = false;
      });
    });
    return div(".about", function() {
      top("100px");
      width("600px");
      left("50px");
      margin("auto");
      position("relative");
      div(function() {
        position("relative");
        font_style("italic");
        font_weight("bold");
        text_decoration("underline");
        text_align("center");
        return text(ui.menuStates.get("Login"));
      });
      switch (ui.menuStates.get("Login")) {
        case "Login":
          return form("#LoginForm", {
            action: "/html/php/authenticate.php",
            method: "POST",
            onsubmit: "return false;"
          }, function() {
            margin_left("auto");
            margin_right("auto");
            display("grid");
            input("#loginUserName", {
              name: "username",
              type: "text",
              placeholder: "User Name"
            }, function() {
              margin_top("30px");
              display("grid");
              return margin("auto");
            });
            input("#loginPassword", {
              name: "password",
              type: "password",
              placeholder: "Password"
            }, function() {
              margin_top("5px");
              display("grid");
              return margin("auto");
            });
            return div("#loginSubmit.dullesButton2", function() {
              margin_top("5px");
              height("40px");
              width("100px");
              display("inline-grid");
              margin_left("auto");
              margin_right("auto");
              text("Submit");
              return onclick(function() {
                return document.getElementById("LoginForm").submit(function() {
                  return false;
                });
              });
            });
          });
      }
    });
  };

}).call(this);
