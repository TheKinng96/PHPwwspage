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

updateBoard = () => {
  boardValue = document.getElementById('boardSelect').value;

  switch (boardValue.toLowerCase()) {
    case 'weekly':
      updateText('weekly');
      break;
    case 'monthly':
      updateText('monthly');
      break;
    case 'quarterly':
      updateText('quarterly');
      break;
    case 'yearly':
      updateText('yearly');
      break;
  }
}

function updateText(boardType) {
  boardDescription.innerHTML = ''

  let description = '';
  
  description += `
    <p class="btn-description">${boardType} aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
  `;

  boardDescription.innerHTML = description;
}