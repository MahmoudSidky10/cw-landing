"use strict";

document.addEventListener("DOMContentLoaded", function () {
  var body = document.querySelector("body");
  /**
   * Slide Up
   */
  var slideUp = function slideUp(target) {
    var duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 500;
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + "ms";
    target.style.boxSizing = "border-box";
    target.style.height = target.offsetHeight + "px";
    target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(function () {
      target.style.display = "none";
      target.style.removeProperty("height");
      target.style.removeProperty("padding-top");
      target.style.removeProperty("padding-bottom");
      target.style.removeProperty("margin-top");
      target.style.removeProperty("margin-bottom");
      target.style.removeProperty("overflow");
      target.style.removeProperty("transition-duration");
      target.style.removeProperty("transition-property");
    }, duration);
  };

  /**
   * Slide Down
   */
  var slideDown = function slideDown(target) {
    var duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 500;
    target.style.removeProperty("display");
    var display = window.getComputedStyle(target).display;
    if (display === "none") display = "block";
    target.style.display = display;
    var height = target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = "border-box";
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + "ms";
    target.style.height = height + "px";
    target.style.removeProperty("padding-top");
    target.style.removeProperty("padding-bottom");
    target.style.removeProperty("margin-top");
    target.style.removeProperty("margin-bottom");
    window.setTimeout(function () {
      target.style.removeProperty("height");
      target.style.removeProperty("overflow");
      target.style.removeProperty("transition-duration");
      target.style.removeProperty("transition-property");
    }, duration);
  };

  /**
   * Slide Toggle
   */
  var slideToggle = function slideToggle(target) {
    var duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 500;
    if (target.attributes.style === undefined || target.style.display === "none") {
      return slideDown(target, duration);
    } else {
      return slideUp(target, duration);
    }
  };

  /**
   * Header Crossed
   */
  window.addEventListener("scroll", function () {
    var primaryHeader = document.querySelector(".primary-header");
    if (primaryHeader) {
      var primaryHeaderTop = primaryHeader.offsetHeight / 3;
      var scrolled = window.scrollY;
      var primaryHeaderCrossed = function primaryHeaderCrossed() {
        if (scrolled > primaryHeaderTop) {
          body.classList.add("primary-header-crossed");
        } else if (scrolled < primaryHeaderTop) {
          body.classList.remove("primary-header-crossed");
        } else {
          body.classList.remove("primary-header-crossed");
        }
      };
      setTimeout(primaryHeaderCrossed, 100);
    }
  });

  /**
   * Primary Menu
   */
  var mdScreen = "(max-width: 991px)";
  var mdScreenSize = window.matchMedia(mdScreen);
  var containSub1 = document.querySelectorAll(".has-sub-menu > a");
  var containSub2 = document.querySelectorAll(".has-sub-2nd > a");
  var mdScreenSizeActive = function mdScreenSizeActive(screen) {
    if (screen.matches) {
      // if menu has sub
      containSub1.forEach(function (e) {
        e.addEventListener("click", function (el) {
          el.preventDefault();
          el.stopPropagation();
          el.target.classList.toggle("active");
          var menuSub = e.nextElementSibling;
          if (menuSub) {
            slideToggle(menuSub, 500);
          }
        });
      });
      // if menu has 2nd sub menu
      containSub2.forEach(function (e) {
        e.addEventListener("click", function (el) {
          el.preventDefault();
          el.stopPropagation();
          el.target.classList.toggle("active");
          var menuSub = e.nextElementSibling;
          if (menuSub) {
            slideToggle(menuSub, 500);
          }
        });
      });
    } else {
      containSub1.forEach(function (e) {
        e.addEventListener("click", function (el) {
          el.preventDefault();
        });
      });
      containSub2.forEach(function (e) {
        e.addEventListener("click", function (el) {
          el.preventDefault();
        });
      });
    }
  };
  mdScreenSize.addEventListener("change", function (e) {
    if (e.matches) {
      window.location.reload();
      mdScreenSizeActive(e);
    } else {
      mdScreenSize.removeEventListener("change", function (e) {
        mdScreenSizeActive(e);
      });
      window.location.reload();
    }
  });
  mdScreenSizeActive(mdScreenSize);

  /**
   * Theme Settings (Dark / Light)
   */
  var themeDropdownIcon = document.getElementById("themeDropdownIcon");
  var theme = localStorage.getItem("theme");

  // Set initial theme
  if (theme === "dark") {
    document.documentElement.setAttribute("data-bs-theme", "dark");
    updateThemeIcon("dark");
  } else {
    // Default to light theme if not set
    document.documentElement.setAttribute("data-bs-theme", "light");
    updateThemeIcon("light");
  }

  // Theme change handlers
  var selectLightTheme = document.getElementById("lightTheme");
  if (selectLightTheme) {
    selectLightTheme.addEventListener("click", function () {
      document.documentElement.setAttribute("data-bs-theme", "light");
      localStorage.setItem("theme", "light");
      updateThemeIcon("light");
    });
  }
  var selectDarkTheme = document.getElementById("darkTheme");
  if (selectDarkTheme) {
    selectDarkTheme.addEventListener("click", function () {
      document.documentElement.setAttribute("data-bs-theme", "dark");
      localStorage.setItem("theme", "dark");
      updateThemeIcon("dark");
    });
  }
  function updateThemeIcon(theme) {
    if (!themeDropdownIcon) return;
    themeDropdownIcon.setAttribute("icon", theme === "light" ? "bi:sun" : "bi:moon-stars");
  }

  /**
   * Sidebar Toggle
   */
  function toggleSidebar() {
    var sidebar = document.querySelector(".doc-sidebar");
    if (sidebar) {
      sidebar.classList.toggle("active");
    }
  }
  var docSideBarToggler = document.querySelectorAll(".doc-nav-toggler");
  if (docSideBarToggler) {
    docSideBarToggler.forEach(function (e) {
      e.addEventListener("click", function () {
        return toggleSidebar();
      });
    });
  }

  /**
   * Iterate through each tab group
   */
  var tabGroups = document.querySelectorAll(".tab-group");
  tabGroups.forEach(function (group) {
    var tabButtons = group.querySelectorAll(".tab__links");
    var tabContents = group.querySelectorAll(".tab__content");
    if (!tabButtons.length || !tabContents.length) {
      return;
    }

    // Attach event listeners to each tab button
    tabButtons.forEach(function (button, index) {
      button.addEventListener("click", function () {
        // Remove active class from all buttons and contents in this group
        tabButtons.forEach(function (btn) {
          return btn.classList.remove("active");
        });
        tabContents.forEach(function (content) {
          return content.classList.remove("active");
        });

        // Add active class to clicked button and corresponding content
        button.classList.add("active");
        if (tabContents[index]) {
          tabContents[index].classList.add("active");
        } else {
          console.warn("No content found for tab index ".concat(index, " in this group"));
        }
      });
    });

    // Optionally, activate the first tab by default in each group
    if (tabButtons[0]) {
      tabButtons[0].click();
    }
  });

  /**
   * Code Snippets Expand
   */
  var codeExpandBtn = document.querySelectorAll(".code-snippet-expand");
  if (codeExpandBtn) {
    codeExpandBtn.forEach(function (e) {
      e.addEventListener("click", function () {
        var codeExpandNav = e.closest(".tab__header");
        var codeSnippetsBody = codeExpandNav.nextElementSibling;
        codeSnippetsBody.classList.toggle("code-snippet--expanded");
      });
    });
  }
});