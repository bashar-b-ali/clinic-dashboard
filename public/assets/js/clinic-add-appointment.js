/*! For license information please see clinic-add-appointment.js.LICENSE.txt */
"use strict";
document.addEventListener("DOMContentLoaded", (function() {
    new Swiper(".swiperautononav", { slidesPerView: "auto", spaceBetween: "16px", autoplay: !1 });
    $("#selectDate").daterangepicker({ singleDatePicker: !0, minYear: 2024, autoApply: !0, opens: "center", buttonClasses: "btn", drops: "down", locale: { format: "DD/MM/YYYY" }, applyButtonClasses: "btn-theme", cancelClass: "btn-light" }, (function(e, n, t) {})), $("#inlinewrap1").daterangepicker({ singleDatePicker: !0, minYear: 2023, autoApply: !0, linkedCalendars: !1, alwaysShowCalendars: !0, parentEl: ".inlinewrap1", opens: "center", buttonClasses: "btn", drops: "up", locale: { format: "DD/MM/YYYY" }, applyButtonClasses: "btn-theme", cancelClass: "btn-light" }, (function(e, n, t) {})), $("#inlinewrap1").length > 0 && $("#inlinewrap1").click()
}));