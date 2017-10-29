


var path = window.location.hash;
path = path.replace(/\/$/, "");
path = decodeURIComponent(path);
console.log("path1:"+ path);

$(document).ready(function() {
  if (path == "#indoor") {
    $('#results li:nth-child(2) a').click();
  }

  if (path == "#cactus") {
    $('#results li:nth-child(3) a').click();
  }

  if (path == "#outdoor") {
    $('#results li:nth-child(4) a').click();
  }

  if (path == "#seasonal") {
    $('#results li:nth-child(5) a').click();
  }

  if (path == "#orchids") {
    $('#results li:nth-child(6) a').click();
  }

  if (path == "#rental") {
    $('#results li:nth-child(7) a').click();
  }

});
