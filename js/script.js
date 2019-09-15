

$(document).ready(function () {

  $(window).on('scroll', function () {
      if ($(window).scrollTop() >= 20) { // use any value lower than the navbar height, [20] is an example

          $('.navbar').css({ // reducing the vertical padding from 25px to 10px
              'padding-top': '10px',
              'padding-bottom': '10px'
          });

      } else {

          $('.navbar').css({ // reset the vertical padding to its initial value [25px]
              'padding-top': '25px',
              'padding-bottom': '25px'
          });

      }
  });

});   

var mysql = require ('./index.php');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "engineers_cafe"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM question", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
