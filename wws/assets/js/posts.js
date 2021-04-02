
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