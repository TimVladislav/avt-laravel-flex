
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function () {
   var barPosition = false;
   var element = $('.nav__btn--floating');
   $(window).scroll(function() {
       element['fade' + ($(this).scrollTop() > $(window).height() ? 'In' : 'Out')](0);
   });

   $('.main-slider-section').css('height', document.documentElement.clientHeight + 'px');
   $(function(){
       $(window).resize(function() {
           $('.main-slider-section').css('height', $(window).height() + 'px');
       });
   });

   function barOpen() {
       $('#app').css('transform', 'translate(-320px, 0)');
       $('#nav__right-bar').css('transform', 'translate(-320px, 0)');
       $('.nav__btn--floating').css('transform', 'translate(-320px, 0)');
   }
   function barClose() {
       $('#app').css('transform', 'translate(0px, 0)');
       $('#nav__right-bar').css('transform', 'translate(0px, 0)');
       $('.nav__btn--floating').css('transform', 'translate(0px, 0)');
   }
   $('.nav__btn').on('click', function () {
       if (barPosition) barClose();
       else barOpen();
       barPosition = !barPosition;
   });

   // Parallax
   if (!device.desktop()) {
       $('[data-type="parallax"]').each(function () {
           $(this).removeAttr('data-type');
       });
   }
       $('[data-type="parallax"]').each(function () {
           var $bgobj = $(this); // создаем объект
           $(window).scroll(function () {
               var yPos = -($(window).scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент
               // Присваиваем значение background-position
               var coords = 'center ' + yPos + 'px';
               // Создаем эффект Parallax Scrolling
               $bgobj.css({backgroundPosition: coords});
           });
       });

});
