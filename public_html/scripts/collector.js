/* This client disables Javascript, this file will not work */
/********************
 * Global Variables *
 *******************/
const DATA = {
  static: {
    userAgent: undefined,
    language: undefined,
    cookieEnabled: undefined,
    allowJavascript: true,
    allowImages: false,
    allowCSS: undefined,
    screenDimension: {
      width: undefined,
      height: undefined,
    },
    windowDimension: {
      width: undefined,
      height: undefined,
    },
    network: undefined,
  },
  performance: {
    timing: undefined,
    loadStart: undefined,
    loadEnd: undefined,
    totalLoadTime: undefined,
  },
  mouse: {
    click: undefined,
    cursor: undefined,
  },
  keys: {
    altKey: undefined,
    ctrlKey: undefined,
    shiftKey: undefined,
  },
};

var keypressCount = 0;
var clickCount = 0;
var events = ["keydown", "mouseup"];

/********************
 * MAIN *
 *******************/

window.addEventListener("load", () => {
  // Static data
  const nav = window.navigator;

  DATA.static.userAgent = nav.userAgent;
  DATA.static.language = nav.language;
  DATA.static.cookieEnabled = nav.cookieEnabled;

  DATA.static.allowCSS = isCSSEnabled();
  DATA.static.allowImages = isImagesAllowed();

  DATA.static.screenDimension.width = window.screen.width;
  DATA.static.screenDimension.height = window.screen.height;
  DATA.static.windowDimension.width = window.innerWidth;
  DATA.static.windowDimension.height = window.innerHeight;
  DATA.static.network = nav.connection.effectiveType;

  console.log(DATA.static);

  // Performance Timing data
  DATA.performance.timing = window.performance.timing;
  DATA.performance.loadStart = window.performance.timing.navigationStart;
  DATA.performance.loadEnd = window.performance.timing.domContentLoadedEventEnd;
  DATA.performance.totalLoadTime =
    DATA.performance.loadEnd - DATA.performance.loadStart;
  console.log(DATA.performance);

  postData("https://theboringweb.site/api/static", DATA.static).then((data) => {
    console.log(data);
  });

  // postData("https://theboringweb.site/api/performance", DATA.performance).then(
  //   (data) => {
  //     console.log(data);
  //   }
  // );
});

/********************
 * HELPER FUNCTIONS *
 *******************/
/* Check if user allows CSS */
function isCSSEnabled() {
  let cssAllowed = false;
  let div = document.createElement("div");
  var currStyle;
  div.style.position = "absolute";
  document.body.appendChild(div);

  if (div.currentStyle) {
    currStyle = div.currentStyle.position;
  } else if (window.getComputedStyle) {
    currStyle = document.defaultView
      .getComputedStyle(div, null)
      .getPropertyValue("position");
  }
  cssAllowed = currStyle !== "static";

  document.body.removeChild(div);
  return cssAllowed;
}

/* Check if user allows Images */
function isImagesAllowed() {
  let imagesAllowed = false;
  let img = document.createElement("img");
  img.id = "testing-img";
  img.src = "./members/photos/anh/rbg.png";
  img.alt = "Testing";
  img.style.height = "500px";
  document.body.appendChild(img);

  imagesAllowed = img.height === 500;

  document.body.removeChild(img);
  return imagesAllowed;
}

document.addEventListener("DOMContentLoaded", function () {
  events.forEach(function (e) {
    document.addEventListener(e, function () {
      endTime = Date.now() + 10000;
      if (e === "mouseup") {
        clickCount++;
        console.log("YOO I AM THE CLICK COUNT: ", clickCount);
      } else if (e === "keydown") {
        keypressCount++;
        console.log("YOOOO FUCK YOU I AM THE KEYPRESS: ", keypressCount);
      }
    });
  });
});

// Example POST method implementation:
async function postData(url = "", data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
    credentials: "same-origin", // include, *same-origin, omit
    headers: {
      "Content-Type": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: "follow", // manual, *follow, error
    referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data), // body data type must match "Content-Type" header
  })
    .then((data) => {
      console.log("success: ", data);
    })
    .catch((error) => {
      console.log("Error: ", error);
    });
  return response.json();
}
