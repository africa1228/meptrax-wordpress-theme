/**
 * Homepage: add body class when scrolled so the fixed glass header densifies.
 * Geometry never changes — presentation only.
 */
(function () {
  var threshold = 24;

  function update() {
    if (!document.body || !document.body.classList.contains("meptrax-landing-page")) {
      return;
    }
    var y = window.scrollY || document.documentElement.scrollTop || 0;
    document.body.classList.toggle("meptrax-header-scrolled", y > threshold);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", update);
  } else {
    update();
  }
  window.addEventListener("scroll", update, { passive: true });
})();
