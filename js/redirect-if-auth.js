window.addEventListener("pageshow", () => {
  fetch("/api/me.php")
    .then((s) => s.json())
    .then((me) => {
      if (me) location = "/";
    });
});
