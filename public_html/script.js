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
    ["Sessioning", "perl-sessions-1.pl"],
  ],
  C: [
    ["Hello, C!", "c-hello-html-world.cgi"],
    ["Hello, C! (JSON)", "c-hello-json-world.cgi"],
    ["Environment Variables", "c-env.cgi"],
    ["GET Echo", "c-get-echo.cgi"],
    ["POST Echo", "c-post-echo.cgi"],
    ["General Echo", "c-general-request-echo.cgi"],
    ["Sessioning", "c-sessions-1.cgi"],
  ],
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

// Log and inject into the DOM
console.log(html);
document.querySelector(".hw2").innerHTML = html;
