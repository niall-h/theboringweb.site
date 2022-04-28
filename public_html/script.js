// Data for languages
var languages = {
  Perl: [
    ["Hello, Perl!", "perl-html-world.pl"],
    ["Hello, Perl! (JSON)", "perl-json-world.pl"],
    ["Environment Variables (Manually)", "perl-env.pl"],
    ["Environment Variables (CGI.pm)", "perl-env-pm.pl"],
    ["GET Echo", "perl-get-echo.pl"],
    ["POST Echo", "perl-post-echo.pl"],
    ["General Echo", "perl-general-echo.pl"],
    ["Sessioning", "../cgi-form/perl-cgiform.html"],
  ],
  C: [
    ["Hello, C!", "c-hello-html-world.cgi"],
    ["Hello, C! (JSON)", "c-hello-json-world.cgi"],
    ["Environment Variables", "c-env.cgi"],
    ["GET Echo", "c-get-echo.cgi"],
    ["POST Echo", "c-post-echo.cgi"],
    ["General Echo", "c-general-request-echo.cgi"],
    ["Sessioning", "../cgi-form/c-cgiform.html"],
  ],
  PHP: [
    ["Hello, PHP!", "php-hello-html-world.php"],
    ["Hello, PHP! (JSON)", "php-hello-json-world.php"],
    ["Environment Variables", "php-env.php"],
    ["GET Echo", "php-get-echo.php"],
    ["POST Echo", "php-post-echo.php"],
    ["General Echo", "php-general-request-echo.php"],
    ["Sessioning", "../cgi-form/php-cgiform.html"],
  ],
  Python: [
    ["Hello, Python!", "python-hello-html-world.py"],
    ["Hello, Python! (JSON)", "python-hello-json-world.py"],
    ["Environment Variables", "python-env.py"],
    ["GET Echo", "python-get-echo.py"],
    ["POST Echo", "python-post-echo.py"],
    ["General Echo", "python-general-request-echo.py"],
    ["Sessioning", "python-sessions-1.cgi"],
  ],
  Ruby: [
    ["Hello, Ruby!", "ruby-hello-html-world.rb"],
    ["Hello, Ruby! (JSON)", "ruby-hello-json-world.rb"],
    ["Environment Variables", "ruby-env.rb"],
    ["GET Echo", "ruby-get-echo.rb"],
    ["POST Echo", "ruby-post-echo.rb"],
    ["General Echo", "ruby-general-request-echo.rb"],
    ["Sessioning", "../cgi-form/ruby-cgiform.html"],
  ]
};

// Create the HTML
var html = Object.keys(languages)
  .map((language) => {
    return (
      '<ul style="width: 25vw; margin: 0px"><h4>' +
      language +
      "</h4>" +
      languages[language]
        .map((type) => {
          return (
            '<li><p><a class="btn" href="./cgi-bin/' +
            type[1] +
            '">' +
            type[0] +
            "</a></p></li>"
          );
        })
        .join("") +
      "</ul>"
    );
  })
  .join("");

// Inject into the DOM
document.querySelector(".hw2").innerHTML = html;
