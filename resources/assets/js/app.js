
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue');
var VueMaterial = require('vue-material');

Vue.use(VueMaterial);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('modal', require('./components/Modal.vue'));

const app = new Vue({
    el: '#app'
});

const modal = new Vue ({
   el: '#window',
    data: {
       currentView : 'login'
    },
});

$(document).ready(function () {
   var barPosition = false;
   var element = $('.nav__btn--floating');

   // Youtube
   var tag = document.createElement('script');
   tag.src = "https://www.youtube.com/iframe_api";
   var firstScriptTag = document.getElementsByTagName('script')[0];
   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

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
       $('.footer').css('transform', 'translate(-320px, 0)');
   }
   function barClose() {
       $('#app').css('transform', 'translate(0px, 0)');
       $('#nav__right-bar').css('transform', 'translate(0px, 0)');
       $('.nav__btn--floating').css('transform', 'translate(0px, 0)');
       $('.footer').css('transform', 'translate(0px, 0)');
   }
   $('.nav__btn').on('click', function () {
       if (barPosition) barClose();
       else barOpen();
       barPosition = !barPosition;
   });
   function renderTemplate(content, link = '', resource = '') {
       $('#window > section, #window > iframe').css('display', 'none');
       switch (content) {
           case 'video':
               var player;
               $('#window').css({
                   'padding': '0',
               });
               player = new YT.Player(content, {
                   height: '360',
                   width: '640',
                   videoId: link.substring(17),
               });

               $('#' + content).css({
                   'display': 'block',
                   'height': '360px',
               });
               break;
           default :
               $('#window').css({
                   'padding': '25px',
               });
               $(content).css('display', 'block');
       }

   }
   $('a[href="#modal"]').on('click', function (e) {
       e.preventDefault();
       var content = $(this).attr('data-content');
       var resource = $(this).attr('data-resource');
       var link = $(this).attr('data-link');
       $('#window').html(renderTemplate(content, link, resource));
       $('#modal').css({
           display: 'flex',
       });
       $('body').css({
           //overflow: 'hidden',
       });
   });
   $(document).mouseup(function (e) {
       var container = $("#modal");
       if (container.has(e.target).length === 0){
           container.hide();
           $('body').css({
               overflow: 'auto',
               position: 'relative',
           });
       }
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

               var coords = 'center ' + (($bgobj.offset().top / $bgobj.data('speed')) + yPos) + 'px';
               // Создаем эффект Parallax Scrolling
               $bgobj.css({backgroundPosition: coords});

           });
       });

   // TEMPLATES
});
