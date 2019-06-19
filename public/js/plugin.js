/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/plugin.js":
/*!********************************!*\
  !*** ./resources/js/plugin.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*global $, jQuery, alert*/
$(document).ready(function () {
  "use strict"; //Nicescroll

  $("html").niceScroll();
  /* Start Setting */

  $("#setting-button").click(function () {
    $(".section-setting").fadeIn(400);
    $(".overlay").fadeIn(400);
  });
  $("#open-setting").click(function () {
    $(".section-setting").fadeIn(400);
    $(".overlay").fadeIn(400);
  });
  $("#close").click(function () {
    $(".section-setting").fadeOut(400);
    $(".overlay").fadeOut(400);
  });
  $(".setting-background-img").mouseenter(function () {
    $(".edite-background").fadeIn();
  });
  $(".setting-background-img").mouseleave(function () {
    $(".edite-background").fadeOut();
  });
  $(".setting-profile-img img").mouseenter(function () {
    $(".edite-profile").fadeIn();
  });
  $(".setting-profile-img").mouseleave(function () {
    $(".edite-profile").fadeOut();
  });
  $("#open1").click(function () {
    $("#1").slideToggle();
  });
  $("#open2").click(function () {
    $("#2").slideToggle();
  });
  $("#open3").click(function () {
    $("#3").slideToggle();
  });
  $("#open4").click(function () {
    $("#4").after('<input type="url" placeholder="Enter Your Linke...">');
  });
  $("#p1").mouseenter(function () {
    $(".p1").fadeIn();
  });
  $("#p1").mouseleave(function () {
    $(".p1").fadeOut();
  });
  $("#p2").mouseenter(function () {
    $(".p2").fadeIn();
  });
  $("#p2").mouseleave(function () {
    $(".p2").fadeOut();
  });
  $("#p3").mouseenter(function () {
    $(".p3").fadeIn();
  });
  $("#p3").mouseleave(function () {
    $(".p3").fadeOut();
  });
  $("#p4").mouseenter(function () {
    $(".p4").fadeIn();
  });
  $("#p4").mouseleave(function () {
    $(".p4").fadeOut();
  });
  $("#p5").mouseenter(function () {
    $(".p5").fadeIn();
  });
  $("#p5").mouseleave(function () {
    $(".p5").fadeOut();
  });
  $("#p6").mouseenter(function () {
    $(".p6").fadeIn();
  });
  $("#p6").mouseleave(function () {
    $(".p6").fadeOut();
  });
  $("#p7").mouseenter(function () {
    $(".p7").fadeIn();
  });
  $("#p7").mouseleave(function () {
    $(".p7").fadeOut();
  });
  /* Start Login */

  $("#open-login").click(function () {
    $("#register").fadeOut(300);
    $("#login").fadeIn(400);
    $(".overlay").fadeIn(400);
  });
  $("#close-login").click(function () {
    $("#login").fadeOut(400);
    $(".overlay").fadeOut(400);
  });
  /* End Login */

  /* Start register */

  $("#open-register").click(function () {
    $("#login").fadeOut(300);
    $("#register").fadeIn(400);
    $(".overlay").fadeIn(400);
  });
  $("#close-register").click(function () {
    $("#register").fadeOut(400);
    $(".overlay").fadeOut(400);
  });
  /* End register */

  /* Start Video Slider */

  $(".v").click(function () {
    $("#vx").attr("src", $(this).attr("src"));
  });
  /* End Video Slider */

  /* Start Follow Icon */

  $("#follow").click(function () {
    if ($("#block span").text() === "unblock") {
      $("#follow span").text("Follow");
      alert("This user is blocked");
      return;
    }

    if ($("#follow span").text() === "Follow") {
      $("#follow span").text("unFollow");
      $("#follow span").css({
        fontSize: 11,
        fontWeight: 600
      });
      return;
    }

    if ($("#follow span").text() === "unFollow") {
      $("#follow span").text("Follow");
      $("#follow span").css({
        fontSize: 13,
        fontWeight: 400
      });
      return;
    }
  });
  /* End Follow Icon */

  /* Start Follow Icon */

  $("#block").click(function () {
    if ($("#block span").text() === "block") {
      $("#block span").text("unblock");

      if ($("#follow span").text() === "unFollow") {
        $("#follow span").text("Follow");
        $("#follow span").css({
          fontSize: 13,
          fontWeight: 400
        });
        return;
      }

      return;
    }

    if ($("#block span").text() === "unblock") {
      $("#block span").text("block");
      return;
    }
  });
  /* End Follow Icon */

  /* Start Validation */

  /* End Validation */

  $("#uplod-button").click(function () {
    if ($("#text1").val() === "") {
      $(".validation").fadeIn(400).delay(1000).fadeOut(400);
      return;
    }

    $(".current-post .post-content").attr("id", "");
    $("#post-content p").text($("#text1").val());
    $("#text1").val("");
    $("#open-create").val("");
    $("#upload").after($(".new-post").html());
    $(".create-poste-content").fadeOut(400);
    $(".overlay").fadeOut(400);
  });
});

/***/ }),

/***/ 5:
/*!**************************************!*\
  !*** multi ./resources/js/plugin.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\projtest\resources\js\plugin.js */"./resources/js/plugin.js");


/***/ })

/******/ });