// Generated by CoffeeScript 1.12.7
(function() {
  eval(onecup["import"]());

  window.blog = {};

  window.blog.blogPosts = [];

  window.BlogMaker = (function() {
    function BlogMaker() {}

    window.Date = (function() {
      Date.year = 2019;

      Date.month = 2;

      Date.day = 1;

      function Date(m, d, y) {
        this.year = y;
        this.month = m;
        this.day = d;
      }

      Date.prototype.toString = function() {
        return this.month + "/" + this.day + "/" + this.year;
      };

      return Date;

    })();

    window.CustomImage = (function() {
      CustomImage.src = "imgs/roboticsstraitjesuit2018-2_d600.png";

      CustomImage.width = "460";

      CustomImage.height = "283";

      function CustomImage(s, w, h) {
        this.src = s;
        this.width = w;
        this.height = h;
      }

      return CustomImage;

    })();

    window.BlogPost = (function() {
      BlogPost.title = "Blog Number 1";

      BlogPost.date = new Date();

      BlogPost.imgs = [];

      BlogPost.text = "This is a blog post";

      BlogPost.author = "Jacob Enerio";

      function BlogPost(t, d, imgs, text, auth) {
        this.title = t;
        this.date = d;
        this.imgs = imgs;
        this.text = text;
        this.author = auth;
      }

      return BlogPost;

    })();

    BlogMaker.addBlog = function(title, date, imgs, text, author) {
      window.blog.blogPosts.push(new BlogPost(title, date, imgs, text, author));
    };

    BlogMaker.generateTempBlogPost = function() {
      var data;
      data = "Hey guys! This is our first blogpost! :D So yesterday at 12/16/18 from 9AM-4PM we went to Strait Jesuit for a FRC workshop since it's our first time doing FRC. We learned a variety of things like <!Break>-Try to make the robot specialize in one task rather than many tasks<!> <!Break>-Reduce the degrees of freedom (Ways the robot can move)<!> <!Break>-Don't try to make the robot move sideways<!> <!Break>-Use a tank drive system<!> <!Break>-Try to minimize having parts outside of the bumper frame<!> Overall, we really enjoyed the experience!";
      return this.addBlog("STRAIT JESUIT FRC WORKSHOP", new window.Date(12, 17, 2018), [new CustomImage("imgs/roboticsstraitjesuit2018-2_d600.jpeg", 460, 283)], data, "Jacob Enerio");
    };

    return BlogMaker;

  })();

  ui.makePost = function(blogPost) {
    var splicedText;
    splicedText = ui.spliceText(blogPost.text);
    return div(".blogPost", function() {
      var j, len, textData, textDataRef;
      position("relative");
      top("100px");
      width("500px");
      margin("auto");
      overflow_y("scroll");
      div(function() {
        position("relative");
        font_style("italic");
        font_weight("bold");
        text_decoration("underline");
        return text(blogPost.title);
      });
      div(function() {
        font_style("italic");
        position("relative");
        return text(blogPost.date);
      });
      div(function() {
        position("relative");
        return img({
          src: blogPost.imgs[0].src,
          width: blogPost.imgs[0].width,
          height: blogPost.imgs[0].height
        }, function() {
          display("block");
          margin_left("auto");
          return margin_right("auto");
        });
      });
      for (textDataRef = j = 0, len = splicedText.length; j < len; textDataRef = ++j) {
        textData = splicedText[textDataRef];
        div(function() {
          return text(textData.text);
        });
      }
      return div(function() {
        position("relative");
        font_style("italic");
        text_decoration("underline");
        return text("By " + blogPost.author);
      });
    });
  };

  ui.makePosts = function() {
    var blogPost, i, j, len, ref, results;
    ref = window.blog.blogPosts;
    results = [];
    for (i = j = 0, len = ref.length; j < len; i = ++j) {
      blogPost = ref[i];
      results.push(ui.makePost(blogPost));
    }
    return results;
  };

  ui.blogging = function() {
    if (window.blog.blogPosts.length === 0) {
      window.BlogMaker.generateTempBlogPost();
    }
    return ui.makePosts();
  };

}).call(this);
