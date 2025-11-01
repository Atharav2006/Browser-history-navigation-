/* Two-stack navigation using sessionStorage
   Keeps Back/Forward stacks only for the current tab.
   Also separates "Current Page" display.
*/

let backStack = JSON.parse(sessionStorage.getItem("backStack") || "[]");
let forwardStack = JSON.parse(sessionStorage.getItem("forwardStack") || "[]");
let currentPage = ""; // new variable

function currentUrl() {
  return window.location.href;
}

function getFileName(url) {
  return url.substring(url.lastIndexOf("/") + 1);
}

function saveStacks() {
  sessionStorage.setItem("backStack", JSON.stringify(backStack));
  sessionStorage.setItem("forwardStack", JSON.stringify(forwardStack));
}

function trackPageVisit() {
  const url = currentUrl();
  currentPage = url; // set current page

  if (backStack.length === 0 || backStack[backStack.length - 1] !== url) {
    backStack.push(url);
    forwardStack = [];
    saveStacks();
  }

  console.log("Current:", getFileName(currentPage));
  console.log("BackStack:", backStack.map(getFileName));
  console.log("ForwardStack:", forwardStack.map(getFileName));
}

function goBack() {
  if (backStack.length > 1) {
    const current = backStack.pop();
    forwardStack.push(current);
    saveStacks();

    currentPage = backStack[backStack.length - 1]; // update current
    window.location.href = currentPage;
  } else {
    alert("No more pages in Back stack!");
  }
}

function goForward() {
  if (forwardStack.length > 0) {
    const next = forwardStack.pop();
    backStack.push(next);
    saveStacks();

    currentPage = next; // update current
    window.location.href = currentPage;
  } else {
    alert("No more pages in Forward stack!");
  }
}

// Render stacks in floating box
function renderStacks() {
  const backNames = backStack
    .slice(0, -1) // exclude current
    .map(getFileName);
  const forwardNames = forwardStack.map(getFileName);

  return `
    <strong>Current Page:</strong> ${getFileName(currentPage) || "None"}
    <br>
    <strong>Back Stack:</strong> ${backNames.length ? backNames.join(" → ") : "Empty"}
    <br>
    <strong>Forward Stack:</strong> ${forwardNames.length ? forwardNames.join(" → ") : "Empty"}
  `;
}

window.addEventListener("load", () => {
  trackPageVisit();

  const backBtn = document.getElementById("backBtn");
  const forwardBtn = document.getElementById("forwardBtn");

  // Floating info box
  let stackBox = document.createElement("div");
  stackBox.id = "stackBox";
  stackBox.style.position = "absolute";
  stackBox.style.background = "rgba(0,0,0,0.85)";
  stackBox.style.color = "white";
  stackBox.style.padding = "8px 12px";
  stackBox.style.borderRadius = "6px";
  stackBox.style.fontSize = "14px";
  stackBox.style.display = "none";
  stackBox.style.zIndex = "1000";
  document.body.appendChild(stackBox);

  function showStackBox(e) {
    stackBox.innerHTML = renderStacks();
    stackBox.style.left = e.target.getBoundingClientRect().left + "px";
    stackBox.style.top = e.target.getBoundingClientRect().bottom + 8 + "px";
    stackBox.style.display = "block";
  }

  function hideStackBox() {
    stackBox.style.display = "none";
  }

  if (backBtn) {
    backBtn.onclick = goBack;
    backBtn.onmouseover = showStackBox;
    backBtn.onmousemove = showStackBox;
    backBtn.onmouseout = hideStackBox;
  }

  if (forwardBtn) {
    forwardBtn.onclick = goForward;
    forwardBtn.onmouseover = showStackBox;
    forwardBtn.onmousemove = showStackBox;
    forwardBtn.onmouseout = hideStackBox;
  }
});
