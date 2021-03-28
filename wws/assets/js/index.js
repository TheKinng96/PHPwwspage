// get navbar hidden when scrolled
let prevScrollpos = window.pageYOffset;
let windowWidth = window.innerWidth;

window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    if (windowWidth >= "992") {
      document.getElementById("navbar").style.top = "-9.5vw";
    } else {
      document.getElementById("navbar").style.top = "-45px";
    }
  }
  prevScrollpos = currentScrollPos;
}

// get select value
let boardValue = document.getElementById('boardSelect').value;
const boardDescription = document.getElementById('boardDescription');
const boardImage = document.getElementById('boardImage');

updateBoard = (boardType, parentURL) => {
  let updateURL = parentURL;
  if (boardType && boardType !== '') {
    boardValue = boardType;
  } else {
    boardValue = document.getElementById('boardSelect').value;
  }
  
  updateContent(boardValue, updateURL);
}

function updateContent(boardType, updateURL) {
  boardDescription.innerHTML = ''

  let description = '';
  
  description += `
    <p class="btn-description">${boardType} aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
  `;

  boardDescription.innerHTML = description;
  boardImage.src = `${updateURL}/assets/img/${boardType}.jpg`
}

// Animation, let it run after a sec
window.addEventListener('load', function() { AOS.init() }, false);

// For share buttons
function copyURL(link) {
  let textArea = document.createElement("textarea");

  if (link) {
    textArea.value = link;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy");
    alert("リンクをコピーしました");
    document.body.removeChild(textArea);
  } else {
    textArea.value = "https://adsist.ai/feed";
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy");
    alert("RSSリンクをコピーしました");
    document.body.removeChild(textArea);
  }
}