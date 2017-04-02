@import "../vendor/bootstrap-3/dist/css/bootstrap.min.css";
@import "../vendor/jqueryui/themes/base/slider.css";
@import "../vendor/idangerous-swiper/src/idangerous.swiper.css";
/*!
 *  Font Awesome 4.3.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.3.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.3.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.3.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.3.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.3.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0);
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-genderless:before,
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
@media (min-width: 768px) {
  .product {
    padding-bottom: 0;
  }
}
.product-header {
  padding: 0;
}
.product-header .product-header-wrapper {
  width: 100%;
  position: relative;
  height: 450px;
  overflow: hidden;
  background: transparent;
}
@media (max-width: 768px) {
  .product-header .product-header-wrapper {
    height: 350px;
  }
}
.product-header .product-header-wrapper:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: none;
  content: " ";
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9InJnYigwLCAwLCAwKSIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSJyZ2IoMCwgMCwgMCkiIHN0b3Atb3BhY2l0eT0iMC41Ii8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
  z-index: 1;
}
@media (max-width: 992px) {
  .product-header .product-header-wrapper:before {
    display: block;
  }
}
.product-header .product-header-wrapper > img {
  max-width: inherit;
  height: inherit;
  position: absolute;
  left: 50%;
  top: 0;
  display: none;
  -webkit-transform: translate(-50%, 0);
  -moz-transform: translate(-50%, 0);
  -o-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
@media (max-width: 768px) {
  .product-header .product-header-wrapper > img.background-sm {
    display: block;
  }
}
@media (max-width: 992px) and (min-width: 769px) {
  .product-header .product-header-wrapper > img.background-md {
    display: block;
  }
}
@media (max-width: 1200px) and (min-width: 993px) {
  .product-header .product-header-wrapper > img.background-lg {
    display: block;
  }
}
@media (max-width: 1440px) and (min-width: 1201px) {
  .product-header .product-header-wrapper > img.background-origin {
    display: block;
  }
}
@media (min-width: 1441px) {
  .product-header .product-header-wrapper > img.background-full {
    display: block;
  }
}
.product-header .product-header-wrapper .product-captions {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  z-index: 2;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.product-header .product-header-wrapper .product-captions .product-caption-wrapper {
  position: relative;
}
.product-header .product-header-wrapper .product-caption {
  position: static;
  text-align: left;
  color: white;
  text-shadow: none;
  float: right;
  margin-right: 100px;
  padding: 0;
}
@media (max-width: 767px) {
  .product-header .product-header-wrapper .product-caption {
    margin: 0 auto;
    float: none;
    text-align: center;
  }
}
.product-header .product-header-wrapper .product-caption * {
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
.product-header .product-header-wrapper .product-caption a {
  color: white;
  text-decoration: underline;
}
.product-header .product-header-wrapper .product-caption a:hover {
  text-decoration: none;
}
.product-header .product-header-wrapper .product-caption .btn-group {
  margin: 20px 0 20px 0;
  width: 100%;
}
.product-header .product-header-wrapper .product-caption .btn-group.btn-group-products {
  margin-bottom: 0;
}
@media (max-width: 992px) {
  .product-header .product-header-wrapper .product-caption .btn-group {
    margin: 15px 0;
  }
}
@media (max-width: 768px) {
  .product-header .product-header-wrapper .product-caption .btn-group {
    margin: 0;
  }
  .product-header .product-header-wrapper .product-caption .btn-group .col-sm-7 {
    margin: 5px 0;
  }
}
.product-header .product-header-wrapper .product-caption .btn-group div {
  text-align: center;
  padding: 0;
  line-height: 43px;
  margin-top: 2px;
}
.product-header .product-header-wrapper .product-caption .btn-group div a.btn {
  text-decoration: none;
  padding: 12px 20px 8px 20px;
}
@media (max-width: 992px) {
  .product-header .product-header-wrapper .product-caption .btn-group div {
    margin: 15px 0;
  }
}
.product-header .product-header-wrapper .product-caption .btn-group div:first-child {
  text-align: left;
  line-height: 45px;
  margin-top: 0;
}
@media (max-width: 768px) {
  .product-header .product-header-wrapper .product-caption .btn-group div:first-child {
    text-align: center;
  }
}
.product-header .product-header-wrapper .product-caption .btn-group a {
  font-weight: bold;
  white-space: nowrap;
}
.product-header .product-header-wrapper .product-caption .btn-group a.btn {
  font-weight: 600;
  padding: 6px 24px;
  text-decoration: none;
}
.product-header .product-header-wrapper .product-caption .btn-group a.btn:hover {
  text-decoration: none;
}
.product-header .product-header-wrapper .product-caption div {
  font-size: 16px;
}
.product-header .product-header-wrapper .product-caption .remaining-time span {
  font-weight: bold;
}
.product-header .product-header-wrapper .product-caption .remaining-time > div.countdown {
  white-space: nowrap;
}
.product-header .product-header-wrapper .product-caption .product-caption-thumbnail {
  margin-bottom: 25px;
}
@media (max-width: 992px) {
  .product-header .product-header-wrapper .product-caption .product-caption-thumbnail {
    display: none;
  }
}
.product-header .product-header-wrapper .product-caption .caption-cta {
  color: white;
  margin-top: 0;
  font-size: 18px;
  font-weight: bold;
}
.product-header .product-header-wrapper .product-caption .caption-cta * {
  text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
}
.product-header .product-header-wrapper .product-caption .caption-name {
  color: white;
  font-size: 32px;
  margin-bottom: 0;
}
.product-introduction .cleaner {
  display: none;
}
@media (max-width: 992px) {
  .product-introduction {
    margin-bottom: 50px;
    padding: 0 15px;
  }
}
@media (max-width: 768px) {
  .product-introduction {
    margin-bottom: 20px;
  }
}
@media (max-width: 767px) {
  .product-introduction {
    text-align: center;
  }
  .product-introduction .cleaner {
    display: block;
  }
}
.product-introduction h1 {
  float: left;
  margin: 0;
  max-width: 75%;
  padding-left: 40px;
  background: url('../img/icon-calc.png') no-repeat scroll left 3px transparent;
  line-height: 40px;
}
@media (max-width: 992px) {
  .product-introduction h1 {
    max-width: 75%;
  }
}
@media (max-width: 767px) {
  .product-introduction h1 {
    float: none;
    display: inline-block;
    margin: 0 auto 15px auto;
    text-align: center;
    margin-bottom: 15px;
    max-width: 100%;
  }
}
.product-introduction .big-arrow {
  float: left;
  width: 100%;
  height: 90px;
  background: url('../img/arrows/dotted-left-to-right-big-long.png') no-repeat scroll 50% bottom transparent;
}
@media (max-width: 992px) {
  .product-introduction .big-arrow {
    display: none;
  }
}
@media (max-width: 1199px) {
  .product-introduction .big-arrow {
    background-position: 35% bottom;
  }
}
.product-introduction .first-loan-link {
  float: right;
  text-align: right;
  display: block;
  max-width: 25%;
  margin-top: 9px;
  color: #fe0000;
  text-decoration: none;
  position: relative;
  padding-right: 20px;
  -webkit-transition: all ease 0.2s;
  -moz-transition: all ease 0.2s;
  -o-transition: all ease 0.2s;
  transition: all ease 0.2s;
}
.product-introduction .first-loan-link:hover {
  text-decoration: none;
  color: #7c7d7c;
}
.product-introduction .first-loan-link:hover > span {
  right: -5px;
}
.product-introduction .first-loan-link span {
  margin: 0;
  position: absolute;
  right: 0;
  top: 6px;
  -webkit-transition: all ease 0.2s;
  -moz-transition: all ease 0.2s;
  -o-transition: all ease 0.2s;
  transition: all ease 0.2s;
}
@media (max-width: 992px) {
  .product-introduction .first-loan-link {
    max-width: 25%;
  }
}
@media (max-width: 767px) {
  .product-introduction .first-loan-link {
    float: none;
    display: inline-block;
    text-align: center;
    margin-bottom: 15px;
    max-width: 100%;
  }
}
.promotion-detail {
  padding: 0;
}
@media (max-width: 767px) {
  .promotion-detail .hide-detail-mobile {
    visibility: hidden;
  }
}
.promotion-detail p {
  font-size: 14px;
}
.promotion-detail h1 {
  font-size: 20px !important;
  margin-bottom: 10px !important;
  text-align: center;
  margin-top: 17px;
  margin-bottom: 30px;
  color: #ff1f20;
}
@media (max-width: 767px) {
  .promotion-detail h1.text-center {
    text-align: center;
  }
}
.promotion-detail .cta-wrapper {
  padding-bottom: 50px;
}
.promotion-detail .cta-wrapper .box .box-part h1 {
  font-size: 28px !important;
  text-align: center;
}
.promotion-detail .loan-list {
  font-weight: bold;
  text-align: center;
  margin-top: 14px;
  margin-bottom: 14px;
}
.promotion-detail .loan-list a {
  background: url('../img/loan-list.png') left center no-repeat;
  background-size: 22px 22px;
  padding-left: 36px;
  text-decoration: none;
}
.promotion-detail .header {
  height: 402px;
  background-position: 50% 15%;
  background-repeat: no-repeat;
  overflow: hidden;
  position: relative;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
.promotion-detail .header .btn-get {
  position: absolute;
  bottom: 15px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.promotion-detail .header .text-wrapper {
  width: 48%;
  position: absolute;
  left: 50%;
  top: 7%;
  text-align: left;
}
.promotion-detail .header .text-wrapper h1 {
  text-align: left;
  color: #ee1c24;
  font-size: 20px;
  font-weight: 700;
  line-height: 23px;
  margin-top: 0;
}
.promotion-detail .header .text-wrapper p {
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
@media (min-width: 480px) {
  .promotion-detail .header .text-wrapper {
    top: 15%;
  }
}
.promotion-detail .header .time-wrapper {
  text-align: center;
  position: absolute;
  bottom: 51px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 300px;
}
.promotion-detail .header .time-wrapper .btn {
  position: static;
  width: 100%;
}
.promotion-detail .header .time-wrapper .btn span {
  vertical-align: middle;
}
@media (max-width: 767px) {
  .promotion-detail .header .time-wrapper .btn {
    width: 90%;
  }
}
@media (min-width: 992px) {
  .promotion-detail .header .time-wrapper {
    -webkit-transform: translateX(20%);
    -moz-transform: translateX(20%);
    -o-transform: translateX(20%);
    -ms-transform: translateX(20%);
    transform: translateX(20%);
  }
}
.promotion-detail .header .time {
  width: 100%;
  text-align: center;
}
@media (min-width: 991px) {
  .promotion-detail .header .time {
    width: auto;
    left: 50%;
  }
}
.promotion-detail .header .time h3 {
  margin: 0;
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
.promotion-detail .header .time .countdown {
  margin-top: 10px;
}
.promotion-detail .header .time .countdown > span {
  display: inline-block;
  position: relative;
  margin-right: 30px;
}
.promotion-detail .header .time .countdown > span:after {
  content: ':';
  display: inline-block;
  position: absolute;
  top: 50%;
  right: -20px;
  color: rgba(74, 76, 78, 0.4);
  font-size: 20px;
  line-height: 24px;
  font-weight: 600;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.promotion-detail .header .time .countdown > span:last-child {
  margin-right: 0;
}
.promotion-detail .header .time .countdown > span:last-child:after {
  display: none;
}
.promotion-detail .header .time .countdown > span > span {
  display: block;
  color: #000;
}
.promotion-detail .header .time .countdown > span > span:first-child {
  font-weight: bold;
  color: #ed1c24;
  font-size: 32px;
  line-height: 36px;
  font-weight: 700;
}
.promotion-detail .header .time .countdown > span > span:last-child {
  color: #fff;
  font-size: 14px;
  line-height: 22px;
  font-weight: 600;
  margin-top: -5px;
}
@media (max-width: 768px) {
  .promotion-header .product-header-wrapper {
    height: 550px;
  }
}
.promotion-header .product-header-wrapper .promotion-testimonial {
  color: white;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  max-width: 300px;
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
.promotion-header .product-header-wrapper .promotion-testimonial * {
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
@media (max-width: 1200px) {
  .promotion-header .product-header-wrapper .promotion-testimonial {
    display: none;
  }
}
.promotion-header .product-header-wrapper .product-caption .btn-group a {
  font-weight: bold;
  white-space: nowrap;
}
.promotion-header .product-header-wrapper .product-caption .btn-group a.btn {
  font-weight: 600;
  padding: 6px 12px;
  text-decoration: none;
}
.promotion-header .product-header-wrapper .product-caption .btn-group a.btn:hover {
  text-decoration: none;
}
.promotion-header .product-header-wrapper .product-caption .promotion-description {
  margin-top: 40px;
}
.promotion-header .product-header-wrapper .product-caption .remaining-time {
  color: #dadada;
}
.promotion-header .product-header-wrapper .product-caption .remaining-time span {
  color: white;
}
.promotion-header .product-header-wrapper .product-caption .remaining-time .countdown span {
  font-weight: normal;
  margin-right: 5px;
  display: inline-block;
}
html[lang="en"] .promotion-header .product-header-wrapper .product-caption .remaining-time .countdown span.minutes {
  min-width: 75px;
}
html[lang="en"] .promotion-header .product-header-wrapper .product-caption .remaining-time .countdown span.seconds {
  min-width: 75px;
}
html[lang="vn"] .promotion-header .product-header-wrapper .product-caption .remaining-time .countdown span.seconds {
  min-width: 60px;
}
.promotion-header .product-header-wrapper .product-caption .caption-title {
  color: white;
  font-size: 32px;
  margin-bottom: 0;
  margin-top: 0;
}
.promotion-header .product-header-wrapper .product-caption .caption-title + .remaining-time {
  margin-top: 15px;
}
.promotion-header .product-header-wrapper .product-caption .caption-name {
  color: white;
  font-size: 24px;
  margin-bottom: 10px;
  font-weight: bold;
}
@media (min-width: 768px) {
  .homepage {
    padding-bottom: 0;
  }
}
.budget-tool {
  padding-bottom: 0;
  background: url('../img/budget-planner/bplanner-bg.jpg') repeat;
}
@media (min-width: 1200px) {
  .budget-tool .budget-head {
    padding-top: 30px;
  }
}
.budget-tool .doodle.bubble-uh-oh {
  position: absolute;
  right: 0;
  max-width: 150px;
  width: 32%;
  z-index: 1;
}
.budget-tool .doodle.go-for-it {
  position: absolute;
  right: 15px;
  width: 120px;
  top: -30px;
}
@media (max-width: 362px) {
  .budget-tool .doodle.go-for-it {
    width: 22%;
    max-width: 120px;
    top: 0px;
  }
}
.budget-tool .doodle.great {
  position: absolute;
  left: 15px;
  width: 120px;
  top: -70px;
}
.budget-tool > .container h2 {
  color: #000000;
  padding: 78px 0;
  font-weight: 700;
}
@media (max-width: 768px) {
  .budget-tool > .container h2 {
    font-size: 18px;
    font-weight: bold;
    margin-top: 45px;
    margin-bottom: 20px;
  }
}
@media (max-width: 700px) {
  .budget-tool > .container h2 {
    background-size: 140px;
    height: 118px;
    padding: 46px 0;
  }
}
@media (max-width: 540px) {
  .budget-tool > .container h2 {
    background-size: 100px;
    height: 86px;
    padding: 30px 0;
  }
}
@media (max-width: 480px) {
  .budget-tool > .container h2 {
    font-size: 18px;
    height: 86px;
    padding: 33px 0;
  }
}
@media (max-width: 400px) {
  .budget-tool > .container h2 {
    background-size: 80px;
    height: 70px;
    padding: 25px 0;
  }
}
@media (max-width: 360px) {
  .budget-tool > .container h2 {
    background-size: 60px;
    height: 53px;
    padding: 16px 0;
  }
}
.budget-tool .inline-img {
  position: absolute;
  width: 25px;
  margin-top: 4px;
}
.budget-tool .question-mark {
  width: 20px;
}
.budget-tool legend {
  padding-left: 35px;
  font-size: 18px;
}
.budget-tool .middle {
  line-height: 70px;
  display: inline-block;
}
.selected-loans {
  margin-top: 8px;
}
@media (max-width: 767px) {
  .selected-loans h3 {
    text-align: center;
  }
}
.selected-loans .recommended-loan {
  color: #75d04f;
  font-size: 30px;
}
@media (max-width: 767px) {
  .selected-loans .recommended-loan {
    text-align: center;
  }
}
.selected-loans table {
  width: 100%;
}
.selected-loans th,
.selected-loans td {
  padding-right: 15px;
  font-size: 16px;
  text-align: center;
}
@media (max-width: 850px) {
  .selected-loans th,
  .selected-loans td {
    font-size: 16px;
  }
}
.selected-loans td:first-child {
  color: #75d04f;
  font-size: 17px;
  font-weight: bold;
}
@media (max-width: 850px) {
  .selected-loans td:first-child {
    font-size: 16px;
  }
}
.selected-loans th {
  font-size: 18px;
  padding-bottom: 5px;
  color: #878787;
}
@media (max-width: 850px) {
  .selected-loans th {
    font-size: 17px;
  }
}
@media (max-width: 450px) {
  .selected-loans th {
    font-size: 15px;
  }
}
.budget-tool-bg {
  margin-bottom: 30px;
  padding-top: 22px;
}
@media (min-width: 1200px) {
  .budget-tool-bg {
    margin-bottom: 0;
  }
}
.budget-tool-bg img {
  max-width: 100%;
}
.budget-tool-form {
  margin: 40px 0;
}
.budget-tool-form .mandatory-text {
  color: #AEAEAE;
  font-size: 14px;
}
.budget-tool-form > .row {
  margin-top: 40px;
}
@media (min-width: 1200px) {
  .budget-tool-form > .row {
    margin-top: 0px;
  }
  .budget-tool-form > .row.last {
    margin-top: 20px;
    background: transparent;
  }
  .budget-tool-form > .row.last > div {
    background: transparent;
  }
}
@media (max-width: 992px) {
  .budget-tool-form > .row {
    margin-top: 15px;
  }
}
.budget-tool-form > .row.income-fields-row {
  margin-top: 20px;
}
@media (max-width: 992px) {
  .budget-tool-form > .row.income-fields-row {
    margin-top: 15px;
  }
}
@media (min-width: 1200px) {
  .budget-tool-form > .row.income-fields-row {
    margin-top: 0px;
  }
  .budget-tool-form > .row.income-fields-row > div {
    padding-top: 20px;
  }
}
.budget-tool-form > .row.mandatory-row {
  margin-top: 0;
}
@media (max-width: 480px) {
  .budget-tool-form > .row {
    padding-top: 0;
    padding-bottom: 0;
  }
}
.budget-tool-form > .row fieldset legend {
  font-weight: bold;
  color: #7c7d7c;
  border: none;
  background-repeat: no-repeat;
  padding-left: 35px;
  line-height: 28px;
}
.budget-tool-form > .row fieldset input[type="radio"] {
  margin-right: 25px;
  margin-bottom: 4px;
  display: none;
}
.budget-tool-form > .row fieldset input[type="radio"]:checked + label:before {
  background-color: #fe0000;
  color: white;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 1px solid #fe0000;
}
.budget-tool-form > .row fieldset input[type="radio"] + label {
  font-weight: 700;
  margin-right: 70px;
  font-size: 14px;
}
.budget-tool-form > .row fieldset input[type="radio"] + label:before {
  content: " ";
  background-color: transparent;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 15px;
  margin-top: -2px;
  vertical-align: middle;
  -webkit-transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  -o-transition: all ease 0.3s;
  transition: all ease 0.3s;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  border: 1px solid #878787;
}
.budget-tool-form > .row fieldset input[type="radio"] + label:hover {
  cursor: pointer;
}
@media (max-width: 992px) {
  .budget-tool-form > .row fieldset input[type="radio"] + label {
    margin-right: 20px;
  }
}
@media (max-width: 767px) {
  .budget-tool-form > .row fieldset input[type="radio"] + label {
    margin-right: 0;
    margin-bottom: 25px;
    display: block;
  }
}
.budget-tool-form > .row fieldset.error {
  position: relative;
}
.budget-tool-form > .row fieldset.error label.error-budgetType {
  color: #fe0000;
  position: absolute;
  left: 0;
  bottom: -22px;
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 0;
  margin-top: 5px;
  margin-top: 0;
}
.budget-tool-form > .row fieldset.error input[type="radio"] + label:before {
  border-color: #fe0000;
}
.budget-tool-form > .row fieldset .form-group {
  position: relative;
  margin-bottom: 35px;
}
@media (max-width: 992px) {
  .budget-tool-form > .row fieldset .form-group {
    margin-bottom: 35px;
  }
}
.budget-tool-form > .row fieldset .form-group label {
  font-size: 16px;
  display: block;
}
.budget-tool-form > .row fieldset .form-group label:hover {
  cursor: pointer;
}
.budget-tool-form > .row fieldset .form-group label .meta-required {
  color: #fe0000;
  font-weight: normal;
}
.budget-tool-form > .row fieldset .form-group label.error {
  color: #fe0000;
  position: absolute;
  left: 0;
  bottom: auto;
  font-weight: normal;
  margin-bottom: 0;
  margin-top: 5px;
}
.budget-tool-form > .row fieldset .form-group .form-control.error {
  border-color: #fe0000;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"] {
  padding-left: 35px;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"]::-webkit-input-placeholder {
  color: #dadada;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"]:-moz-placeholder {
  color: #dadada;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"]::-moz-placeholder {
  color: #dadada;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"]:-ms-input-placeholder {
  color: #dadada;
}
.budget-tool-form > .row fieldset .form-group input[data-type="number"]:focus {
  border-color: inherit;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.budget-tool-form > .row fieldset .form-group .input-placeholder-helper {
  background: transparent;
  position: absolute;
  left: 15px;
  bottom: 0;
  color: #dadada;
  height: 42px;
  padding-top: 10px;
}
.budget-results {
  width: 100% !important;
  display: none;
  padding-bottom: 50px;
  background: url('../img/budget-planner/bplanner-bg.jpg') repeat;
}
@media (min-width: 1200px) {
  .budget-results > .container:not(.container-full) {
    max-width: 830px;
  }
}
@media (min-width: 992px) {
  .budget-results > .container:not(.container-full) {
    max-width: 830px;
  }
}
.budget-results .contact-us {
  margin-top: 50px;
}
.budget-results .contact-us .contact-data {
  text-align: center;
}
.budget-results .contact-us .leaveForm {
  margin-top: 0;
}
.budget-results .results-sections {
  padding: 0 15px;
}
.budget-results .budget-result-loan {
  background-color: white;
  padding: 5px 0 5px;
  position: relative;
  -webkit-border-radius: 2px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 2px;
  -moz-background-clip: padding;
  border-radius: 2px;
  background-clip: padding-box;
  -webkit-box-shadow: 0px 1px 5px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 1px 5px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 1px 5px 1px rgba(0, 0, 0, 0.1);
}
@media (max-width: 992px) {
  .budget-results .budget-result-loan {
    margin-bottom: 30px;
  }
}
.budget-results .budget-result-loan h2 {
  text-align: center;
  font-size: 27px;
  margin: 0;
  margin-bottom: 15px;
  margin-top: 10px;
}
.budget-results .budget-result-loan p {
  padding: 0;
}
.budget-results .budget-result-loan:after,
.budget-results .budget-result-loan:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-width: 12px;
  border-style: solid;
  border-color: transparent transparent #fff transparent;
  top: -24px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.budget-results .budget-result-loan:before {
  border-width: 14px;
  border-color: transparent transparent rgba(0, 0, 0, 0.03) transparent;
  top: -29px;
}
.budget-results .budget-result-loan .result-loan-status {
  border-top: 1px solid #f2f2f2;
  position: relative;
}
.budget-results .budget-result-loan .result-loan-status .disposable-income,
.budget-results .budget-result-loan .result-loan-status .savings-emergency,
.budget-results .budget-result-loan .result-loan-status .income-monthly-installment {
  font-weight: bold;
}
.budget-results .budget-result-loan .result-loan-status .disposable-income.loan-status-error,
.budget-results .budget-result-loan .result-loan-status .savings-emergency.loan-status-error,
.budget-results .budget-result-loan .result-loan-status .income-monthly-installment.loan-status-error {
  color: #fe0000;
}
.budget-results .budget-result-loan .result-loan-status .disposable-income.loan-status-success,
.budget-results .budget-result-loan .result-loan-status .savings-emergency.loan-status-success,
.budget-results .budget-result-loan .result-loan-status .income-monthly-installment.loan-status-success {
  color: #75d04f;
}
.budget-results .budget-result-loan .result-loan-status .disposable-income.loan-status-warning,
.budget-results .budget-result-loan .result-loan-status .savings-emergency.loan-status-warning,
.budget-results .budget-result-loan .result-loan-status .income-monthly-installment.loan-status-warning {
  color: #ffaf32;
}
.budget-results .budget-result-loan .result-loan-status .inline-img {
  width: 22px;
  top: 0;
  bottom: 0;
  margin: auto;
  left: 7px;
}
.budget-results .budget-result-loan .result-loan-heading {
  font-weight: bold;
  color: #878787;
  margin-bottom: 0;
  padding-left: 38px;
  width: 60%;
}
.budget-results .budget-result-loan .result-loan-bottom-heading {
  font-weight: bold;
  color: black;
  margin-bottom: 0;
  padding-left: 38px;
  width: 60%;
  font-size: 17.5px;
}
.budget-results .budget-result-loan p {
  width: 100%!important;
  padding: 0 !important;
  text-align: center;
}
.budget-results .budget-result-loan p:first-child {
  margin-top: 15px;
}
.budget-results .budget-result-loan .result-loan-income,
.budget-results .budget-result-loan .result-loan-expenses {
  width: 38%;
  text-align: right;
  padding-right: 10px;
}
.budget-results .budget-result-loan .result-loan-income,
.budget-results .budget-result-loan .result-loan-expenses,
.budget-results .budget-result-loan .disposable-income,
.budget-results .budget-result-loan .savings-emergency,
.budget-results .budget-result-loan .income-monthly-installment {
  font-size: 25px;
}
.budget-results .budget-result-loan .result-loan-expenses {
  color: #fe0000;
  font-weight: bold;
}
.budget-results .budget-result-loan .result-loan-income {
  color: #000000;
  font-weight: bold;
}
.budget-results .result-info {
  display: none;
  margin-top: 30px;
}
.budget-results .result-info.result-shown {
  display: block;
}
.budget-results .result-info .budget-result-header {
  width: 100%;
  margin-bottom: 30px;
  position: relative;
}
.budget-results .result-info .budget-result-header .budget-result-icon {
  display: inline-block;
  width: 86px;
  height: 88px;
  float: left;
  background-color: transparent;
  background-repeat: no-repeat;
  background-image: url('../img/budget-tool-sprite.png');
  background-attachment: scroll;
  position: absolute;
  left: 0;
  top: 0;
}
.budget-results .result-info .budget-result-header .budget-result-claim {
  display: inline-block;
  vertical-align: middle;
  padding-left: 100px;
  margin-top: 13px;
  font-size: 25px;
}
@media (max-width: 768px) {
  .budget-results .result-info .budget-result-header .budget-result-claim {
    margin-top: 30px;
    font-size: 20px;
  }
}
@media (max-width: 767px) {
  .budget-results .result-info .budget-result-header .budget-result-claim {
    margin-top: 30px;
    font-size: 20px;
  }
}
.budget-results .result-info.result-info-error .budget-result-icon {
  background-position: 0 0;
}
.budget-results .result-info.result-info-warning .budget-result-icon {
  background-position: 0 -88px;
}
.budget-results .result-info.result-info-success .budget-result-icon {
  background-position: 0 -176px;
}
body > .error-404 {
  padding: 0 0 20px;
  background: url('/img/error-background.jpg') no-repeat scroll left top #d0c292;
}
@media (max-width: 767px) {
  body > .error-404 {
    background-position: -130px 0;
  }
}
@media (max-width: 480px) {
  body > .error-404 {
    background-position: -185px 0;
  }
}
.error-404-content {
  display: table;
  width: 100%;
  padding-left: 400px;
  text-align: center;
  min-height: 400px;
}
@media (min-width: 768px) {
  .error-404-content {
    padding-left: 400px;
  }
}
@media (max-width: 767px) {
  .error-404-content {
    padding-left: 190px;
  }
}
@media (max-width: 480px) {
  .error-404-content {
    padding-left: 130px;
  }
}
.error-404-content.content-xs {
  padding: 30px 15px;
  min-height: inherit;
}
.error-404-content .error-404-column {
  width: 100%;
  display: table-cell;
  vertical-align: middle;
}
@media (max-width: 992px) {
  .error-404-content .error-404-column h1 {
    font-size: 32px;
    margin-bottom: 40px;
    margin-top: 0;
  }
}
.error-404-content .error-404-column .link-404 {
  text-transform: uppercase;
  text-decoration: underline;
  color: #fe0000;
}
.error-404-content .error-404-column .link-404:hover {
  text-decoration: none;
}
.documents-download .page-heading {
  position: relative;
}
.documents-download .doodle {
  position: absolute;
}
.documents-download .doodle.d-arrow-down {
  width: 66px;
}
@media (min-width: 768px) {
  .documents-download .doodle.d-arrow-down {
    top: 15px;
    left: 61px;
    width: 87px;
  }
}
.documents-download .doodle.its-great {
  right: 10%;
  top: -15px;
  width: 120px;
}
.documents-download h2 {
  margin: 0;
  color: #ff1f20;
}
.documents-download h2.headline {
  text-align: center;
  line-height: 120px;
  font-weight: bold;
}
@media (max-width: 480px) {
  .documents-download {
    padding-bottom: 0px;
  }
}
.documents-download .document {
  border-bottom: 1px solid #f0f1f1;
}
@media (min-width: 992px) {
  .documents-download .document {
    border: none;
  }
}
.documents-download .document:first-child {
  border-top: 1px solid #f0f1f1;
}
@media (min-width: 992px) {
  .documents-download .document:first-child {
    border-top: none;
  }
}
.documents-download .document:nth-child(even) {
  background: #f8f8f8;
}
.documents-download .document:hover,
.documents-download .document:active {
  background: #ebecec;
}
.documents-download .document.pricelist:nth-child(even) {
  background: none;
}
.documents-download .document.pricelist:nth-child(3n+1) {
  background: #f8f8f8;
}
.documents-download .document.pricelist:hover,
.documents-download .document.pricelist:active {
  background: #ebecec;
}
.documents-download .documents-header {
  padding-bottom: 45px;
}
.documents-download .document-wrapper {
  width: 100%;
  position: relative;
  padding-left: 30px;
  font-size: 15px;
}
@media (max-width: 430px) {
  .documents-download .document-wrapper {
    font-size: 13px;
  }
}
@media (max-width: 280px) {
  .documents-download .document-wrapper {
    font-size: 11px;
  }
}
.documents-download .document-wrapper > * {
  display: inline-block;
  vertical-align: middle;
}
@media (max-width: 335px) {
  .documents-download .document-wrapper span {
    display: none;
  }
}
.documents-download .document-wrapper img {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
@media (max-width: 767px) {
  .documents-download .document-wrapper img {
    width: 20px;
  }
}
@media (max-width: 335px) {
  .documents-download .document-wrapper img {
    width: 15px;
  }
}
.documents-download .document-wrapper i {
  position: absolute;
  top: 50%;
  left: 5px;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.documents-download .document-wrapper i.fa-files-o {
  left: 0;
}
.documents-download .document-wrapper a {
  color: #ff1f20;
  text-decoration: none;
  position: relative;
  display: inline-block;
  padding: 18px 10px 18px 10px;
  width: 100%;
}
.documents-download .document-wrapper a:hover,
.documents-download .document-wrapper a:active,
.documents-download .document-wrapper a:focus {
  outline: none;
  text-decoration: none;
}
.documents-download .document-wrapper a:hover:after,
.documents-download .document-wrapper a:active:after,
.documents-download .document-wrapper a:focus:after {
  right: -20px;
}
.documents-download .document-wrapper a:after {
  top: 52%;
  margin-top: -16px;
  font-size: 20px;
}
.documents-download .document-download {
  padding: 30px 15px;
}
.documents-download .document-download h2 {
  margin-top: 0;
  font-weight: bold;
  color: #ff1f20;
  font-size: 22px;
}
.documents-download .document-download a {
  font-weight: bold;
  color: #7f7f7f;
  text-decoration: underline;
}
.documents-download .document-download a:hover,
.documents-download .document-download a:active {
  text-decoration: none;
}
.documents-download .document-download a span {
  text-transform: uppercase;
}
.documents-download .document-download .icon {
  text-align: center;
}
.documents-download .document-download:last-child {
  border-bottom: 1px solid #f0f1f1;
}
.documents-download .back-documents {
  padding-left: 20px;
  text-transform: uppercase;
  display: inline-block;
  line-height: 120px;
  font-weight: bold;
  margin-left: -12px;
}
.documents-download .doodle-container {
  text-align: right;
  padding-top: 13px;
  padding-right: 22px;
  padding-bottom: 13px;
}
.documents-download .like {
  position: absolute;
  top: 12px;
  right: 22px;
}
@media (max-width: 389px) {
  .documents-download .like {
    top: 50px;
    width: 23%;
  }
}
.documents-download .document-row {
  border-top: 1px solid #f0f1f1;
}
.documents-download .document-row:nth-child(2n) {
  background: #fdfdfd;
}
.financial-literacy {
  padding-bottom: 0;
  position: relative;
}
.financial-literacy .faq-categories h2 {
  color: #ff1f20;
  font-size: 27px;
  font-weight: 700;
  text-align: center;
}
.financial-literacy .faq-categories h3 {
  color: #404040;
  opacity: 0.5;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  margin-top: 15px;
  margin-bottom: 23px;
}
.financial-literacy .faq-categories .faq-listing h2 {
  color: #7f7f7f;
  margin: 8px 0 20px 0;
  font-size: 23px;
}
.financial-literacy .doodle.kiss {
  position: absolute;
  top: 15px;
  right: 15px;
  width: 120px;
}
@media (min-width: 992px) {
  .financial-literacy .doodle.kiss {
    right: 18%;
  }
}
@media (max-width: 767px) {
  .financial-literacy .doodle.kiss {
    width: 79px;
    margin-top: 25px;
    right: 0;
  }
}
@media (max-width: 358px) {
  .financial-literacy .doodle.kiss {
    width: 60px;
    margin-top: 36px;
  }
}
.financial-literacy .doodle.uh-oh {
  position: absolute;
  width: 50px;
  left: 15px;
  margin-top: 5px;
}
@media (min-width: 992px) {
  .financial-literacy .doodle.uh-oh {
    left: 10%;
  }
}
.loan-process {
  padding: 0;
  position: relative;
  color: #fff;
}
.loan-process h2.title {
  position: absolute;
  top: 7px;
  z-index: 5;
  color: #fff;
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
}
@media (min-width: 992px) {
  .loan-process h2.title {
    top: -25px;
    color: #fff !important;
  }
}
@media (max-width: 992px) {
  .loan-process h2.title.loan-process-hp-mobile {
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
  }
}
.loan-process .img-wrapper {
  margin: 0 auto;
  width: 100%;
  height: 330px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  background-position: 50%;
  background-repeat: no-repeat;
  overflow: hidden;
}
@media (min-width: 992px) {
  .loan-process .img-wrapper {
    -webkit-border-radius: 160px;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 160px;
    -moz-background-clip: padding;
    border-radius: 160px;
    background-clip: padding-box;
    width: 200px;
    height: 200px;
  }
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
  height: 560px;
  background: #768e94;
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
  width: 100%;
  text-align: center;
  top: 20px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper h2 {
  white-space: nowrap;
}
@media (min-width: 768px) {
  .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
    top: 40px;
  }
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info {
  width: 100%;
  margin: 0 auto;
}
@media (min-width: 768px) {
  .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info {
    width: 320px;
  }
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .vertical-align {
  height: 131px;
  display: table;
  width: 100%;
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .vertical-align .content-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .vertical-align .content-wrapper h3 {
  margin-top: 0;
  font-family: OpenSans;
  color: #ffffff;
  font-size: 20px;
  line-height: 24px;
  font-weight: 700;
  text-align: center;
  white-space: nowrap;
}
.loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .vertical-align .content-wrapper p {
  color: #ffffff;
  font-size: 14px;
  line-height: 18px;
  text-align: center;
  padding: 0 10px;
  margin: 0;
}
.loan-process .carousel-container .swiper-pagination .swiper-pagination-switch {
  border-color: #fff;
}
.loan-process .carousel-container .swiper-pagination .swiper-pagination-switch.swiper-active-switch {
  background: #fff;
}
@media (max-width: 767px) {
  .loan-process .carousel-container .swiper-next,
  .loan-process .carousel-container .swiper-prev {
    top: 157px;
  }
}
@media (min-width: 768px) {
  .loan-process-desktop {
    padding-bottom: 0 !important;
  }
}
.lp-step1,
.lp-step2,
.lp-step3,
.lp-step4 {
  z-index: 1;
}
.lp-step1:after,
.lp-step2:after,
.lp-step3:after {
  position: absolute;
  content: '';
  display: block;
  width: 200px;
  height: 200px;
  z-index: -1;
  margin-left: 138px;
  top: 80px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAAXCAMAAADEKvEKAAAAhFBMVEUAAABfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZfznZWXKUwAAAAK3RSTlMAAgpbGQb8Lx4VDfJQNm9EaWEj9+zkqoNU3KSLPCkRybawvZjDnXbQkX1Mjl3T5wAAAo1JREFUWMPlmMmS2kAQRF9rX0BCEgIhkNgGGKb+///cXRE4fHDY4W1GeN4hqdAxSWVXi3fFOMm6xGpQzN28cMqQ8mlIisHqNuqtvsjSc9oEsJKohrvkCcQvvYf9SfhPKfuZ1Y0sQ2hERjdH6cOKo0is+uZsER8KaWLwFh3/EfOzMyGXxsO0asU6P399Hlx3Tu9ujg+vIVSS13BWQ9ZqTnavDM+NN6utthKNcJONgXgd81OCzEqyOntqxQxeRTqXkDeelqPkI+ylDWF8G3/HzMJHDSlhq8r8yTqkvB09l4QogdQP+DNC3+XhVRNylWbgSagTKyf9B+OLz9/Du1ZWe31ZunyfMXV8iXau/9uUf0K9ctV60IQMq/tE67RbhBrjBRCE/Etm+W1UQ0p0PZsYM5E1JMfLu0V3K00NvUSDq9NJbKqmWMXgOyveFbNL0JVsDmvdVEk9PpSdyAFMVYR8AOna5/GyLKI2+CBDzCovoG5kywcTH7YGjlqnfrSs3SMr70LQjTCIbIBkN5Emn99Wnh641eMsM9U/X9rDVvZWT9GVyRHvD6NupwVUqtlxHwNJ+Zdt2bZXGCNpsUwkDt8h6C+ZWnHVSu8haeQM5rzxXYC2+qFkFmAZMn6xYvxVCalIDswukzvOv4ep3LZTLyNf6/1kZ32pw1wvySdZ6q1vmT4qZsdPWLjjMtAkmIO88mx4qdOiHyDcu5I3rWyMfjQJ4EVkBxetmAJSw1cyz2k5M3Y8taXW4x68pRywTH/9/zFqS1IlVueXzulpa1zFHDPIrCUnA37+4sFbsxygEylUj5Dm0gNB6fH/k4uksNeknPUesRC5Q7BpOjUh5LOw2Kx5pCK+nUYIr3c7Yz5DEL7lC2ukNaPUNoSYAAAAAElFTkSuQmCC") left top no-repeat;
}
.lp-step2:after {
  margin-left: 127px;
  top: 105px;
  background: url('../img/loan-process/step2.png') left top no-repeat;
}
.lp-step1:before,
.lp-step2:before,
.lp-step3:before,
.lp-step4:before {
  content: '1';
  color: red;
  font-weight: bold;
  line-height: 40px;
  position: absolute;
  width: 40px;
  height: 40px;
  background-color: #fff;
  border-radius: 100%;
  left: 51px;
  -webkit-box-shadow: 2px 2px 0.1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 2px 2px 0.1px rgba(0, 0, 0, 0.1);
  box-shadow: 2px 2px 0.1px rgba(0, 0, 0, 0.1);
}
.lp-step1:before {
  background-color: #ff1f20;
  color: #fff;
}
.lp-step2:before {
  content: '2';
}
.lp-step3:before {
  content: '3';
}
.lp-step4:before {
  content: '4';
  background-color: #74D14E;
  color: #fff;
}
#tooltip {
  text-align: center;
  color: #fff;
  background: #111;
  position: absolute;
  z-index: 100;
  padding: 20px 15px 15px 15px;
  font-size: 14px;
  line-height: 18px;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
}
@media (max-width: 767px) {
  #tooltip {
    padding: 40px 15px 15px;
  }
  #tooltip:before {
    content: '';
    background: #111111 url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAABZ0lEQVR4Aa3VCXHcQBQEUEEQhEAQAy+DCEIYZBnEDCwGIyYrBhKDXQYaBi+Hk1+Z0vftrnO6uv81V5fDqLhYweqi+Nq9Dr4odhl2Rf+S/T43B3Y/njb31hDeTE6GP/zgZHIDsKZ1GCL34pQmOFmijuGQPeznZ1s8R4g+K74ecyd1VLC2owOJPQ8B3MfG2dvifVNCn3DOTRtmsPwnRchTzgLmx0WN8kMa8pSLNvbHQwu3REw5MHPobmD818DUdXkIrT1g+uuzRAN5iNQeTSydDQyHmef2gAGsHRB8HoI5UYDXBih5AF7fQklb2F4/REo+xOe3cW5WJdvGEVxze360moOUH+Wwp1w0UOMy4dLIQ5pzNmKtVw/XOaQZ5wyq/nMelCiJ/VVP2g62ho42+P6qRzXKDxgixOXJZ30N+5AJehuAqwd38bHceXAFsOmf+9qq51Cb0WXQm1W5ec5zJzCaLTawWUzGXPkTVOKX9atd8eYAAAAASUVORK5CYII=");
    position: absolute;
    width: 32px;
    height: 32px;
    display: inline-block;
    top: 4px;
    right: 4px;
  }
}
#tooltip:after {
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid #111;
  content: '';
  position: absolute;
  left: 50%;
  bottom: -9px;
  margin-left: -10px;
}
#tooltip.top:after {
  border-top-color: transparent;
  border-bottom: 10px solid #111;
  top: -20px;
  bottom: auto;
}
#tooltip.left:after {
  left: 10px;
  margin: 0;
}
#tooltip.right:after {
  right: 10px;
  left: auto;
  margin: 0;
}
.wcl {
  padding-top: 50px;
  padding-bottom: 0;
}
.wcl .doodle {
  position: absolute;
}
.wcl .doodle.wow {
  width: 36px;
  right: 38%;
  top: -27px;
}
@media (min-width: 566px) {
  .wcl .doodle.wow {
    min-width: 36px;
    max-width: 56px;
    width: 30%;
    left: 30%;
    top: -51px;
  }
}
@media (min-width: 1200px) {
  .wcl .doodle.wow {
    left: 41%;
  }
}
.wcl .heading {
  background: url('../img/about-us/blue-pattern.jpg');
  margin-top: -50px;
  padding: 40px 0 30px;
}
@media (max-width: 480px) {
  .wcl .heading {
    margin-top: -53px;
  }
}
.wcl .heading .section-img {
  max-width: 100%;
  margin-top: 5px;
  max-height: 380px;
  float: right;
}
@media (max-width: 480px) {
  .wcl .heading .section-img {
    max-height: 240px;
  }
}
.wcl .heading .headline h1 {
  margin-bottom: 25px;
}
.wcl .heading .headline h2 {
  color: #ee1c24;
  font-size: 20px;
  line-height: 23px;
  margin-top: 0;
  color: #ff1f20;
  font-weight: 700;
}
.wcl .heading .headline p {
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
.wcl .heading .wcl-would h3 {
  color: #404040;
  font-size: 24px;
  line-height: 32px;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  margin: 0;
  font-size: 20px;
  margin-bottom: 30px;
  margin-top: 30px;
}
.wcl .heading .wcl-would .item {
  text-align: center;
  margin-bottom: 20px;
}
.wcl .heading .wcl-would .item img {
  margin: 0 auto 10px;
  max-width: 100%;
  max-height: 140px;
}
@media (max-width: 480px) {
  .wcl .heading .wcl-would .item img {
    max-height: 65px;
  }
}
@media (max-width: 480px) {
  .wcl .heading .wcl-would .item p {
    max-height: 80px;
    font-size: 14px;
  }
}
.wcl .find-more {
  background: #768e94;
}
.wcl .find-more a {
  color: #ffffff;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
  position: relative;
  font-size: 14px;
}
.wcl .find-more a:after {
  color: #fff;
  font-size: 19px;
}
.wcl .find-more a:hover,
.wcl .find-more a:focus {
  color: #ffffff;
}
.wcl-new .sub-heading h2 {
  font-size: 38px!important;
  color: #ff1f20;
  font-weight: bold;
  margin-bottom: 5px;
}
.wcl-new .sub-heading span {
  color: #ff1f20;
  font-weight: bold;
  font-size: 20px;
}
.wcl-new .steps-img {
  max-width: 80%;
  display: block;
  margin: 30px auto;
}
@media (max-width: 480px) {
  .wcl-new .steps-img {
    max-width: 90%;
  }
}
.wcl-new .wcl-temper {
  background: url('../img/wcl/bg-red.png') center center;
}
.wcl-new .temper-bike {
  min-width: 170px;
  margin-left: -60px;
}
.wcl-new .impatient-people .simple-steps p {
  text-align: left;
  color: #000;
  font-weight: normal;
  font-variant: normal;
  text-decoration: none;
  font-style: normal;
}
.wcl-new .impatient-people.wcl2 .simple-steps li {
  position: relative;
}
.wcl-new .impatient-people.wcl2 .simple-steps li:before {
  left: -35px;
}
.wcl-new .impatient-people.wcl2 .simple-steps li:last-child:before {
  left: -35px;
}
.wcl-new .impatient-people.wcl2 .simple-steps li:after {
  top: 10px;
  height: 100%;
  left: -30px;
  margin-top: 0;
}
.wcl-features.desktop {
  display: none;
}
.loan-list {
  font-weight: bold;
  text-align: center;
  margin-top: -15px;
  margin-bottom: 14px;
}
@media (max-width: 767px) {
  .loan-list {
    margin-top: 0px;
  }
}
.loan-list a {
  background: url('../img/loan-list.png') left center no-repeat;
  background-size: 22px 22px;
  padding-left: 36px;
}
@media all and (min-width: 768px) {
  .wcl-wcl1 .long-requirement img,
  .wcl-wcl1 .impatient-people img,
  .wcl-wcl1 .wcl-temper img {
    max-width: 160px;
  }
  .wcl-wcl2 .long-requirement img,
  .wcl-wcl2 .wcl-temper img {
    max-width: 160px;
  }
}
@media all and (min-width: 968px) {
  .wcl .heading .section-img {
    margin-right: 60px;
  }
  .wcl-features.mobile,
  .wcl-would {
    display: none;
  }
  .wcl-features.desktop {
    display: block;
  }
  .wcl-features .item {
    text-align: center;
  }
  .wcl-features .item img {
    height: 102px !important;
    width: auto;
    margin-top: 30px;
  }
  .wcl-features .item p {
    padding-top: 20px;
  }
  .calculator-results {
    margin: 15px 0;
    padding: 15px;
  }
  .long-requirement h2,
  .impatient-people h2,
  .wcl-temper h2 {
    font-size: 24px !important;
  }
  .long-requirement p.subtitle,
  .impatient-people p.subtitle,
  .wcl-temper p.subtitle {
    font-size: 17px;
  }
}
.loan-process-desktop {
  background: #768e94;
  padding-bottom: 40px;
}
.loan-process-desktop h2.title {
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
  text-align: center;
  margin-bottom: 38px;
  margin-top: 36px;
}
.loan-process-desktop .img-wrapper {
  background-clip: padding-box;
  background-size: cover;
  background-position: 50%;
  background-repeat: no-repeat;
  overflow: hidden;
  width: 220px;
  height: 220px;
  border-radius: 110px;
}
.loan-process-desktop .content-wrapper {
  color: #fff;
  text-align: center;
  padding: 20px 0;
}
@media (min-width: 992px) {
  .loan-process h2.title {
    font-size: 28px;
  }
  .loan-process p {
    font-size: 16px;
  }
  .loan-process .btn {
    position: relative;
  }
  .loan-process .btn .doodle {
    position: absolute;
    z-index: 50;
    pointer-events: none;
    width: 126px;
    bottom: -16px;
    right: -140px;
  }
}
.loan-process.desktop {
  display: none;
}
.pos-loan-list-bg {
  background: #ffffff;
  padding-top: 1px;
}
@media (min-width: 992px) {
  .loan-process {
    display: none;
  }
  .loan-process.desktop {
    display: block;
    padding: 10px 0 0 0;
  }
  .loan-process.desktop .step-info .content-wrapper {
    padding-top: 24px;
  }
  .loan-process.desktop .step-info .content-wrapper p {
    text-align: center;
  }
  .loan-process.desktop .step-info .btn {
    margin-top: 20px;
  }
  .loan-process h2.title {
    position: static;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -o-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
  .loan-process .see-details {
    position: relative;
    margin-top: 20px;
    margin-bottom: 10px;
    margin-right: 15px;
    color: #fff;
  }
  .loan-process .see-details:after {
    content: '\203A';
    position: absolute;
    width: 20px;
    height: 20px;
    right: -26px;
    top: -1px;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
  }
  .loan-process .see-details:hover:after {
    right: -36px;
  }
}
#homepage-info {
  color: #fe0000;
  padding: 15px 0;
}
#homepage-info p {
  font-size: 15px;
  line-height: 20px;
  margin: 0;
  text-align: center;
}
#homepage-info p span {
  background-image: url('/img/info.jpg');
  background-repeat: no-repeat;
  background-size: 14px;
  background-position: 0 4px;
  padding-left: 25px;
}
#homepage-info p a {
  text-decoration: underline;
}
#homepage-info p a:hover,
#homepage-info p a:focus {
  text-decoration: none;
}
.why-hc h2 {
  color: #ff1f20;
  font-weight: 700;
  text-align: center;
  padding: 0 15px;
  font-size: 22px;
  margin-top: 20px;
}
.why-hc ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.why-hc ul li {
  /* text-align: left; */
  padding-left: 43px;
  background: url(../img/check.png) top left no-repeat;
  background-size: 28px 21.6px;
  margin: 37.5px 0 30px 0;
  font-size: 15px;
}
.about-history {
  background: url('../img/about-hc-group/history-bg.jpg') 0 0 repeat;
}
.about-history img {
  width: 100%;
  margin-bottom: 38.5px;
}
.about-history h2 {
  font-weight: bold;
  text-align: center;
  margin: 30px 0;
  font-size: 20px;
  color: #ff1f20 !important;
}
.about-history p {
  color: white;
  font-size: 14px;
  padding: 0 15px;
  margin-bottom: 37px;
}
.about-history .history-image {
  width: 100%;
  overflow: hidden;
  height: 300px;
  margin-bottom: 30px;
  background-position: center center;
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
.about-history .history-image.first {
  background-image: url(../img/about-hc-group/history1.jpg);
}
.about-history .history-image.second {
  background-image: url(../img/about-hc-group/history2.jpg);
}
.about-history .zuile {
  position: absolute;
  width: 85px;
  right: 25px;
  top: -15px;
}
.policy {
  padding: 40px 0;
}
/* HC China specific */
.sectionH1 {
  color: #404040;
  font-size: 24px;
  line-height: 32px;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  margin: 0;
}
.baseH2 {
  font-weight: bold;
  font-size: 22px;
}
.smallFont {
  font-size: 14px;
  line-height: 15px;
}
.middleFont {
  font-size: 18px;
  line-height: 19px;
}
.posCategoryH2 {
  font-size: 18px;
  line-height: 19px;
  font-weight: bold;
}
.carouselH2 {
  color: #ee1c24;
  font-size: 20px;
  font-weight: 700;
  line-height: 23px;
  margin-top: 0;
}
.firstLoanH2 {
  color: #414042;
  font-size: 14px;
  font-weight: 700;
  line-height: 19px;
}
.red-h2 {
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
}
.firstLoanH2Box {
  color: #ff1f20;
  font-size: 22px;
  font-weight: 700;
  line-height: 26px;
}
.pos-loanText {
  font-weight: bold;
  font-size: 18px;
  line-height: 19px;
}
.loanProcessP {
  color: #ffffff;
  font-size: 14px;
  line-height: 18px;
}
.mainCarouselP {
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
.carouselTimeNumber {
  color: #ed1c24;
  font-size: 32px;
  line-height: 36px;
  font-weight: 700;
}
.carouselTimeText {
  color: #fff;
  font-size: 14px;
  line-height: 22px;
  font-weight: 600;
  margin-top: -5px;
}
.btn-getText {
  color: #ffffff;
  font-size: 18px;
  line-height: 22px;
  text-transform: uppercase;
  font-weight: 700;
}
.formTitle {
  font-size: 18px;
  line-height: 19px;
  font-weight: bold;
}
.formText {
  font-size: 14px;
  line-height: 18px;
}
.v-center {
  margin-top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.red {
  color: #ff1f20;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-Bold.eot');
  src: url('../fonts/OpenSans-Bold.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-Bold.woff') format('woff'), url('../fonts/OpenSans-Bold.ttf') format('truetype'), url('../fonts/OpenSans-Bold.otf') format('opentype'), url('../fonts/OpenSans-Bold.svg#OpenSans-Bold') format('svg');
  font-weight: 700;
  font-style: normal;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-BoldItalic.eot');
  src: url('../fonts/OpenSans-BoldItalic.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-BoldItalic.woff') format('woff'), url('../fonts/OpenSans-BoldItalic.ttf') format('truetype'), url('../fonts/OpenSans-BoldItalic.otf') format('opentype'), url('../fonts/OpenSans-BoldItalic.svg#OpenSans-BoldItalic') format('svg');
  font-weight: 700;
  font-style: italic;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-Italic.eot');
  src: url('../fonts/OpenSans-Italic.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-Italic.woff') format('woff'), url('../fonts/OpenSans-Italic.ttf') format('truetype'), url('../fonts/OpenSans-Italic.otf') format('opentype'), url('../fonts/OpenSans-Italic.svg#OpenSans-Italic') format('svg');
  font-weight: 400;
  font-style: italic;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-Light.eot');
  src: url('../fonts/OpenSans-Light.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-Light.woff') format('woff'), url('../fonts/OpenSans-Light.ttf') format('truetype'), url('../fonts/OpenSans-Light.otf') format('opentype'), url('../fonts/OpenSans-Light.svg#OpenSans-Light') format('svg');
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans.eot');
  src: url('../fonts/OpenSans.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans.woff') format('woff'), url('../fonts/OpenSans.ttf') format('truetype'), url('../fonts/OpenSans.otf') format('opentype'), url('../fonts/OpenSans.svg#OpenSans-Regular') format('svg');
  font-weight: 400;
  font-style: normal;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSansLight-Italic.eot');
  src: url('../fonts/OpenSansLight-Italic.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSansLight-Italic.woff') format('woff'), url('../fonts/OpenSansLight-Italic.ttf') format('truetype'), url('../fonts/OpenSansLight-Italic.otf') format('opentype'), url('../fonts/OpenSansLight-Italic.svg#OpenSansLight-Italic') format('svg');
  font-weight: 300;
  font-style: italic;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-SemiboldItalic.eot');
  src: url('../fonts/OpenSans-SemiboldItalic.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-SemiboldItalic.woff') format('woff'), url('../fonts/OpenSans-SemiboldItalic.ttf') format('truetype'), url('../fonts/OpenSans-SemiboldItalic.otf') format('opentype'), url('../fonts/OpenSans-SemiboldItalic.svg#OpenSans-SemiboldItalic') format('svg');
  font-weight: 600;
  font-style: italic;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
@font-face {
  font-family: 'OpenSans';
  src: url('../fonts/OpenSans-Semibold.eot');
  src: url('../fonts/OpenSans-Semibold.eot?#iefix') format('embedded-opentype'), url('../fonts/OpenSans-Semibold.woff') format('woff'), url('../fonts/OpenSans-Semibold.ttf') format('truetype'), url('../fonts/OpenSans-Semibold.otf') format('opentype'), url('../fonts/OpenSans-Semibold.svg#OpenSans-Semibold') format('svg');
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  unicode-range: U+0020-FFFD;
}
* {
  font-family: 'OpenSans', sans-serif;
}
.color-basic {
  color: #3a3a3a;
}
.color-basic:hover {
  color: #3a3a3a;
}
.color-red {
  color: #fe0000;
}
.color-red:hover {
  color: #fe0000;
}
.color-orange-red {
  color: #fe6263;
}
.color-orange-red:hover {
  color: #fe6263;
}
.color-white {
  color: #fff;
}
.color-green {
  color: #75d04f;
}
.color-green:hover {
  color: #75d04f;
}
.color-gray {
  color: #7c7d7c;
}
.color-gray:hover {
  color: #7c7d7c;
}
.color-light-gray {
  color: #878787;
}
.color-light-gray:hover {
  color: #878787;
}
.color-extra-light-gray {
  color: #dadada;
}
.color-extra-light-gray:hover {
  color: #dadada;
}
.color-red {
  color: #ff1f20;
}
a.link-with-arrow:after {
  content: ' \203A';
  position: absolute;
  right: -20px;
  color: #ff1f20;
  width: 20px;
  height: 20px;
  top: -3px;
  font-size: 18px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
a.link-with-arrow:hover:after {
  right: -25px;
}
a.link-with-arrow-left {
  position: relative;
}
a.link-with-arrow-left:before {
  content: ' \2039';
  position: absolute;
  left: 5px;
  color: #ff1f20;
  width: 20px;
  height: 20px;
  top: -3px;
  font-size: 18px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
a.link-with-arrow-left:hover:before {
  left: -2px;
}
.bg-white {
  background-color: #ffffff;
}
.bg-light-gray {
  background-color: #f2f2f2;
}
.bg-gray {
  background-color: #494949;
}
.bg-green {
  background-color: #33d000;
}
.bg-success {
  background-color: #eeffd8;
}
.bg-dark-gray {
  background-color: #313131;
}
.bg-dotted-gray {
  background: #494949 url("../img/bg-dotted-gray.png");
}
.bg-dotted-dark-gray {
  background: #313131 url("../img/bg-dotted-dark-gray.png");
}
.bg-greenish {
  background-color: #768e94;
}
.ptb30 {
  padding: 30px 0;
}
.pt20 {
  padding-top: 20px;
}
.plr20 {
  padding-left: 20px;
  padding-right: 20px;
}
.both {
  clear: both;
}
.block {
  display: block;
}
.none {
  display: none;
}
.fs-15 {
  font-size: 15px;
}
.fs-18 {
  font-size: 18px;
}
.p15 {
  padding: 15px;
}
.pb40 {
  padding-bottom: 40px;
}
.pb30 {
  padding-bottom: 30px;
}
.mt-15 {
  margin-top: -15px;
}
.mt0 {
  margin-top: 0px;
}
.mt10 {
  margin-top: 10px;
}
.mt15 {
  margin-top: 15px;
}
.mt18 {
  margin-top: 18px;
}
.mt20 {
  margin-top: 20px;
}
.mt40 {
  margin-top: 40px;
}
.mt30 {
  margin-top: 30px;
}
.mb20 {
  margin-bottom: 20px;
}
.mb28 {
  margin-bottom: 28px;
}
.mb30 {
  margin-bottom: 30px;
}
.mb40 {
  margin-bottom: 40px;
}
.mt100 {
  margin-top: 100px;
}
.h220 {
  display: block;
  height: 220px;
}
.h200 {
  display: block;
  height: 200px;
}
@media (max-width: 991px) {
  .md-top-30 {
    margin-top: 30px;
  }
}
@media (max-width: 991px) {
  .md-top-40 {
    margin-top: 40px;
  }
}
@media (max-width: 767px) {
  .sm-top-20 {
    margin-top: 20px;
  }
}
@media (max-width: 767px) {
  .sm-top-30 {
    margin-top: 30px;
  }
}
@media (max-width: 767px) {
  .sm-top-40 {
    margin-top: 40px;
  }
}
@media (max-width: 767px) {
  .sm-top-70 {
    margin-top: 70px;
  }
}
@media (max-width: 767px) {
  .sm-p-top-0 {
    padding-top: 0px !important;
  }
}
.form-small .sm-p-top-0 {
  padding-top: 0px !important;
}
@media (min-width: 768px) {
  .sm-offset-half {
    margin-left: 4.16666666%;
  }
}
.fix-width {
  width: 100% !important;
}
.min-375,
.max-374 {
  display: none;
}
@media (min-width: 375px) {
  .min-375 {
    display: block;
  }
}
@media (max-width: 767px) {
  .max-767 {
    display: none;
  }
}
@media (max-width: 374px) {
  .max-374 {
    display: block;
  }
}
a.disabled {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: .65;
}
.clearfix {
  overflow: auto;
}
.cleaner {
  display: block;
  width: 100%;
  margin: -1px 0 0 0;
  visibility: hidden;
  clear: both;
  height: 1px;
  background: transparent;
  border: none;
}
.tel {
  color: inherit;
}
.tel:hover {
  color: #fe0000;
}
@media (max-width: 991px) {
  .hidden-md-custom {
    display: none !important;
  }
}
.bold {
  font-weight: bold;
}
html body .anti-adBlock {
  display: block !important;
  orphans: initial !important;
}
.cover {
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
.underline {
  text-decoration: underline;
}
.ttip {
  margin: 10px auto 0;
  cursor: pointer;
  display: block;
  width: 25px;
  height: 25px;
  background-color: transparent;
  padding: 0;
}
.ttip + span {
  display: none;
  font-size: 14px;
  line-height: 18px;
  position: absolute;
  bottom: 100%;
  right: 7px;
  margin-left: 7px;
  margin-bottom: 15px;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
  background: #fff;
  padding: 25px 15px 15px;
  color: #000;
  -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.2);
}
.ttip + span > span.glyphicon {
  position: absolute;
  padding: 5px;
  right: 0;
  top: 0;
}
@media (min-width: 991px) {
  .ttip + span > span.glyphicon {
    display: none;
  }
}
.ttip + span:before {
  content: '';
  display: block;
  position: absolute;
  right: 7px;
  bottom: -10px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 15px 15px 0 15px;
  border-color: #fff transparent transparent transparent;
}
.ttip + span:after {
  content: '';
  display: block;
  position: absolute;
  width: 100%;
  height: 15px;
  bottom: -15px;
  left: 0;
}
.ttip-container {
  display: block;
  position: relative;
  cursor: pointer;
  min-width: 179px;
}
.ttip-container .ttip + span {
  color: #000;
  right: 50%;
  -webkit-transform: translateX(50%);
  -moz-transform: translateX(50%);
  -o-transform: translateX(50%);
  -ms-transform: translateX(50%);
  transform: translateX(50%);
  width: 260px;
}
@media (max-width: 767px) {
  .ttip-container .ttip + span {
    width: 100%;
  }
}
@media (min-width: 992px) {
  .ttip-container .ttip + span {
    width: 380px;
  }
}
.ttip-container .ttip + span:before {
  content: '';
  display: block;
  position: absolute;
  right: 50%;
  -webkit-transform: translateX(50%);
  -moz-transform: translateX(50%);
  -o-transform: translateX(50%);
  -ms-transform: translateX(50%);
  transform: translateX(50%);
}
.relative {
  position: relative;
}
.silver-border {
  border: 1px solid #f0f1f1;
}
.p10 {
  padding: 10px;
}
.middle {
  vertical-align: middle;
}
.headroom--pinned .nav-top {
  -webkit-transition: all 0s ease 0s;
  -moz-transition: all 0s ease 0s;
  -o-transition: all 0s ease 0s;
  transition: all 0s ease 0s;
  height: 75px;
}
.headroom--pinned .page-logo {
  -webkit-transition: all 0s ease 0s;
  -moz-transition: all 0s ease 0s;
  -o-transition: all 0s ease 0s;
  transition: all 0s ease 0s;
  margin-top: -16px;
}
.headroom--pinned .loans-wrapper {
  -webkit-transition: 0.2s !important;
  -moz-transition: 0.2s !important;
  -o-transition: 0.2s !important;
  transition: 0.2s !important;
}
.headroom--unpinned .page-logo {
  -webkit-transition: all 0s ease 0s;
  -moz-transition: all 0s ease 0s;
  -o-transition: all 0s ease 0s;
  transition: all 0s ease 0s;
}
@media (max-width: 991px) {
  .headroom--unpinned .page-logo {
    margin-top: 0!important;
  }
}
.headroom--unpinned .page-logo img {
  width: 66px!important;
}
@media (min-width: 1200px) {
  .headroom--unpinned .page-logo img {
    width: 104px!important;
  }
}
@media (max-width: 991px) {
  .headroom--unpinned .nav-main .background-holder {
    -webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
  }
  .headroom--unpinned .loans-wrapper {
    -webkit-transition: 0.2s !important;
    -moz-transition: 0.2s !important;
    -o-transition: 0.2s !important;
    transition: 0.2s !important;
    -webkit-transform: translateY(-56px);
    -moz-transform: translateY(-56px);
    -o-transform: translateY(-56px);
    -ms-transform: translateY(-56px);
    transform: translateY(-56px);
  }
}
a[href^="http://tongji.baidu"] {
  display: none;
}
a[href^="tel:"],
a.text-phone {
  cursor: default;
  color: #404040;
  text-decoration: none;
}
a[href^="tel:"]:hover,
a.text-phone:hover {
  color: #404040;
  text-decoration: none;
}
@media (max-width: 767px) {
  a[href^="tel:"],
  a.text-phone {
    cursor: pointer;
  }
  a[href^="tel:"]:hover,
  a.text-phone:hover {
    color: #75d04f !important;
    text-decoration: none;
  }
}
iframe[name="google_conversion_frame"] {
  display: none;
}
input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
a {
  color: #ff1f20;
}
a:hover,
a:active,
a:focus {
  color: #ff1f20;
}
h1,
.small,
.smaller,
.big {
  color: #404040;
  font-size: 24px;
  line-height: 32px;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  margin: 0;
}
h1.normal,
.small.normal,
.smaller.normal,
.big.normal {
  font-weight: normal;
}
h1.bold,
.small.bold,
.smaller.bold,
.big.bold {
  font-weight: bold;
}
h1 {
  font-size: 28px !important;
}
h2 {
  font-size: 20px !important;
}
p,
li {
  font-size: 12px;
}
.subHeadline {
  font-size: 18px;
}
.fb-login {
  color: #878787;
  font-size: 16px;
  line-height: 20px;
}
.heading-image {
  margin-right: 15px;
}
.big {
  line-height: .75;
  font-size: 66px;
  font-weight: bold;
}
.littleHeader {
  font-size: 22px;
  font-weight: bold;
}
.littleHeader.normal {
  font-weight: normal;
}
.text-line {
  text-align: center;
  display: block;
  width: 100%;
  color: #969696;
  font-size: 20px;
  font-weight: normal;
}
a,
.btn {
  outline: none;
}
a:active,
.btn:active {
  outline: none;
}
a:hover,
.btn:hover {
  outline: none;
}
a:focus,
.btn:focus {
  outline: none;
}
a:focus:not(:hover),
.btn:focus:not(:hover) {
  outline-width: 1px;
  outline-offset: 1px;
  outline-style: dotted;
}
.section-splitter {
  text-align: center;
  width: 100%;
  height: 78px;
  position: relative;
  padding-top: 25px;
}
.section-splitter h3 {
  color: #fff;
  font-size: 28px;
  font-weight: lighter;
  margin: 0;
}
.section-splitter:after {
  content: '';
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 11px 11px 0 11px;
  border-color: #fe0000 transparent transparent transparent;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -11px;
  z-index: 50;
}
.section-splitter.red {
  background: #fe0000;
}
img {
  max-width: 100%;
  height: auto !important;
}
ul.text-list {
  padding: 20px 0;
}
ul.text-list li {
  font-size: 18px;
  display: block;
  float: left;
  width: 50%;
  padding-left: 20px;
  background: transparent url("../img/li-dot.png") no-repeat 7px 50%;
}
body > section {
  padding-top: 0px;
  padding-bottom: 50px;
}
@media (max-width: 480px) {
  body > section {
    padding-bottom: 25px;
  }
}
body {
  overflow-x: hidden;
  font-size: 18px;
  padding-left: 0;
  padding-right: 0;
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  background: #ffffff url(../img/arrow-select.png) 98% center no-repeat !important;
}
@media (max-width: 480px) {
  .section-splitter {
    padding-top: 26px;
  }
  .section-splitter h3 {
    font-size: 22px;
  }
}
.clearfix {
  clear: both;
}
@media (min-width: 1024px) {
  .biggerInForm {
    padding-top: 10px;
    font-size: 26px;
  }
}
.call-to-action-box {
  padding: 50px 0;
  background: #ff0000;
  color: #ffffff;
  text-align: center;
  position: relative;
  font-weight: bold;
  font-size: 30px;
}
@media (max-width: 767px) {
  .call-to-action-box {
    font-size: 26px;
    padding: 30px 0;
  }
}
.call-to-action-box:before {
  content: '';
  display: block;
  position: absolute;
  left: 50%;
  top: 100%;
  width: 0;
  height: 0;
  z-index: 41;
  border-style: solid;
  border-width: 15px 15px 0 15px;
  border-color: #ff0000 transparent transparent transparent;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
a.with-arrow {
  text-decoration: underline;
}
a.with-arrow:after {
  content: '\00A0\203A';
  color: #ff1f20;
}
.btn {
  color: #fff;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
  white-space: normal;
  text-transform: uppercase;
  font-size: 18px !important;
  line-height: 22px !important;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -moz-background-clip: padding;
  border-radius: 5px;
  width: 100%;
  height: 47px;
  max-width: 380px;
  font-weight: bold;
  border: none;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
  margin: 0 auto;
}
@media (max-width: 767px) {
  .btn {
    width: 90%;
  }
}
.btn.btn-success {
  background: #33d000;
  border-bottom: #439c3b 1px solid;
}
.btn.btn-success:hover {
  background: #2db700;
}
.btn.btn-success:active {
  background: #269d00;
}
.btn.btn-danger {
  background: #fe0000;
  border-bottom: #8d0f13 1px solid;
}
.btn.btn-danger:hover {
  background: #e50000;
}
.btn.btn-danger:active {
  background: #cb0000;
}
.btn.btn-dark {
  background: #404040;
  border-bottom: #252121 1px solid;
}
.btn.btn-dark:hover {
  background: #333333;
}
.btn.btn-dark:active {
  background: #272727;
}
.btn:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
.btn:hover,
.btn:focus {
  color: #ffffff;
}
.btn.btn_white {
  background: #ffffff;
  border-bottom: solid 1px #dddddd;
  color: #ff0000;
  background: url() no-repeat 30px center;
  height: auto;
  min-height: 62px;
  border-radius: 0px;
  line-height: 49px !important;
  font-size: 0.75em!important;
  padding-left: 53px;
  text-align: left;
  position: relative;
}
.btn.btn_white i:before {
  content: "";
  display: block;
  position: absolute;
  left: 20px;
  top: 20px;
  width: 20px;
  height: 20px;
  background: url("../img/otaznikFaq.png") center center transparent no-repeat;
  background-size: 100%;
}
.btn.btn_white i:after {
  content: "";
  display: block;
  position: absolute;
  right: 21px;
  top: 25px;
  width: 7px;
  height: 11px;
  background: url("../img/rightArrowBtnRed.png") center center transparent no-repeat;
  background-size: 100%;
}
.btn.btn_white.active,
.btn.btn_white:hover {
  background: #ff0000;
  color: #ffffff;
}
.btn.btn_white.active i:before,
.btn.btn_white:hover i:before {
  background: url("../img/otaznikFaqHover.png") center center transparent no-repeat;
  background-size: 100%;
}
.btn.btn_white.active i:after,
.btn.btn_white:hover i:after {
  background: url("../img/rightArrowBtnWhite.png") center center transparent no-repeat;
  background-size: 100%;
}
.faqWrapp {
  border: solid 1px #dddddd;
  border-radius: 5px;
  padding: 0px;
}
.faqWrapp .btn_white:last-child {
  border: none 0px;
}
.faqWrapp.forImage {
  border: 0px;
}
.arrow {
  display: inline-block;
  width: 6px;
  height: 11px;
}
.arrow.dark-gray-left {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAW0lEQVR4AWOAAF5W3n7eOhizlfc5bziIychbxfuLNwwingxkZkGYBbz3eXNhWi8AVfPCOJa8J3jX8HLBuOa8T3jn8zLDuE68r3i7edlg3ADe17w1MA4jbyxvNACEtxN8Nc4KHwAAAABJRU5ErkJggg==") no-repeat 50% 50%;
  margin-right: 13px;
}
.arrow.dark-gray-right {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAXUlEQVQIW2PgjeaN5WVkgADeGt7XvAEwDhtvN+8rXicYl5l3Pu8TXnMYl4t3De8JXksYl5f3Oe8FGCeX9z5vAYSZxfuLNxnCDAMyq8B28YYDVbfyskLE63j7oUwGAE8TE3xTY1cNAAAAAElFTkSuQmCC") no-repeat 50% 50%;
  margin-left: 13px;
}
.arrow.white-right {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAYElEQVQIW2P4H/0/9j8jAwT8r/n/+n8AjMP2v/v/q/9OMC7z//n/n/w3h3G5/q/5f+K/JYzL+//5/wswTu7/+/8LIMys/7/+J0OYYUBmFdiu/+FA1a3/WSHidf/7oUwGAGr7N2iqR4DxAAAAAElFTkSuQmCC") no-repeat 50% 50%;
  margin-left: 13px;
}
.arrow.light-gray-left {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAXklEQVR4AWOAgHOM52LPRcM4Aeden6uBMJ3OvTrXfY4NxDQ/9+Tc/HPMIKbluRPn1pzjgii5cO75OV6Y1oJz98/lAhlQbvK5X+eyEHZUAblhMC7ruVagznAEt/9cHQBDSjAieuVp/gAAAABJRU5ErkJggg==") no-repeat 50% 50%;
  margin-right: 13px;
}
.arrow.light-gray-right {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAYElEQVQIW2M4V3eu/xwrAwScCz/3/Fwrght27te5qnOMMG4WkJsM5QC5uefunyuAcXiBOi9AmFzn1pw7cc4SxGQ+N//ck3PmICbbue5zr845QZTUnHt9LgCmNfpcLMwOAK7QMCLq9UVzAAAAAElFTkSuQmCC") no-repeat 50% 50%;
  margin-left: 13px;
}
.big-arrow,
.long-arrow {
  display: block;
  width: 100%;
}
@media (max-width: 768px) {
  .big-arrow,
  .long-arrow {
    display: none;
  }
}
.big-arrow.left-to-right {
  background: transparent url("data:image/png;base64,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") no-repeat 50% 50%;
  background-size: auto 185px;
  height: 185px;
}
@media (max-width: 992px) {
  .big-arrow.left-to-right {
    background-size: auto 180px;
    height: 180px;
  }
}
.big-arrow.right-to-left {
  background: transparent url("data:image/png;base64,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") no-repeat 50% 50%;
  background-size: auto 185px;
  height: 185px;
}
@media (max-width: 992px) {
  .big-arrow.right-to-left {
    background-size: auto 180px;
    height: 180px;
  }
}
.big-arrow.right-to-left-small {
  width: 384px;
  background: transparent url("data:image/png;base64,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") no-repeat 50% 50%;
  background-size: auto 99px;
  height: 99px;
}
.big-arrow.arrow-to-cta {
  background: transparent url("data:image/png;base64,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") no-repeat 20px 50%;
  height: 105px;
}
.long-arrow.right-to-left {
  background: transparent url("data:image/png;base64,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") no-repeat 50% 50%;
  height: 81px;
}
.long-arrow.section-divider {
  margin: 20px 0;
}
.arrow-first-loan {
  width: 100px;
  height: 100px;
  position: absolute;
  top: 150px;
  left: 70%;
  margin-top: -50px;
  margin-left: -50px;
  font-size: 100px;
  text-align: center;
  color: #e5e5e5;
  cursor: pointer;
  -webkit-transition: color ease 0.2s;
  -moz-transition: color ease 0.2s;
  -o-transition: color ease 0.2s;
  transition: color ease 0.2s;
}
.arrow-first-loan:hover {
  color: #d5d5d5;
}
.arrow-first-loan.arrow-left {
  left: 30%;
}
.ajaxLeaveForm {
  position: relative;
  padding-bottom: 30px;
  text-align: left;
  background: url('../img/cta-bg.png');
}
.ajaxLeaveForm span.phones {
  font-weight: bold;
}
.ajaxLeaveForm .btn {
  width: 100% !important;
}
.ajaxLeaveForm input,
.ajaxLeaveForm select,
.ajaxLeaveForm textarea {
  font-size: 14px;
  line-height: 18px;
}
.ajaxLeaveForm input[type="submit"],
.ajaxLeaveForm select[type="submit"],
.ajaxLeaveForm textarea[type="submit"] {
  width: 100%;
  max-width: 100%;
}
.ajaxLeaveForm textarea {
  font-size: 13px !important;
}
.ajaxLeaveForm select {
  color: #000;
  width: 100%;
  -webkit-border-radius: 4px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 4px;
  -moz-background-clip: padding;
  border-radius: 4px;
  background-clip: padding-box;
  height: 42px;
  font-size: 14px;
  line-height: 18px;
}
.ajaxLeaveForm .wcl-disclaimer {
  font-size: 14px;
  line-height: 18px;
  font-size: 12px;
}
.ajaxLeaveForm .wcl-disclaimer a {
  color: inherit;
  text-decoration: none;
  position: relative;
}
.ajaxLeaveForm .wcl-disclaimer a:before {
  content: "";
  position: absolute;
  width: 100%;
  bottom: -1px;
  display: block;
  height: 1px;
  left: 0;
  background-color: white;
}
.ajaxLeaveForm .wcl-disclaimer a:hover {
  text-decoration: none;
}
.ajaxLeaveForm .wcl-disclaimer a:hover:before {
  display: none;
}
.ajaxLeaveForm .form-title h2 {
  font-size: 18px;
  line-height: 19px;
  font-weight: bold;
  text-align: center;
  padding: 0 15px;
  color: #fff;
}
.ajaxLeaveForm .added-services h3 {
  font-size: 18px;
  line-height: 22px;
  font-weight: bold;
}
.ajaxLeaveForm .added-services h3:first-of-type {
  margin-top: 0;
}
.ajaxLeaveForm .added-services p {
  font-size: 18px;
  line-height: 22px;
}
.ajaxLeaveForm .agreement {
  padding-right: 50px;
}
.ajaxLeaveForm .agreement .form-group {
  display: inline-block;
  margin-bottom: 0;
}
.ajaxLeaveForm .agreement input[type=checkbox] {
  display: none;
  font-size: 14px;
  line-height: 18px;
}
.ajaxLeaveForm .agreement input[type=checkbox] + label {
  display: inline-block;
  width: auto;
  cursor: pointer;
  padding-left: 40px;
  position: relative;
}
.ajaxLeaveForm .agreement input[type=checkbox] + label:before {
  content: '';
  background: #ffffff url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAQAAAD8mq+EAAAAXUlEQVR4Ae3UtwGAMAwF0SMzgTyAFrDs/XejU0nO8H792+NSHUokTy6idDjoiQQqplUEIj1OEeYTFBepmK/EcJll8n/9r//1idcNldjQpp6IzCyieBH9PL/DPRcaAOTeEe13QR3oAAAAAElFTkSuQmCC") center no-repeat;
  width: 25px;
  height: 25px;
  display: inline-block;
  position: absolute;
  top: -3px;
  left: 0;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
  font-size: 14px;
  line-height: 18px;
}
.ajaxLeaveForm .agreement input[type=checkbox]:checked + label:before {
  background: #ffffff url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAyklEQVR42uXWwQnCQBCF4cU9xKOntYA0MLINWMp2YgmWkIaElGIJ+pABD49FHuwgmoH/FuYj5JBJm50JzchQHZD5vqkH7v2hI8ppzGTfZ76fZkYlxUzx/TSGchC6QydEU1Ps1P9B6y0ZWtE1DmXwjh7eEoky+M4EdAi4am/K36ipIDoIaHdhU0EZ7SxsGqijy2sRdxFAAf0AC6CMMqyDOsqwDuoowzqoowwTGI06fHbwZ39t8ZfDl28kvgbL4Guw0DVIcMTd6+D25gnYSN6dI9uOeAAAAABJRU5ErkJggg==") center no-repeat;
}
.ajaxLeaveForm .agreement .ttip {
  display: inline-block;
  position: absolute;
  top: 0;
  right: 15px;
  margin: 0;
  vertical-align: top;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAA50lEQVR4AZ2UB3HDQBBFBUEQDCEMchACQQx8EAIhDHwMHAY+Bg4EM9AyeBnVP7ej6ifLatv+V6lKqLny4EFHt71Su5Ai+EaLp+W2mERQ8EJS8OENezRldRCJ0A3BhYghgmbXMC8+nK4/DTZqITFhKFwpL/X29X80JJ+FPvUgIlqargRPOp5zDxErMiV37pOeuYfISvD8chnDv4qEHdc14MhywrfEl+GwPFItfxx5PUHuuITIGWJXxw53MLorJBzOf5Em42wvQfX1eO+PFN58gdTFWMMIyx+BtJBkpO0vRyST6ei20Qf/Ay3wESw8xzE4AAAAAElFTkSuQmCC") no-repeat center;
  padding: 0;
}
.ajaxLeaveForm input[type="radio"] {
  margin-right: 25px;
  margin-bottom: 4px;
  display: none;
}
.ajaxLeaveForm input[type="radio"]:checked + label:before {
  background-color: #33d000;
  color: white;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 2px solid #ffffff;
}
.ajaxLeaveForm input[type="radio"] + label {
  font-weight: 700;
  margin-right: 70px;
  font-size: 14px;
}
.ajaxLeaveForm input[type="radio"] + label:before {
  content: " ";
  background-color: #ffffff;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 15px;
  margin-top: -2px;
  vertical-align: middle;
  -webkit-transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  -o-transition: all ease 0.3s;
  transition: all ease 0.3s;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
}
.ajaxLeaveForm input[type="radio"] + label:hover {
  cursor: pointer;
}
@media (max-width: 992px) {
  .ajaxLeaveForm input[type="radio"] + label {
    margin-right: 20px;
  }
}
@media (max-width: 767px) {
  .ajaxLeaveForm input[type="radio"] + label {
    margin-right: 0;
    margin-bottom: 25px;
    display: block;
  }
}
.ajaxLeaveForm .wcl-already-customer .wcl-question {
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
  display: block;
  font-size: 14px;
  line-height: 18px;
}
.ajaxLeaveForm .wcl-already-customer .wcl-radio-wrapper input[type=radio] + label {
  display: inline-block;
  margin-right: 40px;
}
.message {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
  color: #000000;
  padding-bottom: 30px;
}
.message .check {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAArCAYAAAAtxEsrAAAA80lEQVR42t3ZsQmDQBSAYWvrDGBtG3AAB3ACB3AEN8kQGSILuIHDJK8I/MKDEPDgkv/gLywe51edcs0/ruvWtNEQTdGlUSxwXbRHz0OLF0erGAdSjAMpxoH04mjx4qhz4mh24mgy4/ao9eFoMOPGbzceopkBA46v9ftx8P3cCnEZKcRlpBCXkUJcRgpxGfnrR8HEUDlkfRyb3xgsh6yP4wVWhs8j6+MysC+zOcj6uIwcCyP7CrgTyKqBEyLBCZHghEhwQiQ4IRKcEAlOiAQnRIITIsEJkeCESHBCJDghEpwQCU6IBCdAGnCfL2se/NnXv8J6ATwNfHWlpvrZAAAAAElFTkSuQmCC") no-repeat center;
  width: 56px;
  height: 43px;
  display: inline-block;
  margin: 0px auto 20px auto;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
@media (max-width: 767px) {
  .message .check {
    width: 30px;
    height: 23px;
  }
}
.message .success-text {
  padding-bottom: 20px;
  font-size: 14px;
}
.message .after-send-title {
  margin-bottom: 20px;
  display: inline-block;
  color: #33cc00;
  font-size: 28px;
  line-height: 49px;
}
@media (max-width: 767px) {
  .message .after-send-title {
    line-height: 35px;
  }
}
.message .phones {
  margin-top: 20px;
  margin-bottom: 20px;
  display: inline-block;
}
@media (min-width: 1200px) {
  .message {
    width: 1170px;
  }
}
@media (min-width: 992px) {
  .message {
    width: 970px;
  }
}
@media (min-width: 768px) {
  .message {
    width: 750px;
  }
}
#public-errorMessage {
  color: #ffe958;
  position: static;
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
  text-align: left;
  font-weight: bold;
  padding: 0 15px;
}
#public-successMessage {
  position: static;
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
  padding: 0 15px;
  margin: 0 auto;
}
.error-message {
  color: #ffe958;
  font-weight: bold;
}
.main-form {
  background: #ff0000;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
  padding: 15px 0;
  color: #fff;
  margin: 0;
  position: relative;
}
.main-form:before {
  content: '';
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 15px 20px 15px;
  border-color: transparent transparent #ff0000 transparent;
  top: -7px;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.main-form.sent {
  background: none;
}
.main-form.sent:before {
  display: none;
}
@media (min-width: 992px) {
  .form form {
    padding: 0 30px;
  }
}
@media (min-width: 768px) {
  .form form {
    padding: 0 10px;
  }
}
.form.form-small {
  /*label {
			font-size: 80%;
			font-weight: normal;
			text-align: left;
			width: 100%;
		}*/
}
.form.form-small [class^="col-"] {
  width: 100%;
  float: none;
}
.form.form-small [class*="-offset-"] {
  margin-left: 0;
}
.form .textarea-big {
  height: 210px;
}
.form .row {
  padding: 20px 0 0 0;
  font-size: 16px;
  text-align: left;
}
.form .section {
  color: #737373;
  font-weight: bold;
  font-size: 18px;
  display: inline-block;
  padding: 0 0 23px 0;
}
.form .radio-inline {
  width: 220px;
  margin-left: 0;
  font-size: 16px;
  padding-left: 30px;
}
.form .radio-inline input {
  top: -2px;
  margin-left: -30px;
}
.form .form-control-feedback {
  top: 31px;
  right: 20px;
  font-size: 16px;
  color: #d1d1d1;
}
.form .input-group-btn .btn {
  background-color: #3a3a3a;
  border: 1px solid #aaaaaa;
  height: 42px;
  color: #ffffff;
  font-size: 15px;
  padding-left: 40px;
  padding-right: 40px;
}
.form #public-errorMessage {
  color: #a94442;
}
.form .error-message {
  color: #a94442;
  padding-top: 5px;
}
.form .error-message .glyphicon {
  color: #a94442;
  top: 2px;
  margin-right: 4px;
}
.form .status-icon {
  display: inline-block;
  width: 37px;
  height: 37px;
  top: 10px;
  position: relative;
  margin-right: 10px;
}
.form .status-icon.error {
  background: transparent url("../img/error.png") no-repeat 50% 50%;
}
.form .status-icon.success {
  background: transparent url("../img/success.png") no-repeat 50% 50%;
}
.form-group label {
  display: block;
  font-size: 14px;
  line-height: 18px;
}
[type=text],
[type=tel],
[type=email],
[type=number],
[type=date] {
  height: 42px;
  border: 1px solid #aaaaaa;
  font-size: 16px;
}
textarea.form-control {
  border: 1px solid #aaaaaa;
  font-size: 16px;
  max-width: 100%;
  min-width: 100%;
  width: 100%;
  resize: vertical;
}
.fb-login-alternative {
  background: url('../img/facebook/FB-f-Logo__blue_29.png') no-repeat scroll left 50% transparent;
  background-color: #3B55A0;
  color: #FFFFFF !important;
  -webkit-border-radius: 2px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 2px;
  -moz-background-clip: padding;
  border-radius: 2px;
  background-clip: padding-box;
  font-size: 12px;
  font-weight: bold;
  display: inline-block;
  line-height: 29px;
  vertical-align: middle;
  height: 29px;
  padding: 2px 5px 2px 35px;
  text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.5);
  -webkit-transition: all ease 0.2s;
  -moz-transition: all ease 0.2s;
  -o-transition: all ease 0.2s;
  transition: all ease 0.2s;
  margin-left: 10px;
  margin-top: -3px;
}
.fb-login-alternative:hover {
  color: white;
  text-decoration: none;
  cursor: pointer;
  zoom: 1;
  filter: alpha(opacity=80);
  -webkit-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
}
.fb-login-alternative:focus {
  zoom: 1;
  filter: alpha(opacity=80);
  -webkit-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
}
.fb-login-alternative img {
  margin-right: 2px;
  margin-bottom: 1px;
}
.cta-wrapper {
  background: url("../img/cta-bg.png");
  padding-top: 40px;
}
.call-to-action-box {
  position: relative;
}
@media (max-width: 991px) {
  .call-to-action-box {
    text-align: left;
    padding-left: 20px;
    font-size: 22px;
  }
}
.call-to-action-box .search-button-head {
  height: 100%;
  width: 142px;
  position: absolute;
  right: 0;
  top: 0;
  color: white;
  font-size: 40px;
  text-align: center;
  line-height: 142px;
  background-color: #cc0000;
  cursor: pointer;
}
.call-to-action-box .search-button-head.init {
  display: none;
}
@media (max-width: 991px) {
  .call-to-action-box .search-button-head {
    width: 98px;
    line-height: 131px;
    font-size: 34px;
  }
}
@media (max-width: 767px) {
  .call-to-action-box .search-button-head {
    line-height: 91px;
  }
}
.box {
  width: 100% !important;
  margin-left: auto;
  margin-right: auto;
  -webkit-border-radius: 8px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 8px;
  -moz-background-clip: padding;
  border-radius: 8px;
  background-clip: padding-box;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
  padding: 0 15px !important;
  text-align: center;
  font-size: 20px;
}
.box.box-light-grey {
  background: #f5f5f5;
}
.box.box-white {
  background: #fff;
  -webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
  box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
}
.box.centered-box {
  max-width: 400px;
  background: transparent;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.box.pos-loan-box .box-part {
  display: none;
}
.box.pos-loan-box .box-part:first-child {
  display: block;
}
.box small {
  font-size: 16px;
}
.box h1 {
  position: relative;
  text-transform: none;
  margin-bottom: 10px;
}
@media (min-width: 1200px) {
  .box h1 {
    font-size: 32px !important;
  }
}
.box h1:after {
  content: '';
  position: absolute;
  width: 40px;
  height: 60px;
  background: url("../img/cta-flash.png") no-repeat;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  background-size: contain;
  top: 10px;
  left: 25px;
  display: block;
}
@media (max-width: 400px) {
  .box h1:after {
    left: 10px;
  }
}
@media (max-width: 351px) {
  .box h1:after {
    left: -17px;
  }
}
.box h2 {
  font-size: 20px;
  line-height: 26px;
  margin-top: 19px;
  margin-bottom: 8px;
  position: relative;
}
.box h2:after {
  content: '';
  position: absolute;
  width: 40px;
  height: 60px;
  background: url("../img/cta-flash.png") no-repeat;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  background-size: contain;
  top: 10px;
  left: 40px;
  display: block;
}
@media (max-width: 400px) {
  .box h2:after {
    left: 10px;
  }
}
.box .call-us-text {
  font-size: 18px;
}
.box .phone-text {
  font-size: 24px;
  line-height: 26px;
  color: #231f20;
  margin: 8px 0 12px;
}
.box .or {
  font-size: 12px;
  line-height: 15px;
  color: #87878d;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.box .we-contact-you {
  margin-top: 10px;
  font-size: 12px;
  line-height: 15px;
  color: #58595b;
  margin-bottom: 20px;
}
@media (min-width: 768px) {
  .box .we-contact-you {
    font-size: 18px;
    line-height: 22px;
    margin-top: 20px;
  }
}
.box-columns .box {
  position: relative;
  padding: 100px 15px !important;
  background-image: url('../img/text-line-vertical.png');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: 50% 50%;
  display: table;
}
.box-columns .box:after,
.box-columns .box:before {
  content: " ";
  display: table;
  width: 1px;
}
.box-columns .box .box-part {
  width: 50%;
  width: -webkit-calc(50% - 15px);
  width: -moz-calc(50% - 15px);
  width: -ms-calc(50% - 15px);
  width: calc(50% - 15px);
  display: table-cell;
  vertical-align: middle;
}
.box-columns .box .box-part-middle {
  width: 30px;
}
.box-columns .box .box-part-middle span {
  width: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.sliders {
  margin: 0;
  position: relative;
}
.sliders .link-to-first-loan {
  width: auto;
  display: inline-block;
  position: relative;
  margin: 30px 20px 0 20px;
}
.sliders .ajaxLeaveForm {
  margin-left: -15px;
  margin-right: -15px;
}
.sliders .cta-wrapper {
  background: none;
}
.sliders .cta-wrapper .box {
  padding: 20px 10px !important;
  border: 1px solid #f6f6f6;
  background: url("../img/cta-bg.png") no-repeat scroll 50% 50% transparent;
  -webkit-box-shadow: 0 1px 2px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 2px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 2px 0px rgba(0, 0, 0, 0.2);
}
@media (max-width: 991px) {
  .sliders .cta-wrapper .box {
    margin-bottom: 30px;
  }
}
.sliders .box {
  width: auto!important;
}
.sliders .xs-text-center {
  margin-bottom: 10px;
}
@media (max-width: 767px) {
  .sliders .xs-text-center {
    text-align: center;
  }
  .sliders .xs-text-center .text-left,
  .sliders .xs-text-center .text-right {
    text-align: center;
  }
}
.sliders .box {
  padding: 0 !important;
}
.sliders .box .btn {
  margin-bottom: 30px;
}
.sliders .form .calculator-switch-wrapper {
  text-align: center;
  margin-top: 65px;
}
@media (max-width: 767px) {
  .sliders .form .calculator-switch-wrapper {
    margin-top: 30px;
    font-size: 16px;
  }
}
.sliders .form .calculator-switch-wrapper .calculator-switch-button {
  display: inline-block;
  vertical-align: middle;
  margin-left: 15px;
}
.sliders .form .calculator-switch-wrapper .calculator-switch-text {
  display: inline-block;
  vertical-align: middle;
}
.sliders .form .calculator-switch-wrapper .calculator-switch {
  display: none;
}
.sliders .form .calculator-switch-wrapper .calculator-switch + label {
  color: #ffffff;
  vertical-align: middle;
  background: #494949;
  float: left;
  margin-left: 0;
  width: 60px;
  height: 40px;
  line-height: 40px;
  font-weight: normal;
  margin: 0;
  position: relative;
  -webkit-box-shadow: 1px 0px 9px 1px rgba(0, 0, 0, 0.2) inset;
  -moz-box-shadow: 1px 0px 9px 1px rgba(0, 0, 0, 0.2) inset;
  box-shadow: 1px 0px 9px 1px rgba(0, 0, 0, 0.2) inset;
  -webkit-transition: all ease-in-out 0.15s;
  -moz-transition: all ease-in-out 0.15s;
  -o-transition: all ease-in-out 0.15s;
  transition: all ease-in-out 0.15s;
  -webkit-border-radius: 0 5px 5px 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0 5px 5px 0;
  -moz-background-clip: padding;
  border-radius: 0 5px 5px 0;
  background-clip: padding-box;
}
@media (max-width: 767px) {
  .sliders .form .calculator-switch-wrapper .calculator-switch + label {
    width: 50px;
    height: 30px;
    line-height: 30px;
  }
}
.sliders .form .calculator-switch-wrapper .calculator-switch + label[for="calculator-switch-posl"] {
  -webkit-border-radius: 5px 0 0 5px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 5px 0 0 5px;
  -moz-background-clip: padding;
  border-radius: 5px 0 0 5px;
  background-clip: padding-box;
}
.sliders .form .calculator-switch-wrapper .calculator-switch + label:before {
  /*content: "";*/
  width: 20px;
  height: 20px;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  margin-right: 10px;
  display: inline-block;
  vertical-align: middle;
  border: 1px solid #ff0000;
  background: white;
  -webkit-transition: all ease 0.2s;
  -moz-transition: all ease 0.2s;
  -o-transition: all ease 0.2s;
  transition: all ease 0.2s;
  position: absolute;
  z-index: -1;
}
.sliders .form .calculator-switch-wrapper .calculator-switch + label:hover {
  cursor: pointer;
}
.sliders .form .calculator-switch-wrapper .calculator-switch:checked + label {
  background-color: #33d000;
  -webkit-box-shadow: 1px 0px 1px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 1px 0px 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 0px 1px 2px rgba(0, 0, 0, 0.1);
}
.sliders .form .calculator-switch-wrapper .calculator-switch label:first-of-type {
  margin-left: 0;
}
.sliders .form .section.calculator-section {
  display: block;
  text-align: center;
  margin: 30px 0 0 0;
  color: #6c6c6c;
  font-weight: bold;
  font-size: 18px;
  line-height: 15px;
}
.sliders .form .mt-4 {
  margin-top: -4px !important;
}
.sliders h2 {
  margin: 30px 0 0 0;
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
}
.sliders .doodle {
  position: absolute;
}
.sliders .doodle.d1 {
  width: 60px;
  top: 58px;
  left: 0;
}
@media (max-width: 767px) {
  .sliders .doodle.d1 {
    left: -15px;
    top: 104px;
  }
}
.sliders .doodle.d1-wcl {
  width: 60px;
  left: 0;
  top: 40px;
}
@media (max-width: 767px) {
  .sliders .doodle.d1-wcl {
    left: -9px;
    top: 41px;
  }
}
.sliders .doodle.d2 {
  width: 85px;
  max-width: inherit;
  bottom: -3px;
  left: 25px;
}
.slider-wrapper {
  height: 70px;
  position: relative;
}
.slider-wrapper .ui-slider-range {
  background: #33D000;
  -webkit-transition: all linear 0.1s;
  -moz-transition: all linear 0.1s;
  -o-transition: all linear 0.1s;
  transition: all linear 0.1s;
}
.slider-wrapper .ui-slider {
  border: none;
  background: #f6f6f6;
}
.slider-wrapper .ui-slider-horizontal {
  height: 10px;
}
.slider-wrapper .ui-slider-handle {
  -webkit-transition: all linear 0.1s;
  -moz-transition: all linear 0.1s;
  -o-transition: all linear 0.1s;
  transition: all linear 0.1s;
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABZCAMAAACJ4sOeAAABd1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAdHR2enp7S0tLm5uby8vL7+/v9/f3S0tIiIiK2trbq6ur9/f1JSUnV1dX7+/v9/f2goKD39/cQEBD///8uLi7r6+tUVFTy8vI2NjYUFBTv7+/b29uwsLA+Pj76+vrd3d1qamr+/v7h4eFGRkb+/v7IyMjy8vLy8vK1tbXb29vr6+v29vb8/Pz+/v5RUVG2trb////f+Nem65B94V1e2jZF1Bc80gs00AGx7Z5p3UQz0AC17qNh2zn0/PF74VpN1iCl6o6v7Zva99Fk2z1X2C2k6o1h2zrR9MWh6Ylx3k5T1yhB0xE20QQ6q302AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQffBhIQMQ3+JraRAAAB5ElEQVRYw+2YaYvCMBCG/U2eoKiIiKCgKLrLekA9q/G+zx+/S1LtmTTTOuyXvF+kyZuHMCYzSSIRJSUlJSWl/1Y0Fk8kNS2ZiMdSn+SmM5pNmfRnuNmc5qFcNnwg8hpH+Wg4ckETqBAmFkVNqGLgqJRMyGA4Gk+muj6djEfDgdleCkYuvwGzObFpPnt3lUORF0vi0nIRgl0xhq7WxFPrlWGoQMnV15Q3hKPNa+JVINoYtiUCbQ0TjFyTIL/ZNQi5zsbsiI92zFcHoBt0xJ74ak+NDXlyk03mYGEU/2T9NXRgzqY0uuUKtEl0sFm4W7LkNpvK0YvsZB+Zty2J/qLukzfZ+XWi5m9JNMt3Zw7L8X1mORCyXS5csqPlAtg2P9R75ZPtbVfAbu9Q701AtrXeqL0jhe5S711Etrbfqb0rhe5R70NItvQ8qL0nhe5T71NMNvue1N4H5FNdFq0DMqtl1jIBgczaGmuJvxESa9sK8V98kBViX9e+Wwayrh270W+jQ3ajM4eI0xMoh7gynzCpwjKfK18LSgEwX7urDL+AAauMR23klV1obfSq6ByBKzriOQTz9IR45sM8qWKerxFvBZh3GcwbGOa9EfO2i3lHR31ZwHwPQX3FYUohvT0pKSkpKSkF0i/pXmapXl0LKAAAAABJRU5ErkJggg==") no-repeat 50% 0;
  background-size: 45px 45px;
  min-width: 90px;
  width: auto;
  height: 75px;
  border: 0;
  margin-top: 1px;
  text-align: center;
  padding-top: 75px;
  cursor: pointer;
  font-size: 22px;
  font-weight: bold;
  color: #75d04f;
}
@media (-Webkit-min-device-pixel-ratio: 1.5), (-moz-min-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5) {
  .slider-wrapper .ui-slider-handle {
    background-image: url("../img/slider-icon-2x.png");
    background-size: 53px 53px;
    top: -23px;
  }
}
.slider-wrapper .ui-slider-handle:focus {
  outline: none;
}
.slider-wrapper .ui-slider-handle:hover,
.slider-wrapper .ui-slider-handle:focus,
.slider-wrapper .ui-slider-handle:active {
  -webkit-transform: scale(1.05);
  -moz-transform: scale(1.05);
  -o-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
}
.slider-wrapper .ui-slider-handle .value {
  background: transparent;
  color: #4d4d4d;
  margin-top: -34px;
  padding: 0 15px;
  position: relative;
  height: 30px;
  line-height: 20px;
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.75);
}
@media (max-width: 800px) {
  .slider-wrapper .ui-slider-handle .value {
    display: none;
  }
}
.slider-wrapper .ui-slider-handle.desktop {
  top: -19px !important;
}
.slider-wrapper .increased-transition {
  -webkit-transition: all linear 0.5s;
  -moz-transition: all linear 0.5s;
  -o-transition: all linear 0.5s;
  transition: all linear 0.5s;
}
.slider-wrapper .min,
.slider-wrapper .max {
  position: absolute;
  top: 25px;
  color: #292929;
  font-size: 18px;
  line-height: 15px;
}
.slider-wrapper .min {
  left: 0px;
}
.slider-wrapper .max {
  right: 0px;
}
.slider-wrapper .actualValue {
  position: absolute;
  top: 25px;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  text-align: center;
  font-size: 18px;
  line-height: 18px;
  font-weight: bold;
  color: #2f2f2f;
}
@media (min-width: 801px) {
  .slider-wrapper .actualValue {
    display: none;
  }
}
.docs-wrapper {
  margin-bottom: 25px;
}
.docs-wrapper strong {
  color: #7c7d7c;
}
.documents-select {
  margin-top: 25px;
  text-align: left;
}
.documents-select .form-group {
  margin-bottom: 0;
}
.documents-select .form-group .cleaner ~ label {
  margin-bottom: 0;
}
.documents-select input[type="radio"] {
  margin-right: 25px;
  margin-bottom: 4px;
  display: none;
}
.documents-select input[type="radio"]:checked + label:before {
  background-color: #fe0000;
  color: white;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 1px solid #fe0000;
  -webkit-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
}
.documents-select input[type="radio"] + label {
  font-weight: normal;
  margin-right: 0;
  font-size: 16px;
  margin-bottom: 15px;
  display: block;
  position: relative;
  margin-left: 35px;
}
.documents-select input[type="radio"] + label .glyphicon {
  color: #C5C5C5;
  font-size: 15px;
  position: relative;
  top: -5px;
}
@media (max-width: 992px) {
  .documents-select input[type="radio"] + label .glyphicon {
    display: none;
  }
}
.documents-select input[type="radio"] + label:hover .tooltip {
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}
.documents-select input[type="radio"] + label .tooltip {
  background: white;
  padding: 1em;
  font-size: 14px;
  -webkit-transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  -o-transition: all ease 0.3s;
  transition: all ease 0.3s;
  -webkit-box-shadow: 1px 2px 11px -1px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 1px 2px 11px -1px rgba(0, 0, 0, 0.3);
  box-shadow: 1px 2px 11px -1px rgba(0, 0, 0, 0.3);
}
@media (max-width: 992px) {
  .documents-select input[type="radio"] + label .tooltip {
    zoom: 1;
    filter: alpha(opacity=100);
    -webkit-opacity: 1;
    -moz-opacity: 1;
    opacity: 1;
    position: relative;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    font-size: 14px;
    padding: 1em 0 1em 0;
    font-style: italic;
    color: #7c7d7c;
  }
  .documents-select input[type="radio"] + label .tooltip:before {
    content: "\e086";
    font-size: 12px;
    color: #C5C5C5;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    left: -31px;
    top: 15px;
  }
}
.documents-select input[type="radio"] + label:before {
  content: " ";
  background-color: transparent;
  display: inline-block;
  width: 20px;
  height: 20px;
  position: absolute;
  left: -35px;
  top: 0;
  margin-top: -2px;
  vertical-align: middle;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  border: 1px solid #878787;
  -webkit-transition: all ease 0.2s;
  -moz-transition: all ease 0.2s;
  -o-transition: all ease 0.2s;
  transition: all ease 0.2s;
  -webkit-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.2);
}
.documents-select input[type="radio"] + label:hover {
  cursor: pointer;
}
@media (max-width: 992px) {
  .documents-select input[type="radio"] + label {
    margin-right: 20px;
  }
}
@media (max-width: 768px) {
  .documents-select input[type="radio"] + label {
    margin-right: 0;
    margin-bottom: 25px;
    display: block;
  }
}
@media (max-width: 767px) {
  .documents-select input[type="radio"] + label {
    white-space: normal;
  }
}
.documents-select select {
  border: 1px solid #494949;
  background: white;
  padding: 4px 8px;
}
.documents-select .select-replacement {
  border: 1px solid #f2f2f2;
  display: inline-block;
  text-align: left;
  cursor: pointer;
  position: relative;
  margin-top: 10px;
  width: 100%;
}
.documents-select .select-replacement .title,
.documents-select .select-replacement .replacement-option {
  padding: 0px 8px;
  line-height: 40px;
  height: 40px;
}
.documents-select .select-replacement .title {
  background-image: url("../img/arrows/dark-gray-down.png");
  background-repeat: no-repeat;
  background-position: 97% 17px;
}
.documents-select .select-replacement .options {
  position: absolute;
  width: 100%;
  background: white;
  border-left: 1px solid #f2f2f2;
  border-bottom: 1px solid #f2f2f2;
  border-right: 1px solid #f2f2f2;
  z-index: 100;
}
.documents-select .select-replacement .options .replacement-option:hover {
  background-color: #f2f2f2;
}
@media (max-width: 768px) {
  .documents-select .select-replacement {
    width: 100%;
  }
}
.result {
  font-size: 20px;
  line-height: 40px;
  font-weight: bold;
  text-align: center;
  margin-top: -10px;
  margin-bottom: 13px;
  color: #515151;
}
.result span,
.result strong,
.result i {
  color: #ff0000;
  font-size: 29px;
  line-height: 33px;
  display: inline-block;
  position: relative;
}
.note {
  max-width: 100%;
  margin: 0 auto;
  padding-bottom: 10px;
  margin-bottom: 15px;
}
.note p {
  text-align: left;
  margin-bottom: 10px;
  font-size: 12px;
  line-height: 15px;
  font-weight: 600;
  color: #aaa;
}
@media (max-width: 767px) {
  .note p {
    margin-bottom: 0;
  }
}
.radio-red input {
  display: none;
}
.radio-red input + .radio-input {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  top: 3px;
  border-radius: 10px;
  background-color: transparent;
  border: 1px solid #8e8e8e;
}
.radio-red input:checked + .radio-input {
  background-color: #fe0000;
  border: 1px solid #fe0000;
}
body {
  padding-top: 146px;
}
@media (max-width: 991px) {
  body {
    padding-top: 98px;
  }
}
@media (min-width: 768px) {
  body {
    -webkit-transition: padding-top 0.2s;
    -moz-transition: padding-top 0.2s;
    -o-transition: padding-top 0.2s;
    transition: padding-top 0.2s;
  }
  body.scrollDown {
    padding-top: 72px;
  }
  body.scrollDown header.navbar .nav-main {
    min-height: 53px;
    background: #fff;
  }
  body.scrollDown header.navbar .nav-main .page-logo {
    margin-top: 1px;
  }
  body.scrollDown header.navbar .nav-main .page-logo img {
    width: 85px;
  }
  body.scrollDown header.navbar .nav-main .nav-main-items {
    height: 51px;
  }
  body.scrollDown header.navbar .nav-main .nav-main-items li {
    height: 53px;
  }
  body.scrollDown header.navbar .nav-main .nav-main-items li > a {
    height: 53px;
    font-size: 15px;
  }
  body.scrollDown header.navbar .nav-main .nav-main-items li > a .product-menu-content {
    line-height: 130%;
  }
}
.navbar {
  margin-bottom: 0;
  border: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1100;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
}
.navbar .background-holder {
  position: relative;
  width: 100%;
  height: 50px;
  background: #fff;
  z-index: 51;
  -webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
}
.navbar .loans-wrapper {
  text-align: center;
  height: 70px;
  background-color: #ff0000;
  width: 100%;
  clear: both;
  z-index: 50!important;
}
@media (max-width: 991px) {
  .navbar .loans-wrapper {
    max-width: none;
    top: 50px;
    position: absolute;
    width: 100%;
    z-index: 52;
    border-bottom: #6f0b0c 1px solid;
    height: 50px;
  }
}
.navbar .loans-wrapper .nav-tag {
  position: absolute;
  right: 0;
  left: 0;
  margin: 0 auto;
  top: -3px;
  width: 82px;
  height: 82px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
}
@media (max-width: 991px) {
  .navbar .loans-wrapper .nav-tag {
    width: 58px;
    height: 58px;
    top: 0;
  }
}
.navbar .loans-wrapper .nav-tag:hover:after {
  zoom: 1;
  filter: alpha(opacity=0);
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -webkit-animation-play-state: paused;
  -moz-animation-play-state: paused;
  -ms-animation-play-state: paused;
  -o-animation-play-state: paused;
  animation-play-state: paused;
}
.navbar .loans-wrapper .nav-tag:after {
  content: "";
  width: 100%;
  height: 100%;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  border: 12px solid #fff;
  /*border: 6px solid #D6D6D6;*/
  position: absolute;
  left: 0;
  top: -3px;
  display: inline-block;
  zoom: 1;
  filter: alpha(opacity=0);
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -webkit-transition: all ease-out 0.1s;
  -moz-transition: all ease-out 0.1s;
  -o-transition: all ease-out 0.1s;
  transition: all ease-out 0.1s;
  -webkit-animation: badge-pulse 2.5s ease-out infinite;
  -moz-animation: badge-pulse 2.5s ease-out infinite;
  -o-animation: badge-pulse 2.5s ease-out infinite;
  animation: badge-pulse 2.5s ease-out infinite;
}
.navbar .loans-wrapper .link-wrapper {
  display: inline-block;
}
@media (max-width: 991px) {
  .navbar .loans-wrapper .link-wrapper {
    width: 100%;
  }
}
@media (min-width: 480px) {
  .navbar .loans-wrapper .link-wrapper .nb-prod-loan,
  .navbar .loans-wrapper .link-wrapper .nb-cash-loan {
    background: url('../img/cashloan_white.png') left center no-repeat;
    padding: 10px;
    padding-left: 50px;
  }
}
@media (min-width: 480px) {
  .navbar .loans-wrapper .link-wrapper .nb-cash-loan {
    padding-left: 35px;
  }
}
@media (min-width: 480px) {
  .navbar .loans-wrapper .link-wrapper .nb-prod-loan {
    background: url('../img/electronics_white.png') left center no-repeat;
  }
}
.navbar .loans-wrapper .link-wrapper .btn-loan {
  background: #ff0000;
  color: #ffffff;
  display: inline-block;
  vertical-align: middle;
  text-transform: uppercase;
  height: 70px;
  font-size: 18px;
  font-weight: 700;
  line-height: 22px;
  text-align: center;
  width: 480px;
  float: left;
  padding: 0 15px;
  -webkit-transition: background 0.3s;
  -moz-transition: background 0.3s;
  -o-transition: background 0.3s;
  transition: background 0.3s;
}
.navbar .loans-wrapper .link-wrapper .btn-loan span {
  display: inline-block;
  vertical-align: middle;
}
.navbar .loans-wrapper .link-wrapper .btn-loan:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
.navbar .loans-wrapper .link-wrapper .btn-loan:first-child {
  border-right: 1px #b70606 solid;
}
@media (max-width: 991px) {
  .navbar .loans-wrapper .link-wrapper .btn-loan:first-child {
    padding-right: 41px;
  }
}
@media (max-width: 991px) {
  .navbar .loans-wrapper .link-wrapper .btn-loan:last-child {
    padding-left: 41px;
  }
}
.navbar .loans-wrapper .link-wrapper .btn-loan:hover {
  background: #e60000;
}
.navbar .loans-wrapper .link-wrapper .btn-loan:active {
  background: #cc0000;
}
@media (max-width: 991px) {
  .navbar .loans-wrapper .link-wrapper .btn-loan {
    width: 50%;
    min-width: 150px;
    font-size: 12px;
    height: 48px;
  }
}
.navbar .nav-top {
  background: #ffffff;
  height: 75px;
  -webkit-transition: height 0.2s;
  -moz-transition: height 0.2s;
  -o-transition: height 0.2s;
  transition: height 0.2s;
  line-height: 36px;
}
.navbar .nav-top > .container .row {
  padding: 0 15px;
}
.navbar .nav-top .active {
  font-weight: bold;
}
.navbar .nav-top ul {
  display: block;
  padding: 0;
  margin: 0;
  height: 36px;
  line-height: 36px;
}
.navbar .nav-top ul.links {
  list-style-type: none;
  list-style-image: none;
}
@media (min-width: 992px) {
  .navbar .nav-top ul.links {
    margin-left: 60px;
    margin-top: 20px;
  }
}
@media (min-width: 1200px) {
  .navbar .nav-top ul.links {
    margin-left: 175px;
    margin-top: 20px;
  }
}
@media (max-width: 1199px) {
  .navbar .nav-top ul.links li {
    padding: 0 10px;
  }
}
@media (max-width: 1200px) {
  .navbar .nav-top ul.links li.self-care {
    display: none;
  }
}
.navbar .nav-top ul.links a {
  color: #000;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
  white-space: nowrap;
}
.navbar .nav-top ul.links a:hover {
  text-decoration: none;
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.navbar .nav-top ul.links a:focus,
.navbar .nav-top ul.links a:active {
  text-decoration: none;
}
.navbar .nav-top ul.langs {
  margin-right: -15px;
  padding-right: 8px;
}
@media (min-width: 992px) {
  .navbar .nav-top ul.langs {
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    font-size: 13px;
  }
  .navbar .nav-top ul.langs li {
    font-size: 12px !important;
  }
}
@media (min-width: 1200px) {
  .navbar .nav-top ul.langs {
    top: 23px;
    right: 20px;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -o-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
    left: auto;
  }
}
.navbar .nav-top ul.langs li {
  display: block;
  float: left;
  text-transform: uppercase;
  padding: 0 3px;
}
.navbar .nav-top ul.langs li.choose {
  color: #777;
  font-size: 14px;
}
@media (max-width: 991px) {
  .navbar .nav-top ul.langs li.choose {
    display: none;
  }
}
.navbar .nav-top ul.langs li a {
  color: #000;
  text-transform: uppercase;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.navbar .nav-top ul.langs li a:focus,
.navbar .nav-top ul.langs li a:active,
.navbar .nav-top ul.langs li a.active {
  zoom: 1;
  filter: alpha(opacity=75);
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  text-decoration: none;
}
.navbar .nav-top ul.langs li a:hover {
  text-decoration: none;
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}
.navbar .nav-top ul li {
  display: inline;
  padding: 0 12px;
  margin: 0;
  color: #000;
  font-size: 15px;
}
@media (max-width: 991px) {
  .navbar .nav-top ul li {
    padding: 0 8px;
  }
}
.navbar .nav-top ul a {
  color: #000;
}
.navbar .nav-main {
  background: #ff0000;
  border-bottom: #6f0b0c 1px solid;
  height: auto;
  -webkit-transition: min-height 0.2s;
  -moz-transition: min-height 0.2s;
  -o-transition: min-height 0.2s;
  transition: min-height 0.2s;
  z-index: 100;
  position: relative;
  -webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.3);
}
@media (max-width: 991px) {
  .navbar .nav-main {
    height: 50px;
  }
}
.navbar .nav-main .navbar-toggle {
  display: none;
}
.navbar .nav-main #call-us {
  font-size: 14px;
  position: absolute;
  width: 175px;
  top: 13px;
  right: 60px;
  text-align: left;
  color: #757575;
  font-weight: 600;
  z-index: 60;
}
.navbar .nav-main #call-us i {
  display: inline-block;
  width: 17px;
  height: 17px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAABdUlEQVR4Ac3WA48dURTA8ZnablC7MepGte0GtYN2bdu2bZ5P9D7K/ne31twznTvpTX7Rw/yfznnODyfiXMUgxhGFdU7oJ+Ich/ykEzvDjFiGHshv9GFbWCF3IX/RglVhhDRBPKTBtRmxD2LoivWPxdAwNtoKSYUoJNsKqYMoHbURMgJRKrcRIj6t/V9CtgYdMgFRaoEbdEiLj4idNr4j6RAP/YjGSSy09fN9ZBCSE8ae2QsxcDqMmGaDkBFssx1yQ/FFXWv7j1G36VTFUpsxZyGGcrHI4/kO4wMeY7M2JloRk48Vf3iemz/ddwx34JqGLEWVIqYe2396jp2YgvxGIpaaxqxHuyJmDPewBC4KPe5fiBWmMdvRB1EYQBnEQJkmZqc+RqUMyzQxXRZj8jXfmU2osRyzSDPwYi3GPPUz9IYthAz4mcAbEB9wyMS/rISDyAooJD6IHbUNr9DuM6IQq4NenLtwCe+RhZrfzKJR1OETjn7ZPzMkqDDYBLDJpQAAAABJRU5ErkJggg==") no-repeat;
  background-size: contain;
  position: relative;
  top: 3px;
  left: 14px;
}
@media (min-width: 992px) {
  .navbar .nav-main #call-us {
    display: none;
  }
}
.navbar .nav-main .page-logo {
  position: absolute;
  display: block;
  margin-left: 15px;
  margin-top: -70px;
  -webkit-transition: margin-top 0.2s;
  -moz-transition: margin-top 0.2s;
  -o-transition: margin-top 0.2s;
  transition: margin-top 0.2s;
  border: 2px solid #fff;
}
@media (max-width: 1199px) {
  .navbar .nav-main .page-logo {
    margin-top: -58px;
    -webkit-transition: margin-top 0.2s;
    -moz-transition: margin-top 0.2s;
    -o-transition: margin-top 0.2s;
    transition: margin-top 0.2s;
  }
}
.navbar .nav-main .page-logo img {
  width: 104px;
  -webkit-transition: width 0.2s;
  -moz-transition: width 0.2s;
  -o-transition: width 0.2s;
  transition: width 0.2s;
}
@media (max-width: 991px) {
  .navbar .nav-main .page-logo img {
    width: auto !important;
    height: 31px !important;
    margin-top: -1px;
    border: none;
  }
}
.navbar .nav-main .page-logo h1 {
  margin: 0;
  padding: 0;
}
.navbar .nav-main .langs,
.navbar .nav-main .links {
  display: none;
  list-style-type: none;
  list-style-image: none;
}
@media (max-width: 1199px) {
  .navbar .nav-main .page-logo img {
    width: 66px;
  }
}
@media (max-width: 991px) {
  .navbar {
    border: none;
  }
  .navbar .nav-top {
    display: none !important;
  }
  .navbar .nav-main {
    position: relative;
    text-align: center;
  }
  .navbar .nav-main .langs {
    text-transform: uppercase;
    display: block;
    padding: 0;
    margin: 0 auto;
    position: relative;
    width: 100%;
    text-align: center;
    border-top: 1px solid #f2f2f2;
  }
  .navbar .nav-main .langs li {
    width: 50%;
    float: left;
    position: relative;
  }
  .navbar .nav-main .langs li:first-child a {
    border-left: none;
  }
  .navbar .nav-main .langs li a {
    font-size: 28px;
    color: #4d4d4d;
    display: block;
    border-left: 1px solid #f2f2f2;
    padding: 7px 0 3px 0;
  }
  .navbar .nav-main .langs li a.active {
    font-weight: bold;
  }
  .navbar .nav-main .langs li a:active,
  .navbar .nav-main .langs li a:focus {
    text-decoration: none;
  }
  .navbar .nav-main .links {
    display: block;
    width: 100%;
    background: #fff;
    padding-left: 0;
    margin-top: 5px;
  }
  .navbar .nav-main .links li {
    text-align: center;
  }
  .navbar .nav-main .links li.self-care {
    display: none;
  }
  .navbar .nav-main .links li a {
    color: #4d4d4d;
    font-size: 16px;
    padding: 8px 0;
    display: block;
  }
  .navbar .nav-main .links li a:hover {
    text-decoration: none;
    color: #fe0000;
    background: #fafafa;
  }
  .navbar .nav-main .links li a:active,
  .navbar .nav-main .links li a:focus {
    text-decoration: none;
    background: #fafafa;
  }
  .navbar .nav-main .nav-wrapper {
    -webkit-transition: 0.4s all linear;
    -moz-transition: 0.4s all linear;
    -o-transition: 0.4s all linear;
    transition: 0.4s all linear;
    padding-top: 75px;
    height: 100%;
    position: fixed;
    z-index: 50;
    border-bottom: 1px solid #878787;
    top: 0;
    width: 100%;
    overflow: auto;
    background: #fff;
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  .navbar .nav-main .page-logo {
    top: 7px;
    left: 15px;
    position: absolute;
    margin-top: 0;
    margin-left: 0;
    z-index: 60;
  }
  .navbar .nav-main .navbar-toggle {
    display: block;
    position: absolute;
    right: 0px;
    top: 0px;
    background: #fff;
    border: none;
    margin-right: 0;
    padding: 16px 14px 18px 14px;
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 0;
    -moz-background-clip: padding;
    border-radius: 0;
    background-clip: padding-box;
    margin-top: 0;
    margin-bottom: 0;
    border-left: 1px solid #cccccc;
    z-index: 60;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    transition: all linear 0.3s;
  }
  .navbar .nav-main .navbar-toggle:hover,
  .navbar .nav-main .navbar-toggle:focus {
    background: #fafafa;
  }
  .navbar .nav-main .navbar-toggle .icon-bar {
    background: #333333;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    transition: all linear 0.3s;
    -webkit-transform-origin: left;
    -moz-transform-origin: left;
    -o-transform-origin: left;
    -ms-transform-origin: left;
    transform-origin: left;
    width: 20px;
    height: 2px;
    position: relative;
  }
  .navbar .nav-main .navbar-toggle .icon-bar + .icon-bar {
    margin-top: 5px;
  }
  .navbar .nav-main.open .nav-wrapper {
    width: 100%;
    height: 100%;
    overflow: auto;
    left: 0;
    -webkit-transition: all linear 0.4s;
    -moz-transition: all linear 0.4s;
    -o-transition: all linear 0.4s;
    transition: all linear 0.4s;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
  .navbar .nav-main.open .nav-wrapper .navigation-top-wrapper .col-xs-12 {
    padding: 0;
  }
  .navbar .nav-main.open .navbar-toggle .icon-bar:first-child {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    top: 0px;
  }
  .navbar .nav-main.open .navbar-toggle .icon-bar:nth-child(2) {
    width: 0;
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  .navbar .nav-main.open .navbar-toggle .icon-bar:last-child {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    top: 0px;
  }
  .navbar .nav-main .nav-wrapper .none {
    display: none;
    width: 100% !important;
  }
  .navbar .nav-main .nav-wrapper .show-more {
    padding: 0;
    margin-bottom: -10px;
  }
  .navbar .nav-main .nav-wrapper .caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 4px;
    vertical-align: middle;
    border-top: 4px solid;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
    position: relative;
    top: 0px;
  }
}
@media (max-width: 991px) and (max-width: 991px) {
  .navbar .nav-main .langs li.choose {
    display: none;
  }
}
@media (min-width: 991px) {
  .navbar .nav-main .nav-wrapper .none {
    display: none !important;
  }
}
@media (max-width: 991px) {
  .navbar .nav-top ul li {
    padding: 0 4px;
  }
  .navbar .nav-main {
    background: #fff;
  }
  .navbar .nav-main .container {
    width: 100%;
  }
  .navbar .nav-main .nav-wrapper {
    border-bottom: 0;
    -webkit-box-shadow: 0 3px 3px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 3px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 3px 0px rgba(0, 0, 0, 0.3);
  }
  .navbar .nav-main .links {
    background: #fff;
    margin: 0;
    padding-top: 30px;
  }
  .navbar .nav-main .links li a {
    color: #000;
  }
  .navbar .nav-main .langs {
    background: #fff;
    border: none;
    padding: 10px 0;
    margin-top: -1px;
    list-style-type: none;
    text-align: center;
  }
  .navbar .nav-main .langs li {
    border: none;
    text-align: center;
    width: 15%;
    position: relative;
  }
  .navbar .nav-main .langs li.choose {
    width: 70%;
    display: block;
    color: #666;
    font-size: 18px;
    font-weight: bold;
    padding: 7px 0 3px 15px;
    text-align: left;
  }
  .navbar .nav-main .langs li:last-child:before {
    content: "/";
    color: white;
    position: absolute;
    left: -2px;
    top: 4px;
    font-weight: bold;
    font-size: 23px;
  }
  .navbar .nav-main .langs li a {
    text-transform: uppercase;
    border: none;
    color: #000;
    font-size: 18px;
  }
  .navbar .nav-main .langs li a.active {
    color: #fe0000;
  }
  .navbar .nav-main .langs li a:hover,
  .navbar .nav-main .langs li a:focus,
  .navbar .nav-main .langs li a:active {
    text-decoration: none;
    zoom: 1;
    filter: alpha(opacity=70);
    -webkit-opacity: 0.7;
    -moz-opacity: 0.7;
    opacity: 0.7;
  }
}
@media (max-width: 991px) and (max-width: 991px) {
  .navbar .nav-main .langs li {
    display: inline-block;
    float: none;
  }
}
@-webkit-keyframes badge-pulse {
  0% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  20% {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
  }
  50% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
}
@-moz-keyframes badge-pulse {
  0% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  20% {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
  }
  50% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
}
@-ms-keyframes badge-pulse {
  0% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  20% {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
  }
  50% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
}
@-o-keyframes badge-pulse {
  0% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  20% {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
  }
  50% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
}
@keyframes badge-pulse {
  0% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  20% {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
  }
  50% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.8, 0.8);
    -moz-transform: scale(0.8, 0.8);
    -o-transform: scale(0.8, 0.8);
    -ms-transform: scale(0.8, 0.8);
    transform: scale(0.8, 0.8);
    zoom: 1;
    filter: alpha(opacity=0);
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
  }
}
footer {
  background-color: #231f20;
}
footer .footer-content {
  color: #ffffff;
}
@media (max-width: 531px) {
  footer .footer-content {
    overflow: hidden;
  }
}
footer .footer-content .container {
  padding-top: 20px;
  padding-bottom: 40px;
}
@media (max-width: 531px) {
  footer .footer-content .mobile-row {
    width: 103%;
  }
}
footer .footer-content h3 {
  font-size: 18px;
  line-height: 18px;
  font-weight: bold;
  text-transform: uppercase;
  color: #ffffff;
  margin-bottom: 20px;
  margin-top: 30px;
}
footer .footer-content h4 {
  font-weight: bold;
  font-size: 14px;
  color: #ffffff;
  text-transform: uppercase;
  line-height: 18px;
  margin-top: 30px;
  margin-bottom: 30px;
}
@media (max-width: 767px) {
  footer .footer-content h4 {
    margin-top: 50px;
    line-height: 17px;
    margin-bottom: 14px;
  }
}
footer .footer-content ul.products,
footer .footer-content ul.important-links {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
@media (max-width: 767px) {
  footer .footer-content ul.products li,
  footer .footer-content ul.important-links li {
    float: left;
    width: 50%;
  }
}
footer .footer-content ul.products li a,
footer .footer-content ul.important-links li a {
  color: #ffffff;
  font-size: 14px;
  line-height: 30px;
  text-transform: uppercase;
}
footer .footer-content ul.products li h4 a,
footer .footer-content ul.important-links li h4 a {
  text-transform: uppercase;
  font-size: 14px;
  line-height: 18px;
}
footer .footer-content ul.important-links li {
  width: 50%;
  float: left;
}
@media (max-width: 1199px) {
  footer .footer-content ul.products li {
    width: 50%;
    float: left;
  }
}
@media (max-width: 767px) {
  footer .footer-content ul.products li {
    width: 100%;
    float: none;
  }
}
@media (max-width: 480px) {
  footer .footer-content ul.products li {
    width: 50%;
    float: left;
  }
}
footer .footer-content .footer-social img {
  height: 130px !important;
}
@media (max-width: 420px) {
  footer .footer-content .footer-social img {
    height: 115px !important;
  }
}
@media (max-width: 480px) {
  footer .footer-content .footer-social {
    padding-right: 5px;
  }
  footer .footer-content .footer-social + .footer-social {
    padding-right: 15px;
    padding-left: 5px;
  }
  footer .footer-content .footer-social h4 {
    font-size: 12px;
  }
}
@media (max-width: 380px) {
  footer .footer-content .footer-social h4 {
    font-size: 9px;
    white-space: nowrap;
  }
}
@media (min-width: 1200px) {
  footer .footer-content .footer-social.we-chat {
    margin-top: 30px;
  }
}
footer .footer-content .footer-social.we-chat .we-chat-QR {
  position: relative;
}
footer .footer-content .footer-social.we-chat .we-chat-QR a {
  display: none;
  width: 140px;
  margin-top: -200px;
  position: absolute;
  margin-left: 15px;
  padding-bottom: 70px;
}
@media (max-width: 1199px) {
  footer .footer-content .footer-social.we-chat .we-chat-QR a {
    margin-left: 33px;
  }
}
footer .footer-content .footer-social.we-chat .we-chat-QR a p {
  height: 130px;
  line-height: 130px;
  min-width: 180px;
  padding-left: 15px;
  position: absolute;
  top: 0px;
  left: 0px;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%);
  background: #ffffff;
  text-align: center;
  color: #000000;
}
@media (max-width: 1200px) {
  footer .footer-content .footer-social.we-chat .we-chat-QR a p {
    right: 10px;
    left: inherit;
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -o-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
    padding-left: 0;
    padding-right: 15px;
  }
}
footer .footer-content .footer-social.we-chat .we-chat-QR:hover a {
  display: block;
}
@media (max-width: 991px) {
  footer .footer-content .footer-social.we-chat .we-chat-QR:hover a {
    display: none;
  }
}
footer .footer-content .footer-social.we-chat .we-chat-logo {
  height: auto !important;
  width: 50px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
}
@media (max-width: 1199px) {
  footer .footer-content .footer-social.we-chat .we-chat-logo {
    margin-top: 35px;
  }
}
footer .footer-content .footer-social.we-chat .we-chat-logo:hover {
  text-decoration: none;
}
@media (max-width: 991px) {
  footer .footer-content .footer-social.we-chat .we-chat-logo:hover {
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -o-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }
}
footer .footer-content .footer-social.qr-download {
  cursor: pointer;
}
@media (min-width: 1200px) {
  footer .footer-content .footer-social.qr-download {
    margin-top: 30px;
  }
}
footer .footer-content .footer-social.qr-download .gr-download-box {
  position: relative;
}
footer .footer-content .footer-social.qr-download .gr-download-box a {
  display: none;
  margin-top: -200px;
  position: absolute;
  margin-left: 20px;
  padding-bottom: 70px;
}
@media (max-width: 1199px) {
  footer .footer-content .footer-social.qr-download .gr-download-box a {
    margin-left: 36px;
  }
}
footer .footer-content .footer-social.qr-download .gr-download-box a p {
  height: 130px;
  line-height: 130px;
  min-width: 220px;
  padding-left: 5px;
  position: absolute;
  top: 0px;
  left: 0px;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%);
  background: #ffffff;
  text-align: center;
  color: #000000;
}
@media (max-width: 1200px) {
  footer .footer-content .footer-social.qr-download .gr-download-box a p {
    padding-left: 0;
    padding-right: 5px;
    right: 0px;
    left: inherit;
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -o-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
  }
}
footer .footer-content .footer-social.qr-download .gr-download-box:hover a {
  display: block;
}
@media (max-width: 991px) {
  footer .footer-content .footer-social.qr-download .gr-download-box:hover a {
    display: none;
  }
}
footer .footer-content .footer-social.qr-download .gr-download-logo {
  height: auto !important;
  width: 50px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
}
@media (max-width: 1199px) {
  footer .footer-content .footer-social.qr-download .gr-download-logo {
    margin-top: 25px;
  }
}
footer .footer-content .footer-social.qr-download .gr-download-logo:hover {
  text-decoration: none;
}
@media (max-width: 991px) {
  footer .footer-content .footer-social.qr-download .gr-download-logo:hover {
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -o-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }
}
footer .footer-content .footer-social.qr-download a {
  color: #ffffff;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
footer .footer-content .logos {
  font-size: 14px;
  text-align: center;
  position: relative;
}
@media (max-width: 1200px) {
  footer .footer-content .logos {
    min-height: 75px;
  }
}
@media (max-width: 1199px) {
  footer .footer-content .logos {
    margin-top: 50px;
    text-align: center;
  }
}
@media (max-width: 991px) {
  footer .footer-content .logos {
    margin-top: 30px;
  }
}
footer .footer-content .logos:after {
  content: attr(data-title);
  position: absolute;
  color: #ffffff;
  font-size: 12px;
  left: 75%;
  bottom: 13px;
}
@media (max-width: 991px) {
  footer .footer-content .logos:after {
    left: 50%;
    bottom: -25px;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
  }
}
footer .footer-content .logos a.logo {
  margin-top: 15px;
  color: #6d6e71;
  font-weight: 700;
  text-align: center;
  display: inline-block;
  margin-right: 10px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
@media (max-width: 991px) {
  footer .footer-content .logos a.logo {
    margin-right: 0;
  }
}
footer .footer-content .logos a.logo span {
  display: block;
  width: 100%;
}
footer .footer-content .logos a.logo:hover {
  text-decoration: none;
  -webkit-transform: scale(1.05);
  -moz-transform: scale(1.05);
  -o-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
}
footer .footer-content .logos a.logo .img-wrapper {
  display: inline-block;
  margin-bottom: 0;
  margin-top: 20px;
}
footer .footer-content .logos a.logo img.weibo {
  width: 50px;
  height: 40px;
}
footer .copyright {
  border-top: 1px solid #393738;
}
footer .copyright p {
  margin: 0;
  padding: 25px 0;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
}
footer .copyright p a {
  color: #848484;
}
footer .copyright p + p {
  padding-bottom: 33px;
}
@media (max-width: 480px) {
  footer .copyright p {
    padding: 26px 0;
    font-size: 13px;
  }
}
.testimonials {
  position: relative;
  padding: 0;
}
@media (max-width: 480px) {
  .testimonials {
    padding: 0;
    background-size: auto 55%;
  }
}
.testimonials .doodle {
  position: absolute;
  width: 86px;
  bottom: 155px;
  left: 50%;
  -webkit-transform: translateX(-170%);
  -moz-transform: translateX(-170%);
  -o-transform: translateX(-170%);
  -ms-transform: translateX(-170%);
  transform: translateX(-170%);
}
.testimonials .testimonials-header {
  position: absolute;
  left: 0;
  top: 30px;
  width: 100%;
  z-index: 100;
}
.testimonials .testimonials-header .testimonials-headline {
  width: 100%;
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
  margin: 0;
  text-align: center;
  color: #fff;
}
.testimonials .testimonials-header .testimonials-stories-link {
  display: block;
  float: right;
  width: 40%;
  text-transform: uppercase;
  text-align: right;
  position: relative;
  text-decoration: none;
  color: #333333;
  top: 3px;
  font-weight: bold;
}
@media (max-width: 991px) {
  .testimonials .testimonials-header .testimonials-stories-link {
    width: auto;
    text-align: center;
    float: none;
    display: inline-block;
    margin: 0 auto;
    position: relative;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 50%;
    margin-top: 5px;
    font-size: 12px;
    line-height: 16px;
  }
}
.testimonials .testimonials-header .testimonials-stories-link span {
  display: block;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 20px;
  height: 20px;
  margin-left: 0;
  right: -20px;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
}
.testimonials .testimonials-header .testimonials-stories-link:hover,
.testimonials .testimonials-header .testimonials-stories-link:active,
.testimonials .testimonials-header .testimonials-stories-link:focus {
  text-decoration: none;
}
.testimonials .testimonials-header .testimonials-stories-link:hover span,
.testimonials .testimonials-header .testimonials-stories-link:active span,
.testimonials .testimonials-header .testimonials-stories-link:focus span {
  right: -30px;
}
.testimonials .carousel-container {
  height: 430px;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide {
  background: url('../img/testimonials-background-red.jpg') no-repeat #ff0000;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  padding: 50px 0 20px 0;
  background-position: top center;
}
@media (max-width: 767px) {
  .testimonials .carousel-container .swiper-wrapper .swiper-slide {
    background-size: auto 80%;
  }
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
  height: 430px;
  position: relative;
}
@media (min-width: 992px) {
  .testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
    max-width: 50%;
    margin: 0 auto;
  }
}
@media (max-width: 991px) {
  .testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
    max-width: 100%;
    margin: 0 auto;
  }
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info {
  padding: 15px 15px 0;
  width: 100%;
  max-width: 280px;
  margin: 0 auto;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .testimonial-bubble {
  height: 75px;
  display: table;
  width: 100%;
  background: #fff;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
  padding: 8px 25px;
  position: relative;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .testimonial-bubble .content-wrapper {
  display: table-cell;
  vertical-align: middle;
  line-height: 18px;
  font-size: 12px;
  color: #474430;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .step-info .testimonial-bubble:after {
  content: '';
  position: absolute;
  bottom: 0;
  -webkit-transform: translateY(100%);
  -moz-transform: translateY(100%);
  -o-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  width: 22px;
  height: 24px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAwCAQAAAAvWztUAAACnUlEQVR4AbXXA7AbexxH8fNfxcmzbdu2UbeD2h3Wtm3btt1n27YdZ184c+3VPWN95jffDXm3Xa4+yr7dikXX14f8z3JOgWDmD6fh9C8dzicA7tgOp+mP2xNEBe233s7C8SOcgAsByiu3OipnDt6HDxlAPimQ+d05ObyRECoCQOCJrHHu5s0340GCorTPWjglR3cSQqE0penJ2bAz9MuPlb8ZJLyxTU7AqQ8IoVIugeuz5k7QP/fHi0SFlHOOT39vW9YnXIhGUeUn+X20XTlxFD8ylRJo8y/L6vboX/rgRlAlmUBkiz1629WoVJPA/dw9uax1OP1d0RzVpRCKHbDxZllbNEd1SXiO3Gv97l96olFjKiHre3/wMApAjXcvvS4bt0aPPhWZWlII/THRCpz5DQ+CWhK4Hz1d/9LCG/ENXLXToBB4rYH5hxnfgUYdCVwc/9cCs3R0OSp1JuF96kz9U3N0ZCoKBlIIbr8zGzNDh8cYootG+aKbGfq/ocZokPBw4l/zTNEyBpPxnXdadL/hxzjGOC1QCTQ6N/WWQXq6cRoEGqFBl6c+NkInlpmhix7nccOu0D+rm07tQcFUEm6OH3d16qO66P8/QAELeI9LknVsnv0PFSzhT5wb3l47/vzJYAV3cZzvtF8m1vax9cf9YBUPccqHHWp++0d7IrCUQCPASbsf1r+unk6tQAKruIKPE5tf+O/G6ujMp8hgHZfxcDynftSpun9tX56NjYpWD3Ly4KvDW6us3RqbCVR8nMCpLzVOfVCe1tch7OMybkKcdNFZ3/TP/FX2tjnqBnDidi/Hc0rXS/9amtWL8NizOJSEhp8TOHX2zf+uzhX49EYEDlU0TZATOXX+rf8uyv7755k4mEAp4jl54fl/XkZpeb7vVhhnzXOlAAAAAElFTkSuQmCC") no-repeat;
  background-size: contain;
  left: 80px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-profile-photo {
  max-width: 120px;
  max-height: 120px;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  top: 115px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  margin-left: 0px;
  border: 3px solid #fff;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-name-wrapper {
  text-align: center;
  font-weight: 600;
  width: 100%;
  max-width: 150px;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  margin-left: 0px;
  bottom: 150px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-name-wrapper > span {
  display: block;
  width: 100%;
  font-family: OpenSans;
  line-height: 18px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-name-wrapper > span.testimonial-name {
  color: #fff;
  font-weight: 700;
  font-size: 14px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-name-wrapper > span.testimonial-city {
  color: #fff;
  font-weight: 400;
  font-size: 13px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  text-transform: uppercase;
  bottom: 115px;
  color: #fff;
  text-decoration: underline;
  font-size: 14px;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:after {
  content: '';
  position: absolute;
  right: -15px;
  bottom: 25%;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAALCAQAAAD2WzQdAAAAYElEQVQIW2P4H/0/9j8jAwT8r/n/+n8AjMP2v/v/q/9OMC7z//n/n/w3h3G5/q/5f+K/JYzL+//5/wswTu7/+/8LIMys/7/+J0OYYUBmFdiu/+FA1a3/WSHidf/7oUwGAGr7N2iqR4DxAAAAAElFTkSuQmCC") no-repeat;
  background-size: contain;
  width: 10px;
  height: 10px;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:hover,
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:focus,
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:active {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.95);
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:hover:after,
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:focus:after,
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-detail-link:active:after {
  right: -20px;
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-description {
  position: absolute;
  top: 490px;
  width: 100%;
  height: 80px;
  left: 0;
  padding: 0 15px;
  text-align: center;
}
@media (max-width: 480px) {
  .testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-description {
    top: 330px;
    padding: 0 15px;
    height: 160px;
  }
}
.testimonials .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .testimonial-description .description-middle {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  height: 100%;
}
@media (max-width: 767px) {
  .testimonials .carousel-container .swiper-pagination {
    bottom: 18px;
  }
}
.testimonials .carousel-container .swiper-pagination .swiper-pagination-switch {
  border-color: #fff;
}
.testimonials .carousel-container .swiper-pagination .swiper-pagination-switch.swiper-active-switch {
  background: #fff;
}
.testimonials .carousel-container .swiper-next,
.testimonials .carousel-container .swiper-prev {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAtCAQAAAAE9YPjAAAA90lEQVR4AaXVJaCQMRgFUNxJSMHdE5ZwGtJwibh7JFFwKTgkLOJQsIa7Q8Fdntt5Pd3wL5/5dr8GjvhrfYPclKDS9Aw3gV+GJdjMcfBE50TbugXOaZFoH+/BtrzSiUrBokyXgf/GZboLvNE7wZYuguvaJNrNE3BEk0RH+g025JXOUoVqUzPdDL4akmAjJ8F9HRNt7w44o1miA30EW/JKJysF8zNdDf4YnekB8FqXBFu7Ci5rlS/1OdiXp18ISoqPmNeYd53PscjNGOhTvuv8evJ7zC88/5n8C4v/65wUOXtymuV8zIlbPMNzVUh1pkDlOuK/dQ1iqwegk4QPRZMP+QAAAABJRU5ErkJggg==");
}
.first-loan {
  padding: 0;
}
.first-loan .page-heading {
  position: relative;
  background-position: 8% 92% !important;
}
.first-loan .doodle {
  position: absolute;
}
.first-loan .doodle.pen {
  top: 0;
  right: 0;
  width: 76px;
}
@media (min-width: 768px) {
  .first-loan .doodle.pen {
    top: 12px;
    right: 37px;
    width: 143px;
  }
}
.first-loan strong.section {
  font-size: 18px;
  line-height: 19px;
}
.first-loan .ttip {
  display: inline-block;
  color: #ff0000;
}
.first-loan .ttiplabel {
  display: inline-block;
  vertical-align: middle;
  color: #ff0000;
  margin-bottom: 10px;
}
.first-loan .carousel-container .swiper-wrapper {
  background: #fff;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
  background: #fff;
  height: auto;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content h4 {
  margin-top: 0;
  padding: 0 15px;
  color: #414042;
  font-size: 14px;
  font-weight: 700;
  line-height: 19px;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content p {
  max-width: 400px;
  padding: 0 15px;
  margin: 0 auto;
  font-size: 14px;
  line-height: 18px;
  color: #58595b;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .vertical-align {
  height: 250px;
  display: table;
}
@media (min-width: 1200px) {
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .vertical-align {
    float: left;
  }
}
@media (max-width: 1199px) {
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .vertical-align {
    width: 100%;
  }
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .vertical-align .content-wrapper {
  display: table-cell;
  vertical-align: middle;
  padding: 0 45px 60px;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper {
  height: 200px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  background-position: 50%;
  background-repeat: no-repeat;
  overflow: visible;
}
@media (min-width: 1200px) {
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper {
    float: left;
    text-align: left;
  }
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper p {
    margin: 0;
  }
}
@media (max-width: 1199px) {
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper {
    margin: 0 auto;
  }
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper img {
  height: 200px !important;
  width: auto;
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
  width: 100%;
  text-align: center;
  top: 20px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper h2 {
  white-space: nowrap;
}
@media (min-width: 768px) {
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
    top: 40px;
  }
}
.first-loan .carousel-container .swiper-pagination {
  bottom: 20px;
}
.first-loan .carousel-container .swiper-pagination .swiper-pagination-switch {
  border-color: #ff0000;
}
.first-loan hr {
  margin-bottom: 0;
}
.first-loan .tab-sections > div {
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.first-loan .tab-sections > div > div {
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.first-loan .loan-process-headline {
  margin: 0;
  padding: 30px 0;
  text-align: center;
  font-weight: 700;
}
.first-loan .commodities,
.first-loan .cash {
  position: relative;
}
.first-loan .commodities .doodle,
.first-loan .cash .doodle {
  position: absolute;
  top: 22px;
  left: 50%;
  -webkit-transform: translateX(230%);
  -moz-transform: translateX(230%);
  -o-transform: translateX(230%);
  -ms-transform: translateX(230%);
  transform: translateX(230%);
  width: 73px;
  z-index: 10;
}
@media (max-width: 1200px) {
  .first-loan .commodities .doodle,
  .first-loan .cash .doodle {
    -webkit-transform: translateX(-230%);
    -moz-transform: translateX(-230%);
    -o-transform: translateX(-230%);
    -ms-transform: translateX(-230%);
    transform: translateX(-230%);
  }
}
@media (max-width: 360px) {
  .first-loan .commodities .doodle,
  .first-loan .cash .doodle {
    left: 57%;
  }
}
@media (max-width: 1384px) {
  .first-loan .commodities .doodle,
  .first-loan .cash .doodle {
    top: 5px;
  }
}
@media (min-width: 992px) {
  .first-loan strong.section {
    font-size: 23px;
    line-height: 36px;
  }
  .first-loan .nav-tabs li a {
    font-size: 22px;
  }
  .first-loan .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper {
    text-align: center;
  }
  .first-loan .nav-tabs li a .img-wrapper {
    height: 270px;
  }
  .first-loan .carousel-container {
    background: #f0f1f1;
  }
}
.carousel-container {
  width: 100%;
  margin: 0;
  position: relative;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1;
  padding: 0;
}
@media (max-width: 767px) {
  .carousel-container .hide-detail-mobile {
    visibility: hidden;
  }
}
.carousel-container .swiper-wrapper {
  padding: 0px;
  margin: 0;
  background: #f0f1f1;
}
.carousel-container .swiper-wrapper .swiper-slide {
  padding: 0;
  margin: 0;
  text-align: center;
  background-position: 50% 15%;
  background-repeat: no-repeat;
  overflow: hidden;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
  padding: 0;
  margin: 0;
  position: relative;
  height: 402px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
  width: 48%;
  position: absolute;
  left: 50%;
  top: 7%;
  text-align: left;
}
@media (min-width: 480px) {
  .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper {
    top: 15%;
  }
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper h1 {
  color: #ee1c24;
  font-size: 20px;
  font-weight: 700;
  line-height: 23px;
  margin-top: 0;
  margin-bottom: 10px;
  text-align: left;
}
@media (min-width: 1200px) {
  .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper h1 {
    font-size: 26px !important;
  }
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .text-wrapper p {
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .btn {
  position: relative;
  z-index: 5;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .btn span {
  vertical-align: middle;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .btn img {
  position: absolute;
  z-index: 50;
  pointer-events: none;
  width: 96px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .btn img.doodle.bravo {
  bottom: -48px;
  left: 0;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .btn img.doodle.fellow {
  bottom: -46px;
  right: -10px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time-wrapper {
  position: absolute;
  bottom: 51px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 300px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time-wrapper .btn {
  position: static;
}
@media (min-width: 992px) {
  .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time-wrapper {
    -webkit-transform: translateX(20%);
    -moz-transform: translateX(20%);
    -o-transform: translateX(20%);
    -ms-transform: translateX(20%);
    transform: translateX(20%);
  }
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time {
  width: 100%;
}
@media (min-width: 991px) {
  .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time {
    width: auto;
    left: 50%;
  }
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time h3 {
  margin: 0;
  color: #4a4c4e;
  font-size: 14px;
  font-weight: bold;
  line-height: 17px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown {
  margin-top: 4px;
  margin-bottom: 6px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span {
  display: inline-block;
  position: relative;
  margin-right: 30px;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span:after {
  content: ':';
  display: inline-block;
  position: absolute;
  top: 50%;
  right: -20px;
  color: rgba(74, 76, 78, 0.4);
  font-size: 20px;
  line-height: 24px;
  font-weight: 600;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span:last-child {
  margin-right: 0;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span:last-child:after {
  display: none;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span > span {
  display: block;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span > span:first-child {
  color: #ed1c24;
  font-size: 32px;
  line-height: 36px;
  font-weight: 700;
}
.carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .time .countdown > span > span:last-child {
  color: #fff;
  font-size: 14px;
  line-height: 22px;
  font-weight: 600;
  margin-top: -5px;
}
.carousel-container .swiper-pagination {
  position: absolute;
  bottom: 15px;
  width: 100%;
  margin: 0;
  text-align: center;
}
.carousel-container .swiper-pagination .swiper-pagination-switch {
  cursor: pointer;
  position: relative;
  display: inline-block;
  margin-left: 5px;
  height: 12px;
  width: 12px;
  background: none;
  border: 1px #5f6163 solid;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
}
.carousel-container .swiper-pagination .swiper-pagination-switch:first-child {
  margin-left: 0px;
}
.carousel-container .swiper-pagination .swiper-pagination-switch.swiper-active-switch {
  background: #ff1f1f;
  border: 1px #ff1f1f solid;
}
.carousel-container .swiper-next,
.carousel-container .swiper-prev {
  position: absolute;
  top: 50%;
  right: 15px;
  margin-top: -22px;
  display: inline-block;
  width: 20px;
  height: 45px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAtCAYAAACu/EtoAAABMElEQVR4AbXXJVQgURjFcdY9rZT1xS1hCachDZeIu0cSBZeCQ8IiDgVruDsU3N3t4l9/d+ecX/2Pz3xPY/nHv2LYgTgNxobQPlzBCbgxgolwdW8TTFWDr6FMRIfhh2r0E3SKaC28VY1qw5yIpjKupwMciGggIxoqgntgy4hmiug0aKkG30GDiLbBR9XobxgW0WJ4qRq1gC0RjWdcT084vQ+egQsjmiSOcgWMVYPPoUJE++CbavQLdItoNbxWjRrAgogmM66nk3w9wY8RjRLBbbBiRPNFdAp+qgY/QIuINsF7xus5JqK5jFMPEMF9/hHyryH/LvOfQ86bovAuL8p3mf+14X8P+V9s/j+F/9fj/5f5kwN/tuFPX/z5kD/B8mds/irgf61T6CupYtiDWA3Cdg0Daadnplyy/wAAAABJRU5ErkJggg==");
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.carousel-container .swiper-next:hover,
.carousel-container .swiper-prev:hover {
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}
.carousel-container .swiper-prev {
  left: 15px;
  right: auto;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.swiper {
  background: #f2f2f2;
  padding: 0;
  width: 100%;
  overflow: hidden;
}
.swiper h2 {
  font-weight: bold;
}
.swiper .container-fluid {
  padding: 0;
  margin: 0;
}
.swiper .container-fluid .row {
  margin: 0;
  padding: 0;
}
.tabs-common ul.tabs-menu,
.tabs-common ul.tabs-menu-faqSecti {
  padding: 0px 25px 0 25px;
  overflow: hidden;
  border-bottom: none;
  margin-top: -62px;
}
@media (max-width: 767px) {
  .tabs-common ul.tabs-menu,
  .tabs-common ul.tabs-menu-faqSecti {
    margin-top: -47px;
    padding: 0 18px 0 18px;
  }
}
.tabs-common ul.tabs-menu div[class^="col-"],
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] {
  padding: 0 10px;
}
.tabs-common ul.tabs-menu div[class^="col-"] li,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li {
  text-align: center;
  border-width: 0;
  background: #ff1f20;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  position: relative;
  -webkit-border-radius: 5px 5px 0 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 5px 5px 0 0;
  -moz-background-clip: padding;
  border-radius: 5px 5px 0 0;
  background-clip: padding-box;
  z-index: 1;
  margin-bottom: -1px;
}
.tabs-common ul.tabs-menu div[class^="col-"] li a,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li a {
  padding-left: 0px;
  padding-right: 0px;
  font-size: 14px;
}
@media (max-width: 460px) {
  .tabs-common ul.tabs-menu div[class^="col-"] li a,
  .tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li a {
    font-size: 11px;
  }
}
.tabs-common ul.tabs-menu div[class^="col-"] li:hover,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li:hover {
  background-color: #eb0001;
}
.tabs-common ul.tabs-menu div[class^="col-"] li:hover a,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li:hover a {
  color: #fff;
}
.tabs-common ul.tabs-menu div[class^="col-"] li:before,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li:before,
.tabs-common ul.tabs-menu div[class^="col-"] li:after,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li:after {
  content: '';
  zoom: 1;
  filter: alpha(opacity=0);
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  display: inline-block;
  position: absolute;
}
.tabs-common ul.tabs-menu div[class^="col-"] li.current,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current,
.tabs-common ul.tabs-menu div[class^="col-"] li.active,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active {
  background-color: #fff!important;
  z-index: 2;
  -webkit-box-shadow: 0 2px 10px 0px rgba(0, 0, 0, 0.6);
  -moz-box-shadow: 0 2px 10px 0px rgba(0, 0, 0, 0.6);
  box-shadow: 0 2px 10px 0px rgba(0, 0, 0, 0.6);
}
.tabs-common ul.tabs-menu div[class^="col-"] li.current a,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current a,
.tabs-common ul.tabs-menu div[class^="col-"] li.active a,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active a {
  color: #000 !important;
}
.tabs-common ul.tabs-menu div[class^="col-"] li.current:before,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current:before,
.tabs-common ul.tabs-menu div[class^="col-"] li.active:before,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active:before,
.tabs-common ul.tabs-menu div[class^="col-"] li.current:after,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current:after,
.tabs-common ul.tabs-menu div[class^="col-"] li.active:after,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active:after {
  content: '';
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  display: inline-block;
  height: 1px;
  width: 2000px;
  background-color: transparent;
  position: absolute;
  bottom: 0;
  -webkit-transition: 0.6s;
  -moz-transition: 0.6s;
  -o-transition: 0.6s;
  transition: 0.6s;
  -webkit-box-shadow: 0 2px 10px 0px #000000;
  -moz-box-shadow: 0 2px 10px 0px #000000;
  box-shadow: 0 2px 10px 0px #000000;
}
.tabs-common ul.tabs-menu div[class^="col-"] li.current:before,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current:before,
.tabs-common ul.tabs-menu div[class^="col-"] li.active:before,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active:before {
  right: 100%;
}
.tabs-common ul.tabs-menu div[class^="col-"] li.current:after,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.current:after,
.tabs-common ul.tabs-menu div[class^="col-"] li.active:after,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li.active:after {
  left: 100%;
}
@media (max-width: 460px) {
  .tabs-common ul.tabs-menu div[class^="col-"] li,
  .tabs-common ul.tabs-menu-faqSecti div[class^="col-"] li {
    -webkit-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.7);
    -moz-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.7);
    box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.7);
  }
}
@media (max-width: 460px) {
  .tabs-common ul.tabs-menu div[class^="col-"],
  .tabs-common ul.tabs-menu-faqSecti div[class^="col-"] {
    padding: 0;
  }
}
.tabs-common ul.tabs-menu div[class^="col-"]:first-child li,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"]:first-child li {
  text-align: left;
}
.tabs-common ul.tabs-menu div[class^="col-"]:last-child li,
.tabs-common ul.tabs-menu-faqSecti div[class^="col-"]:last-child li {
  text-align: right;
}
.tabs-common ul.tabs-menu li,
.tabs-common ul.tabs-menu-faqSecti li {
  display: block;
}
@media (max-width: 768px) {
  .tabs-common ul.tabs-menu li,
  .tabs-common ul.tabs-menu-faqSecti li {
    text-align: center !important;
  }
}
.tabs-common ul.tabs-menu li a,
.tabs-common ul.tabs-menu-faqSecti li a {
  display: inline-block;
  border-bottom: 5px solid transparent;
  text-decoration: none;
  color: #fff;
  padding: 19px 0;
  width: 100%;
  text-align: center;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  font-weight: bold;
  font-size: 28px;
  outline: 0;
}
@media (max-width: 1200px) {
  .tabs-common ul.tabs-menu li a,
  .tabs-common ul.tabs-menu-faqSecti li a {
    font-size: 25px;
  }
}
@media (max-width: 992px) {
  .tabs-common ul.tabs-menu li a,
  .tabs-common ul.tabs-menu-faqSecti li a {
    font-size: 20px;
  }
}
@media (max-width: 767px) {
  .tabs-common ul.tabs-menu li a,
  .tabs-common ul.tabs-menu-faqSecti li a {
    padding: 14px 0;
    font-size: 14px;
  }
}
.tab-content.faqPage {
  margin-top: 37px;
}
.tab-content.faqPage .col-xs-6 h2 {
  color: #ff0000;
  font-weight: 600;
  margin-bottom: 20px;
  padding-left: 20px;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap {
  border-bottom: solid 1px #dddddd;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap .tabInn {
  position: relative;
  color: #000000;
  font-weight: 600;
  height: auto;
  min-height: 62px;
  border-radius: 0px;
  line-height: 31px !important;
  font-size: 17px!important;
  text-align: left;
  padding: 25px 60px 25px 20px;
  cursor: pointer;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap .tabInn:after {
  content: "";
  display: block;
  position: absolute;
  right: 21px;
  top: 29px;
  top: calc(20% - 8px);
  width: 12px;
  height: 8px;
  background: url("../img/downArrowBtnRed.png") center center transparent no-repeat;
  background-size: 100%;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap .tabInn.rotate:after {
  transform: rotate(180deg);
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap p {
  overflow: hidden;
  margin: 0px;
  display: none;
  padding: 0px 20px 20px;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap p.openTab {
  /* height: auto;*/
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap:last-child {
  border-bottom: 0px none;
}
.tab-content.faqPage .tab-pane .col-xs-6 .tabWrap.opens {
  background: #f5f5f5;
}
.page-heading {
  width: 100%;
  height: 180px;
  display: table;
  text-align: center;
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  background-size: cover !important;
  background-repeat: no-repeat;
  background-position: center;
}
@media (max-width: 767px) {
  .page-heading {
    height: 130px;
  }
}
.page-heading .heading-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.page-heading .heading-wrapper h1 {
  color: #fff;
  text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
}
.page-heading .heading-wrapper h1 span {
  text-transform: none;
  font-size: 24px;
}
.page-heading.have-tabs {
  padding-bottom: 60px;
}
@media (max-width: 767px) {
  .page-heading.have-tabs {
    padding-bottom: 50px;
  }
}
.page-heading .doodle {
  position: absolute;
}
.page-heading .doodle.megafon {
  right: -8px;
  margin-top: 2px;
  width: 18%;
  max-width: 120px;
}
.media-center {
  padding-bottom: 0;
}
.media-center .page-heading {
  background-position: 0% 58%;
}
.media-center input[type=checkbox] {
  appearance: checkbox;
  -moz-appearance: checkbox;
  /* Firefox */
  -webkit-appearance: checkbox;
  /* Safari and Chrome */
  cursor: pointer;
}
.media-center label {
  cursor: pointer;
}
.media-center .tab .tab-content {
  display: none;
}
.media-center .tab .tab-content .articles-list .article {
  padding-top: 25px;
  padding-bottom: 20px;
}
.media-center .tab .tab-content .articles-list .article img {
  width: 100%;
  height: auto;
}
.media-center .tab .tab-content .articles-list .article a.image-wrapper {
  display: block;
  overflow: hidden;
  height: 290px;
  margin: 0 -15px;
}
.media-center .tab .tab-content .articles-list .article a.image-wrapper img {
  margin-top: 15px;
}
.media-center .tab .tab-content .articles-list .article h1 {
  margin-top: 0;
  margin-bottom: 20px;
}
.media-center .tab .tab-content .articles-list .article h1.littleHeader {
  line-height: 22px;
}
.media-center .tab .tab-content .articles-list .article h1.littleHeader a {
  font-size: 17px;
  color: #000;
  line-height: 22px;
}
.media-center .tab .tab-content .articles-list .article h1.littleHeader a:hover {
  color: #000;
}
.media-center .tab .tab-content .articles-list .article .description p {
  font-size: 14px;
  line-height: 22px;
  text-align: justify;
  margin-bottom: 20px;
}
.media-center .tab .tab-content .articles-list .article .content {
  margin-top: 40px;
}
.media-center .tab .tab-content .articles-list .article .content p {
  font-size: 15px;
}
@media (max-width: 319px) {
  .media-center .tab .tab-content .articles-list .article .col-xs-8,
  .media-center .tab .tab-content .articles-list .article .col-xs-4 {
    width: 100%;
  }
  .media-center .tab .tab-content .articles-list .article .col-xs-4 {
    text-align: left;
  }
}
.media-center .tab .tab-content .articles-list .color-light-gray {
  line-height: 25px;
  font-size: 14px;
}
.media-center .tab .tab-content:first-child {
  display: block;
}
.media-center .articles-headline {
  border-top: 1px solid #f0f1f1;
  position: relative;
}
.media-center .articles-headline h2 {
  margin: 0;
  line-height: 80px;
}
.media-center .articles-headline .fantastic-article {
  top: 13px;
  right: 22px;
  position: absolute;
}
.media-center .filter-img {
  background: url(../img/filter-img.png) bottom left no-repeat;
  min-height: 250px;
}
@media (max-width: 456px) {
  .media-center .filter-img {
    -webkit-background-size: 118%;
    -moz-background-size: 118%;
    background-size: 118%;
  }
}
.media-center .load-more-link {
  text-align: center;
  margin: 45px 0;
}
.media-center .load-more-link a {
  padding-right: 20px;
  background: url('../img/arrows/dark-gray-down.png') no-repeat scroll right 50% transparent;
}
.media-center .more {
  color: #ff1f20;
  font-weight: bold;
  font-size: 14px;
  text-decoration: underline;
  display: inline-block;
  margin-right: 30px;
  text-transform: uppercase;
  line-height: 18px;
  position: absolute;
  bottom: 4px;
  right: 0;
  width: auto;
}
.media-center .more:hover {
  text-decoration: none;
}
.media-center .more:after:not(.load-a) {
  content: ' \203A';
  position: absolute;
  right: -20px;
  color: #ff1f20;
  width: 20px;
  height: 20px;
  top: -3px;
  font-size: 18px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.media-center .more:hover:not(.load-a):after {
  right: -25px;
}
.media-center .color-extra-light-gray {
  font-size: 14px;
}
.media-center article {
  padding-top: 40px;
  font-size: 14px;
}
.media-center article .share-wrapper .share-header {
  margin-top: 20px;
  margin-bottom: 5px;
  font-weight: bold;
}
.media-center article .share-wrapper img {
  margin-top: 0px !important;
}
.media-center article .wechat-icon {
  cursor: pointer;
}
.media-center article .wechat-icon:hover .wechat-popup {
  display: block;
}
.media-center article .wechat-icon .wechat-popup {
  display: none;
  position: absolute;
  width: 295px;
  padding: 6px;
  background: #fff;
  -webkit-box-shadow: 0 0 8px #cdcdcd;
  -moz-box-shadow: 0 0 8px #cdcdcd;
  box-shadow: 0 0 8px #cdcdcd;
  z-index: 10;
  margin-top: 10px;
}
.media-center article .wechat-icon .wechat-popup img {
  margin-top: 0 !important;
}
.media-center article img {
  margin-top: 30px !important;
}
.media-center article img:hover {
  opacity: 0.8;
  outline: none;
}
.media-center article .description {
  padding-top: 30px;
  padding-bottom: 15px;
}
.media-center article .back-to-media {
  padding-top: 30px;
  padding-bottom: 30px;
}
.media-center .media-filters {
  padding-top: 40px;
}
.media-center .media-filters h2 {
  font-size: 22px;
  font-weight: bold;
  margin: 20px 0px;
  text-transform: none;
  color: #878787;
  text-align: left;
}
.media-center .media-filters .checkbox-wrapper {
  padding: 0;
}
@media (max-width: 767px) {
  .media-center .media-filters .checkbox-wrapper {
    font-size: 14px;
  }
}
.media-center .media-filters .checkbox-wrapper input[type="checkbox"] {
  display: none;
}
.media-center .media-filters .checkbox-wrapper input[type="checkbox"] + label span {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAQAAAD8mq+EAAAAXUlEQVR4Ae3UtwGAMAwF0SMzgTyAFrDs/XejU0nO8H792+NSHUokTy6idDjoiQQqplUEIj1OEeYTFBepmK/EcJll8n/9r//1idcNldjQpp6IzCyieBH9PL/DPRcaAOTeEe13QR3oAAAAAElFTkSuQmCC") bottom left no-repeat;
  width: 29px;
  height: 29px;
  display: inline-block;
  position: absolute;
  top: -2px;
  left: 0;
}
@media (max-width: 767px) {
  .media-center .media-filters .checkbox-wrapper input[type="checkbox"] + label span {
    top: -5px;
  }
}
.media-center .media-filters .checkbox-wrapper input[type="checkbox"]:checked + label span {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAQAAAD8mq+EAAAAqklEQVR4AcXUORXDMBRE0Zc9ZSoZgAj8HBMIFDMJhEAwJEMJgyzVdHPk3e+3uqWGTbuQCeriBZkLoK4EFQfKHagIrqhMon+JjAoO9G/PHVUzrHo1GnS8xtDgzfd/7UAq+D/C0CLswNOgo7HwZqkeNg56qoc0Blra8tU9DTRUWCfoqceCZSosSE8qLNiXCgv2p+ohOOenm7YS07fpSpB6LmLSIgr33+ErG/YDXpZrEcyhezcAAAAASUVORK5CYII=") bottom left no-repeat;
}
.media-center .media-filters .checkbox-wrapper input[type="checkbox"] + label {
  padding-left: 35px;
  font-weight: 700;
  line-height: 17px;
}
.media-center .media-filters .checkbox + .checkbox {
  margin-top: 10px;
}
.media-contacts {
  padding: 0;
}
.media-contacts h2 {
  font-size: 22px;
  margin-top: 10px;
  margin-bottom: 40px;
  font-weight: bold;
}
.media-contacts h3 {
  font-size: 22px;
  font-weight: bold;
}
.media-contacts .contact-cathegory {
  width: 80px;
  float: left;
  font-weight: bold;
}
.media-contacts .contact-value {
  margin-left: 80px;
  margin-bottom: 40px;
}
.map {
  position: relative;
  padding: 0;
}
.map .map-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  z-index: 40;
}
.map .map-overlay .map-select,
.map .map-overlay button {
  width: 80%;
  margin: 0 auto;
}
.map .map-overlay .map-select:first-child,
.map .map-overlay button:first-child {
  margin-top: 30px;
}
.map .map-overlay select,
.map .map-overlay button {
  padding: 10px;
}
.map .map-overlay button {
  background: #ff1f20;
  text-align: center;
}
.map .infoBox > img {
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}
.map .infoBox > img:hover {
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.map .btn-gps {
  position: absolute;
  bottom: 20px;
  right: 20px;
  z-index: 9;
  cursor: pointer;
}
.map .btn-touch {
  position: absolute;
  bottom: 20px;
  right: 20px;
  padding: 0;
  width: 50px;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
  z-index: 9;
  cursor: pointer;
  padding: 4px;
}
.map .btn-touch.active {
  background: #313131;
}
.map .btn-search {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 35;
  cursor: pointer;
  background: #494949;
  border: none;
  padding: 4px;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
}
.map .btn-zoom {
  background: #313131;
  left: 20px;
  width: 35px;
  height: 35px;
  position: absolute;
  line-height: 35px;
  padding: 0;
  z-index: 9;
  cursor: pointer;
  font-size: 21px;
  font-weight: 600;
  color: white;
}
.map .btn-zoom.btn-zoom-in {
  bottom: 65px;
}
.map .btn-zoom.btn-zoom-out {
  bottom: 20px;
}
.map .submit {
  background: #494949;
  color: #fff;
  text-align: center;
  display: inline-block;
  width: 70px;
  height: 48px;
  vertical-align: middle;
  padding-top: 15px;
  cursor: default;
}
.map .form {
  background: #fff;
  padding: 40px;
  position: absolute;
  top: 68px;
  left: 20px;
  max-width: 680px;
  display: none;
}
@media (max-width: 992px) {
  .map .form {
    top: 20px;
    right: 20px;
    max-width: 100%;
    z-index: 100;
    zoom: 0.66;
  }
}
.map .form .section {
  color: #fe0000;
  font-size: 22px;
}
.map .form .row {
  position: relative;
  padding-top: 0;
}
.map .form .close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  z-index: 100;
  cursor: pointer;
}
.map .form .btn.btn-smaller {
  position: relative;
  top: 26px;
  padding: 9px 30px;
}
.map .map-info-box {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 35;
  width: 100%;
  height: 0;
}
.map .map-info-box .submit {
  padding-top: 10px;
}
@media (max-width: 531px) {
  .map .map-info-box .submit {
    font-size: 67%;
    padding-top: 15px;
  }
}
.map .map-info-box #map-top-controls {
  position: relative;
  left: 0;
  top: 20px;
  width: 100%;
  z-index: 10;
}
.map .map-info-box #map-top-controls .search-box {
  position: relative;
  float: left;
  width: 380px;
  height: 48px;
  left: 20px;
}
.map .map-info-box #map-top-controls .search-box .form-group .search-input {
  height: 48px;
}
.map .map-info-box #map-top-controls .search-box .form-group .search-input input {
  border: none;
  float: right;
  height: 48px;
  width: 330px;
  border-radius: 0;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
  -webkit-border-top-right-radius: 4px;
  -webkit-background-clip: padding-box;
  -moz-border-radius-topright: 4px;
  -moz-background-clip: padding;
  border-top-right-radius: 4px;
  background-clip: padding-box;
}
.map .map-info-box #map-top-controls .search-box .form-group .search-input .submit-maps {
  display: block;
  width: 50px;
  height: 48px;
  float: left;
  background: #313131 url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgYGBggGBggMCAcIDA4KCAgKDhANDQ4NDRARDAwMDAwMEQwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/2wBDAQkICAkKCQsJCQsOCw0LDhEODg4OEREMDAwMDBERDAwMDAwMEQwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAApACkDASIAAhEBAxEB/8QAGgABAAMBAQEAAAAAAAAAAAAAAAMFBgIBBP/EACwQAAICAgECAwYHAAAAAAAAAAIDAQQABREGEhMUISIxMkJSYQcjU3KRkvD/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AxGdLWxxitQExhTwIDElMz9ojOc29++XQ9RGm1ECveOUD9psuIlq/FHvGqiZ58PsCfzS+bAzNjQb2orzFrV20Jj18VqGgH9iGIyuy5qdW9S0rEWU7SzLOeZhjCYBfYgZJAX8ZZdQIpbfT1+rNegKjCbNTa1FRwsbHHiA5Y/KDh+X6sDKYxjAZq/xASTt3G8V7VLcKVarNj1j4BBi+frWY9pDmUy/0/U50KZanY1F7TUGXf5N3Iys595ocPtqKcCgzWSudZ0CY2fZduboMqqn0nwawl3O4+kjPsjPA3HRNQvMVNC+w+PUFXLPcgZ+4rESZ+0pz7w2tXrxY6zcyqlulcjqLoD4aCGfhpOGPgH9E/wDMDC4ye7Sta602jdUSbKCkGqL3xMZBgMYxgMYxgSPsPtNJ9lpucXHcxhSZTxHbHJFzPpEcZHjGB//Z") center;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
  -webkit-border-top-left-radius: 4px;
  -webkit-background-clip: padding-box;
  -moz-border-radius-topleft: 4px;
  -moz-background-clip: padding;
  border-top-left-radius: 4px;
  background-clip: padding-box;
}
.map .map-info-box #map-top-controls #type-selector {
  float: right;
  right: 20px;
  position: relative;
  min-height: 48px;
  height: auto;
  background: #fff;
  top: 0px;
  -webkit-border-radius: 4px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 4px;
  -moz-background-clip: padding;
  border-radius: 4px;
  background-clip: padding-box;
  overflow: hidden;
}
.map .map-info-box #map-top-controls #type-selector .form-group {
  margin: 0;
  background: #fff;
}
.map .map-info-box #map-top-controls #type-selector .form-group .submit {
  background: #494949;
  color: #fff;
  text-align: center;
  display: inline-table;
  width: auto;
  height: 48px;
  vertical-align: middle;
  padding: 5px;
}
.map .map-info-box #map-top-controls #type-selector .form-group .submit > span {
  display: table-cell;
  vertical-align: middle;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox {
  display: inline-block;
  height: 48px;
  vertical-align: middle;
  margin: 0;
  padding: 12px 8px 0;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox label {
  padding: 0;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox label .checkbox-item {
  -webkit-border-radius: 4px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 4px;
  -moz-background-clip: padding;
  border-radius: 4px;
  background-clip: padding-box;
  border: 1px solid #494949;
  width: 15px;
  height: 15px;
  display: block;
  float: left;
  vertical-align: text-bottom;
  margin-right: 5px;
  top: 6px;
  position: relative;
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAQAAAD8mq+EAAAAqklEQVR4AcXUORXDMBRE0Zc9ZSoZgAj8HBMIFDMJhEAwJEMJgyzVdHPk3e+3uqWGTbuQCeriBZkLoK4EFQfKHagIrqhMon+JjAoO9G/PHVUzrHo1GnS8xtDgzfd/7UAq+D/C0CLswNOgo7HwZqkeNg56qoc0Blra8tU9DTRUWCfoqceCZSosSE8qLNiXCgv2p+ohOOenm7YS07fpSpB6LmLSIgr33+ErG/YDXpZrEcyhezcAAAAASUVORK5CYII=") no-repeat 50% 50%;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox label .checkbox-item.active {
  background: none;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox label span {
  position: relative;
  top: 2px;
  display: block;
  float: left;
  white-space: nowrap;
}
.map .map-info-box #map-top-controls #type-selector .form-group .checkbox label:hover {
  zoom: 1;
  filter: alpha(opacity=70);
  -webkit-opacity: 0.7;
  -moz-opacity: 0.7;
  opacity: 0.7;
}
.map .map-info-box #markers-list {
  display: none;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}
.map .map-info-box #markers-list .result-number {
  background: #494949;
  height: 50px;
  color: #fff;
  width: 78%;
  max-width: 380px;
  left: 20px;
  top: 20px;
  z-index: 5;
  position: absolute;
  text-align: center;
  font-size: 16px;
  font-weight: bold;
  padding-top: 14px;
  cursor: default;
  line-height: 22px;
  zoom: 1;
  filter: alpha(opacity=65);
  -webkit-opacity: 0.65;
  -moz-opacity: 0.65;
  opacity: 0.65;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}
@media (max-width: 992px) {
  .map .map-info-box #markers-list .result-number {
    right: 20px;
    max-width: 100%;
    z-index: 100;
    left: 0;
    top: 20px;
  }
}
@media (max-width: 531px) {
  .map .map-info-box #markers-list .result-number {
    width: 64%;
    font-size: 67%;
  }
}
.map .map-info-box #markers-list .result-number i {
  width: 15px;
  height: 9px;
  margin-left: 8px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAJCAQAAABHhr7cAAAAbUlEQVQYGXXBvQ1BAQAGwG8DnUJjBEEnoiNYQ6lkGoVC1ILQqaxhBTM4eRLy/N3FyCQ/qJmrxxnjfLHGLHpuGOaNFY4qSTQUBnmxxCZPmgr9PFhilzIthW5igX0+aeNqi0N+0VE45R9TF9WU3AHomlY2uYHGfwAAAABJRU5ErkJggg==") no-repeat;
  position: relative;
  top: 7px;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
  display: none;
}
@media (max-width: 531px) {
  .map .map-info-box #markers-list .result-number i {
    margin-left: 0;
  }
}
.map .map-info-box #markers-list .result-number.can-open {
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  cursor: pointer;
}
.map .map-info-box #markers-list .result-number.can-open i {
  display: inline-block;
}
.map .map-info-box #markers-list .result-number.can-open:active,
.map .map-info-box #markers-list .result-number.can-open :focus {
  background: #313131;
}
.map .map-info-box #markers-list .result-number.can-open:hover {
  background: #7c7d7c;
}
.map .map-info-box #markers-list .result-number.active i {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.map .map-info-box #markers-list .maps-div-scroll-wrap {
  height: 0px;
  overflow: hidden;
  width: 380px;
  display: block!important;
  top: 70px;
  position: absolute;
  left: 20px;
  -webkit-transition: 0.3s all;
  -moz-transition: 0.3s all;
  -o-transition: 0.3s all;
  transition: 0.3s all;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap.active {
  height: 324px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll {
  background: #fff;
  width: 100%;
  height: auto;
  max-height: 100%;
  -webkit-box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1) inset;
  z-index: 5;
  overflow-y: scroll;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker {
  width: 100%;
  border-bottom: 1px solid #c9c9c9;
  display: table;
  cursor: pointer;
  position: relative;
  padding: 0 20px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker span {
  position: absolute;
  top: 20px;
  right: 15px;
  color: #fe0000;
  font-weight: bold;
  font-size: 14px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .icon {
  display: table-cell;
  vertical-align: middle;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .icon img {
  margin-left: 25px;
  margin-right: 25px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .desc {
  display: table-cell;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .desc .name {
  font-weight: bold;
  color: #fe0000;
  margin-bottom: 0;
  padding-top: 19px;
  font-size: 16px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .desc .address {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  width: 260px;
  font-size: 15px;
  color: #c9c9c9;
  font-weight: lighter;
  margin-bottom: 18px;
}
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker:hover span,
.map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker:hover .desc {
  zoom: 1;
  filter: alpha(opacity=70);
  -webkit-opacity: 0.7;
  -moz-opacity: 0.7;
  opacity: 0.7;
}
.map .map-info-box #markers-list.open {
  display: block;
  height: auto;
}
.map #map-overlay,
.map #map-loader {
  display: none;
  position: absolute;
  width: 100%;
  height: 100%;
  background: transparent;
  z-index: 100;
}
.map #map-canvas {
  height: 550px;
  width: 100%;
  background-image: url('../img/map-placehold.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.map #map-canvas img {
  max-width: inherit;
}
.map .form-group {
  text-align: center;
}
.map .form-group .map-select {
  display: inline-block;
  margin-right: 10px;
}
@media (max-width: 991px) {
  .map .form-group .map-select {
    margin-right: 0;
  }
}
.map .form-group .map-select select {
  width: 100%;
  max-width: 600px;
}
.map #map-loader {
  z-index: 99;
  background-color: rgba(0, 0, 0, 0.3);
  background-image: url('../img/ajax-loader.gif');
  background-position: center;
  background-repeat: no-repeat;
}
.map .firstHeading {
  padding-right: 30px;
  text-align: left;
}
.map .btn-search.show-btn {
  display: none;
}
.map .BMap_top + div div,
.map .BMap_bottom + div div {
  left: -7px !important;
}
@media (max-width: 992px) {
  .map .map-info-box {
    padding-right: 20px;
    padding-left: 20px;
  }
  .map .map-info-box .submit {
    position: absolute;
    right: 0;
    top: 0;
    -webkit-border-radius: 3px;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 3px;
    -moz-background-clip: padding;
    border-radius: 3px;
    background-clip: padding-box;
    cursor: pointer;
    -webkit-transition: 0.3s all;
    -moz-transition: 0.3s all;
    -o-transition: 0.3s all;
    transition: 0.3s all;
    width: 90px;
  }
  .map .map-info-box .submit.active {
    background: #fff;
    color: #494949;
    height: 55px;
  }
  .map .map-info-box #map-top-controls {
    z-index: 99;
    position: relative;
  }
  .map .map-info-box #map-top-controls #type-selector {
    width: 100%;
    right: 0;
    top: 48px;
  }
  .map .map-info-box #map-top-controls .search-box {
    left: 0;
    right: 0;
    width: 100%;
  }
  .map .map-info-box #map-top-controls .search-box .form-group .search-input {
    position: relative;
  }
  .map .map-info-box #map-top-controls .search-box .form-group .search-input input {
    width: 100%;
    padding-left: 60px;
  }
  .map .map-info-box #map-top-controls .search-box .form-group .search-input .submit-maps {
    position: absolute;
    left: 0;
    top: 0;
  }
  .map .map-info-box #markers-list {
    position: relative;
    z-index: 50;
  }
  .map .map-info-box #markers-list .maps-div-scroll-wrap {
    top: 70px;
    width: 100%;
    left: 0;
  }
  .map .map-info-box #map-top-controls .search-box .form-group .search-input {
    padding-right: 97px;
  }
  .map .map-info-box #map-top-controls #type-selector {
    width: 100%;
    right: 0;
    overflow: visible;
    min-height: 0;
    height: 0;
  }
  .map .map-info-box #map-top-controls #type-selector > .form-group .checkbox {
    display: none;
    width: 100%;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }
  .map .map-info-box #map-top-controls #type-selector > .form-group .checkbox.first {
    border: none;
  }
}
@media (max-width: 768px) {
  .map .map-select {
    display: block;
    width: 50%;
  }
  .map .map-select select {
    width: 100%;
  }
  .map .map-select.town-select {
    margin-top: 10px;
  }
  .map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .icon img {
    margin-left: 5px;
    margin-right: 15px;
  }
  .map .map-info-box #markers-list .maps-div-scroll-wrap .maps-div-scroll .map-marker .desc .address {
    width: 220px;
  }
}
.pos-loan {
  padding-top: 0;
  padding-bottom: 0;
  background: #ffffff;
}
.pos-loan h1 {
  color: #404040;
  font-size: 24px;
  line-height: 32px;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  margin: 0;
}
.pos-loan h2 {
  color: #000000;
  font-size: 18px;
  line-height: 19px;
  font-weight: bold;
  margin-top: 30px;
  margin-bottom: 6px;
}
.pos-loan p {
  line-height: 15px;
  font-size: 14px;
  margin-bottom: 30px;
}
.pos-loan .pos-loan-title {
  padding-top: 50px;
}
.pos-loan .category {
  -webkit-box-shadow: 0 1px 1px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px 0px rgba(0, 0, 0, 0.1);
}
.pos-loan .img-wrapper {
  overflow: hidden;
  padding-left: 0;
  padding-right: 30px;
  margin-bottom: 50px;
  position: absolute;
  height: 60%;
}
.pos-loan .img-wrapper img {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  max-width: 40%;
  max-height: 100%;
  margin: auto;
}
@media (max-width: 767px) {
  .pos-loan .img-wrapper {
    margin-top: 10px;
    padding-right: 0;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .pos-loan .img-wrapper {
    padding-right: 10px;
  }
}
.pos-loan .call-to-action-box {
  padding: 22px 0;
  background: #ff0000;
  color: #ffffff;
  text-align: center;
  position: relative;
  font-weight: bold;
  font-size: 18px;
  line-height: 19px;
}
.pos-loan .call-to-action-box:before {
  content: '';
  display: block;
  position: absolute;
  left: 50%;
  bottom: -9px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 12px 0 12px;
  border-color: #ff0000 transparent transparent transparent;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.pos-loan .call-to-action-box .doodle {
  position: absolute;
  width: 100px;
  z-index: 5;
  right: 50%;
  -webkit-transform: translateX(320%);
  -moz-transform: translateX(320%);
  -o-transform: translateX(320%);
  -ms-transform: translateX(320%);
  transform: translateX(320%);
  bottom: -30px;
}
@media (max-width: 767px) {
  .pos-loan .call-to-action-box .doodle {
    width: 80px;
    -webkit-transform: translateX(180%);
    -moz-transform: translateX(180%);
    -o-transform: translateX(180%);
    -ms-transform: translateX(180%);
    transform: translateX(180%);
  }
}
.pos-loan .see-more {
  text-align: center;
  margin: 20px;
}
.pos-loan .see-more a {
  color: #000;
  text-transform: uppercase;
  text-decoration: underline;
}
.pos-loan .see-more a:hover {
  color: #666;
}
.pos-loan .loan-process {
  padding-bottom: 20px;
}
@media (max-width: 767px) {
  .pos-loan .loan-process .carousel-container {
    height: 450px;
  }
}
@media (max-width: 430px) {
  .pos-loan .loan-process .carousel-container {
    height: 415px;
  }
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
  background: transparent;
}
@media (max-width: 767px) {
  .pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
    height: 450px;
  }
}
@media (max-width: 430px) {
  .pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content {
    height: 415px;
  }
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content h2.title {
  position: relative;
  top: 0;
  text-align: left;
  margin-top: 60px;
  font-weight: 700;
  padding-right: 15px;
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .content-wrapper {
  text-align: left;
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .content-wrapper h3 {
  color: #ff0000;
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .content-wrapper p {
  color: #4a4c4e;
  padding-right: 15px;
}
.pos-loan .loan-process .carousel-container .swiper-wrapper .swiper-slide .swiper-slide-content .img-wrapper {
  width: 50%;
  -webkit-border-radius: 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0;
  -moz-background-clip: padding;
  border-radius: 0;
  background-clip: padding-box;
}
.pos-loan .loan-process .carousel-container .swiper-pagination .swiper-pagination-switch {
  border-color: #7c7d7c;
}
.pos-loan .loan-process .carousel-container .swiper-pagination .swiper-pagination-switch.swiper-active-switch {
  background: #ff0000;
  border-color: #ff0000;
}
.pos-loan .commodity-split {
  border: 1px solid #dadada;
  border-width: 0 0 1px 0;
  margin-bottom: 1px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .pos-loan .commodity-split {
    border-width: 0 1px 1px 0;
  }
  .pos-loan .commodity-split:nth-child(2n+2) {
    border-right: none;
  }
}
@media (min-width: 1200px) {
  .pos-loan .commodity-split {
    border-width: 0 1px 1px 0;
  }
  .pos-loan .commodity-split:nth-child(3n+3) {
    border-right: none;
  }
}
.pos-loan .commodity-item {
  background: #ffffff;
  margin-bottom: 1px;
  position: relative;
  top: -1px;
  overflow: hidden;
}
.pos-loan .commodity-item .commodity-wrapper {
  padding-top: 20px;
}
@media (min-width: 991px) {
  .pos-loan .commodity-item .commodity-wrapper {
    position: static;
  }
}
@media (max-width: 767px) {
  .pos-loan .commodity-item .commodity-wrapper {
    padding: 20px 0 0;
  }
}
.pos-loan .commodity-item .commodity-desc {
  font-size: 24px;
  margin-bottom: 50px;
}
@media (max-width: 480px) {
  .pos-loan .commodity-item .commodity-desc {
    font-size: 20px;
  }
}
.pos-loan .commodity-item .commodity-desc .starts-on {
  color: #aaaaaa;
  font-size: 14px;
  margin-top: 10px;
}
.pos-loan .commodity-item .commodity-desc .starts-on span {
  color: #33d000;
  font-weight: bold;
}
.pos-loan .commodity-item .commodity-desc a {
  clear: left;
  float: left;
  color: #ff0000;
  font-size: 20px;
  font-weight: 700;
  margin-top: 40px;
  text-decoration: underline;
}
.pos-loan .commodity-item .commodity-desc a:hover {
  text-decoration: none;
}
.pos-loan .commodity-item .commodity-desc a:active {
  text-decoration: none;
}
.pos-loan .commodity-item .commodity-desc a:visited {
  text-decoration: underline;
}
.pos-loan .commodity-item img {
  max-width: 100%;
}
.pos-loan .commodity-item .table-wrapper {
  position: relative;
}
@media (min-width: 991px) {
  .pos-loan .commodity-item .table-wrapper {
    position: inherit;
  }
}
.pos-loan .commodity-item .table-wrapper .commodity-pricing {
  width: 100%;
  text-align: center;
  position: absolute;
  bottom: 10px;
  left: 0;
  background: #ffffff;
  border-spacing: 0;
  border-collapse: separate;
  border-radius: 4px;
  border: 1px solid #e7e7e7;
  table-layout: fixed;
}
@media (max-width: 991px) {
  .pos-loan .commodity-item .table-wrapper .commodity-pricing {
    position: static;
    margin-bottom: 10px;
  }
}
.pos-loan .commodity-item .table-wrapper .commodity-pricing tr td {
  height: 55px;
  font-size: 12px;
  line-height: 11px;
  border-right: 1px solid #e7e7e7;
  padding: 5px;
  font-weight: 600;
}
@media (max-width: 767px) {
  .pos-loan .commodity-item .table-wrapper .commodity-pricing tr td {
    font-size: 11px;
  }
}
.pos-loan .commodity-item .table-wrapper .commodity-pricing tr td span {
  font-weight: bold;
  color: #ff1f20;
  display: block;
  text-align: center;
  line-height: 20px;
  font-size: 14px;
}
.pos-loan .commodity-item .table-wrapper .commodity-pricing tr td:last-child {
  border: none;
}
section.faq .page-heading {
  background-position: center 29%;
}
section.faq h2 {
  font-size: 18px;
  font-weight: 700;
  color: #b0b0b0;
  text-align: center;
  font-weight: bold;
  margin: 15px 0 15px;
}
section.faq .back-faq-wrapper {
  margin-top: 30px;
  position: relative;
}
@media (min-width: 768px) {
  section.faq .back-faq-wrapper a {
    left: -8px;
    position: absolute;
    top: 0px;
  }
}
section.faq .contact-faq {
  text-align: center;
}
section.faq .contact-faq h3 {
  margin-bottom: 23px;
  font-size: 15px;
  margin-top: 30px;
  font-weight: 700;
}
section.faq a.link-with-arrow-left {
  display: block;
  font-weight: bold;
  margin: -10px 0 25px;
  text-transform: uppercase;
}
section.faq a.link-with-arrow-left:before {
  top: 1px;
  font-size: 28px;
  font-weight: bold;
  position: relative;
  left: -5px;
  text-decoration: none !important;
  display: inline-block;
  width: auto;
  height: auto;
}
section.faq a.link-with-arrow-left:hover:before {
  left: -15px;
  text-decoration: none;
}
section.faq .detail {
  padding: 40px 0;
}
section.faq .doodle {
  position: absolute;
  right: 20px;
  top: -20px;
  width: 110px;
}
@media (max-width: 767px) {
  section.faq .doodle {
    right: 20px;
    top: -10px;
    width: 80px;
  }
}
section.faq .pboc {
  width: auto;
  height: 40px!important;
  vertical-align: middle;
  margin: 20px 0;
}
.faq-categories ul.faq-list {
  list-style-type: none;
  list-style-image: none;
  padding: 0;
  margin: 0 -15px;
}
.faq-categories ul.faq-list > li {
  padding-left: 45px;
  position: relative;
  padding-right: 30px;
  border: 1px solid #f0f1f1;
  border-width: 0 0 1px 0;
  -webkit-background-size: 16px;
  -moz-background-size: 16px;
  background-size: 16px;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
.faq-categories ul.faq-list > li h2 {
  margin: 0;
}
.faq-categories ul.faq-list > li:before {
  content: '';
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAQAAAC1p96yAAABG0lEQVR4AZ2VqZLGIBCEWyIjI5FIJBKJjEQikUjkvvke+XN1AUNqu02O+Th6UgSCFPRuBVEtZhFR8XW5IsJCvUE9gU9XeHkIjUJA6wI9gq2MXrZv4YKEhDofQDfgMyqDBH6vOTCeYetE5DjGZ8XGsJRNW7XwsoXmRKpcsCvQw/jYkkOiXhuqDPuzptdpBxTycZ9xiddJS6dgzGOhlXFevp5+Z+sFr237vAj7Jjp6K+OmaZyASzMviP0KO8TVY8+1W2Gl6Ha1reXoMMQD/O4gTxAHLzPS7jx4H+Vj4tLs2Cj/wAsuGRmffxPbHJfOBIXcGV/vNp1QFSAMQBZgHiC9gBPDLIcqoBXuzW+qdBvlofBSKxwC0u4AhxVd/QCAVh3whec3DQAAAABJRU5ErkJggg==") center center no-repeat;
  background-size: 100%;
  position: absolute;
  margin: auto;
  left: 17px;
  top: 0;
  bottom: 0;
  width: 16px;
}
.faq-categories ul.faq-list > li:after {
  content: ' \203A';
  position: absolute;
  top: -4px;
  bottom: 0;
  right: 15px;
  margin: auto;
  line-height: 62px;
  font-size: 32px;
  color: #ff1f20;
}
.faq-categories ul.faq-list > li:hover:before {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAMAAAAocOYLAAAAM1BMVEUAAAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AAD/AADpjjcQAAAAEHRSTlMAEEBgr+9/379Qn3Agj88wflPAhQAAAOhJREFUeF51k1sWwyAIRAMqYowm+19tE4VWNJ0fj1yUwcdmBIgI27vA+XA9Ct7BSqlBUaApA+NlFXHE7lrl3nBkDksCKuy+EstcSoCs2L+esrjsgV3w5EdDh1Q2HfkePG5eOvetVGbqHjovN9fOGTao91hbBXHctheF5NsgXArgfHDng89vi2QxqT+dWp60P8vt6sMPATdyaLWHm3bW34O1Yb2CkRciKtMCP/DKzHXAXrya/ec3Ev/y2OZp5fY09oXbFwFVeULEpLjCNieoFKuAF8yCRTkYGvL6wX59Rnr9pGcuzFzyOYAPzgAi2ru847IAAAAASUVORK5CYII=") center center no-repeat;
  background-size: 100%;
  position: absolute;
  margin: auto;
  left: 17px;
  top: 0;
  bottom: 0;
  width: 16px;
}
.faq-categories ul.faq-list > li:hover {
  background: #f0f1f1;
}
.faq-categories ul.faq-list > li:first-child {
  border-width: 1px 0;
}
.faq-categories ul.faq-list > li a {
  display: inline-block;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
  padding: 18px 18px 18px 0;
  text-decoration: none;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
}
.faq-categories ul.faq-list li:nth-child(even) {
  background: #f6f6f6;
}
.faq-categories .pboc {
  display: inline-block;
  width: auto;
  height: 30px!important;
  padding-left: 20px;
  vertical-align: middle;
}
.faq-category {
  margin-top: 60px;
}
@media (max-width: 767px) {
  .faq-category {
    margin-top: 0;
  }
}
.faq-category ul.faqs {
  margin: 0 -15px;
  padding: 0;
  display: block;
}
.faq-category ul.faqs > li {
  margin: 0;
  display: block;
  border-bottom: 1px solid #d9d9d9;
  padding: 0px 40px 0px 15px;
}
.faq-category ul.faqs > li:first-child {
  border-top: 1px solid #d9d9d9;
}
.faq-category ul.faqs > li:focus,
.faq-category ul.faqs > li:hover {
  background: #f0f1f1;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
.faq-category ul.faqs > li .question {
  font-size: 16px !important;
  font-weight: 600;
  line-height: 24px;
  text-align: left;
  cursor: pointer;
  -webkit-transition: color 0.3s;
  transition: color 0.3s;
  color: #000000;
  margin: 0;
  position: relative;
  padding-right: 25px;
  padding-top: 23px;
  padding-bottom: 23px;
}
.faq-category ul.faqs > li .question:after {
  content: '\203A';
  position: absolute;
  display: inline-block;
  -webkit-transform: translateY(-50%) rotate(90deg);
  -moz-transform: translateY(-50%) rotate(90deg);
  -o-transform: translateY(-50%) rotate(90deg);
  -ms-transform: translateY(-50%) rotate(90deg);
  transform: translateY(-50%) rotate(90deg);
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
  transform-origin: bottom;
  font-size: 32px;
  font-weight: 200;
  line-height: 11px;
  top: 40%;
  right: -20px;
  text-indent: 0px;
  color: #ff0000;
}
.faq-category ul.faqs > li .question.active:after {
  -webkit-transform: translateY(-50%) rotate(-90deg);
  -moz-transform: translateY(-50%) rotate(-90deg);
  -o-transform: translateY(-50%) rotate(-90deg);
  -ms-transform: translateY(-50%) rotate(-90deg);
  transform: translateY(-50%) rotate(-90deg);
}
.faq-category ul.faqs > li .answer {
  display: none;
  padding-bottom: 23px;
  font-size: 14px;
}
.faq-category ul.faqs > li .answer p {
  font-size: 14px;
  margin-top: 11px;
  margin-bottom: 0;
}
.about-us {
  padding-top: 0;
  padding-bottom: 0;
}
.about-us .cash-loan {
  position: relative;
}
@media (max-width: 290px) {
  .about-us .col-xs-6 {
    width: 100%;
  }
}
.about-us .about-us-item {
  text-align: center;
  position: relative;
}
.about-us .about-us-item:first-child {
  background: url('../img/about-us/about-us-heading.jpg') 60% 0% no-repeat !important;
  background-size: cover !important;
}
.about-us .about-us-item .about-us-heading {
  padding-bottom: 18px;
}
.about-us .about-us-item .about-us-heading h1,
.about-us .about-us-item .about-us-heading p,
.about-us .about-us-item .about-us-heading a,
.about-us .about-us-item .about-us-heading a:hover,
.about-us .about-us-item .about-us-heading a:active,
.about-us .about-us-item .about-us-heading a::after {
  color: #ffffff !important;
}
.about-us .about-us-item .about-us-heading h2 {
  margin-top: 50px !important;
}
.about-us .about-us-item .about-us-heading p {
  width: 70%;
  margin: auto;
  display: block;
}
.about-us .about-us-item.odd {
  background: #d8f1fd;
}
.about-us .about-us-item.even {
  background: #ffffff;
}
.about-us .about-us-item.about-us-item {
  padding: 40px 0;
}
.about-us .about-us-item.about-us-item h2 {
  color: #ff1f20;
  font-size: 20px;
  font-weight: bold;
  margin-top: 40px;
  margin-bottom: 40px;
}
@media (max-width: 600px) {
  .about-us .about-us-item.about-us-item h2 {
    font-size: 30px;
  }
}
@media (max-width: 530px) {
  .about-us .about-us-item.about-us-item h2 {
    font-size: 26px;
  }
}
@media (max-width: 476px) {
  .about-us .about-us-item.about-us-item h2 {
    font-size: 22px;
    margin-bottom: 20px;
  }
}
.about-us .about-us-item.about-us-item a,
.about-us .about-us-item.about-us-item a:visited {
  color: #ff1f20;
  text-transform: uppercase;
  text-decoration: underline;
  font-size: 14px;
  font-weight: 700;
}
.about-us .about-us-item.about-us-item a:after,
.about-us .about-us-item.about-us-item a:visited:after {
  content: '\00A0\203A';
  color: #ff1f20;
}
.about-us .about-us-item.about-us-item a:hover,
.about-us .about-us-item.about-us-item a:visited:hover,
.about-us .about-us-item.about-us-item a:active,
.about-us .about-us-item.about-us-item a:visited:active {
  text-decoration: none;
  color: #ff1f20;
}
.about-us .about-us-item.about-us-item p {
  color: #414042;
  margin-top: 40px;
  margin-bottom: 40px;
  font-size: 16px;
}
@media (max-width: 476px) {
  .about-us .about-us-item.about-us-item p {
    margin-bottom: 20px;
  }
}
.about-us .about-us-item.about-us-item .section-img {
  margin-left: -15px;
  margin-right: -15px;
}
.about-us .about-us-item.about-us-item.lending {
  padding: 127px 0 !important;
  background: url('../img/about-us/responsible-lending.jpg') !important;
  background-position: 50% 90% !important;
  background-size: cover !important;
}
.about-us .about-us-item.about-us-item.lending p {
  text-align: center;
  padding: 0 30px;
  color: #ffffff !important;
  margin-bottom: 52px;
}
.about-us .about-us-item.about-us-item.lending a {
  color: #bbb9b9 !important;
  position: relative;
}
.about-us .about-us-item.about-us-item.lending a:after {
  color: #bbb9b9 !important;
}
.about-us .about-us-item.about-us-item.lending h2 {
  margin-top: 0;
  margin-bottom: 40px;
  font-size: 44px;
}
@media (max-width: 600px) {
  .about-us .about-us-item.about-us-item.lending h2 {
    font-size: 40px;
  }
}
@media (max-width: 530px) {
  .about-us .about-us-item.about-us-item.lending h2 {
    font-size: 30px;
  }
}
@media (max-width: 476px) {
  .about-us .about-us-item.about-us-item.lending h2 {
    font-size: 26px;
  }
}
.about-us .prod-loan {
  background-image: url(../img/about-us/white-pattern.jpg) !important;
}
.about-us .wicl {
  background-image: url(../img/about-us/blue-pattern.jpg) !important;
}
.about-us .before-footer {
  margin-top: 35px;
}
.about-us .before-footer .stay-in-touch-headline {
  width: 100%;
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
  margin: 0;
  text-align: center;
  color: #ff1f20;
  margin-bottom: 35px;
}
.about-us .before-footer .contact-link {
  padding: 30px;
}
.about-us .before-footer .contact-link a {
  color: #ff0000;
  text-transform: uppercase;
  text-decoration: underline;
  font-size: 26px;
  font-weight: 700;
}
.about-us .before-footer .contact-link a:hover {
  text-decoration: none;
}
@media (max-width: 600px) {
  .about-us .before-footer .contact-link a {
    font-size: 22px;
  }
}
@media (max-width: 530px) {
  .about-us .before-footer .contact-link a {
    font-size: 18px;
  }
}
@media (max-width: 476px) {
  .about-us .before-footer .contact-link a {
    font-size: 15px;
  }
}
@media (max-width: 340px) {
  .about-us .before-footer .contact-link a {
    font-size: 11px;
  }
}
.about-us .before-footer .logo-bottom {
  width: 80%;
}
.about-us .before-footer .logo-bottom.eye-logo {
  width: auto;
}
.about-us .before-footer .second-row .logo-bottom {
  margin-top: 30px;
}
.about-us .doodle.heading-1 {
  position: absolute;
  left: -15px;
  top: 0px;
  width: 83px;
}
.about-us .doodle.heading-2 {
  position: absolute;
  top: -100px;
  right: 35%;
  width: 79px;
  z-index: 5;
}
.about-us .doodle.go-for-it {
  position: absolute;
  width: 83px;
  top: -35px;
  left: 40%;
}
@media (min-width: 991px) {
  .about-us .doodle.go-for-it {
    left: 24%;
  }
}
.about-us .doodle.spoiled {
  position: absolute;
  width: 121px;
  left: -20px;
  top: 52px;
}
@media (min-width: 768px) {
  .about-us .logo-bottom {
    width: auto;
    height: auto;
    max-height: 150px;
    max-width: 200px;
  }
  .about-us .logo-bottom.baidu-logo-bottom {
    margin-top: 25px;
  }
}
.about-hc .doodle {
  position: absolute;
}
.about-hc .doodle.chinese-kid {
  margin-top: 2%;
  right: 0;
  width: 18%;
  max-width: 120px;
}
@media (min-width: 768px) {
  .about-hc .doodle.chinese-kid {
    width: 30%;
    max-width: 161px;
  }
}
.about-hc p {
  font-size: 14px;
}
.about-hc h2 {
  color: #fff;
  margin: 0 0 55px;
}
.about-hc h2.first {
  color: #fe0000;
  margin: 33px 0 30px;
}
.about-hc .hc-in-numbers .hc-in-china,
.about-hc .hc-in-numbers .hc-globally {
  padding: 34px 0 45px;
}
.about-hc .hc-in-numbers .hc-in-china {
  background: url("../img/about-us/china-bg.jpg") no-repeat center;
  background-size: cover;
}
.about-hc .hc-in-numbers .hc-in-china .doodle {
  position: absolute;
  top: -70px;
  width: 80px;
  right: 50%;
  transform: translateX(160%);
}
.about-hc .hc-in-numbers .hc-globally {
  padding-bottom: 0;
  text-align: center;
}
.about-hc .hc-in-numbers .hc-globally h2 {
  color: #ff0000;
  font-weight: bold;
}
.about-hc .hc-in-numbers .hc-globally .numbers span.small {
  color: #ff0000;
}
.about-hc .hc-in-numbers .hc-globally .numbers p {
  color: #999999;
  margin-top: 0;
  font-weight: bold;
}
.about-hc .numbers {
  text-align: center;
  color: #fff;
}
.about-hc .numbers span {
  font-size: 55px;
  font-weight: bold;
  line-height: 47px;
}
.about-hc .numbers span.small {
  font-size: 26px;
}
.about-hc .numbers span span {
  font-size: 20px;
}
.about-hc .numbers p {
  color: #fff;
  margin: 5px 0 0;
}
.contact-us {
  text-align: center;
  background: url("../img/cta-bg.png") repeat;
}
.contact-us .page-heading {
  position: relative;
}
.contact-us .doodle {
  position: absolute;
}
.contact-us .doodle.cellphone {
  left: 0px;
  width: 73px;
  bottom: 0;
}
@media (min-width: 768px) {
  .contact-us .doodle.cellphone {
    top: 12px;
    width: 102px;
  }
}
.contact-us .contact-row {
  margin-bottom: 40px;
}
.contact-us p {
  font-weight: bold;
  color: #000000;
}
.contact-us h2 {
  font-weight: bold;
  font-size: 22px;
}
.contact-us .leave-contact {
  margin-top: 20px;
}
@media (max-width: 768px) {
  .contact-us .leave-contact {
    margin-top: 5px;
  }
}
.contact-us .or {
  display: block;
  text-align: center;
  margin-top: 40px;
  margin-bottom: 30px;
}
@media (max-width: 768px) {
  .contact-us .or {
    margin-top: 0px;
  }
}
.contact-us .silver-border {
  background: #fff;
}
.contact-us .phone-number {
  color: #757575;
  font-weight: bold;
}
.contact-us .phone-number i,
.contact-us .mail i,
.contact-us .phone-button i {
  display: inline-block;
  width: 40px;
  height: 40px;
  vertical-align: middle;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABACAQAAAAuJZjHAAAEYklEQVR4Ac2aA3Q0SxCFf3v32bZt27Zt27Zt27b9vt+2bcabF9VznerZ2Y1m0z33KFWVOV/m9FR33Umr+i4W5k5GIlQxjGvo0CrMi42Zhhj1ZYkQMVdiFhLRILqGhtmevkiM3gwN9CYDV+2gXhgS5jJkFGwSK7IpFfpzFduGA/qUeZqb/BM5EVFNY8kwMNOUK9QdGn3SoP5I2xBAz1ag+Sys0Q70Mqh3hwD6veI84MRXYI5BPdg3Zhf+UJh1I7ndqdVcMWv4Bd1bUSbGZK9FVIPp4hP0GgV5Jibbmk8M6qs+Qd9WjDNj84swzqCe6w+0t0JsnaNiIzKm/W/qC3SaQiyTs+YkRNXdE6jZ2dvlqXraoK7rB1T+U1Heqo4M1spjggTVus+18iQ/oHX/vyZ5alK8hqi29QM6TwFSOSo2Y6xzlmrvB3SMIqwR2/AvowoxOsXXW/+DIuyXlVucrxFHd/lr+E8oxGWRTDsGO5DFHONzC71AQd6JZE51MHuxqt/T05aKMjWS+UkzddxDe/+DciZ+zzHxg8OYmb5ToCvtJKXRilBm0IsVqY/dNDVaG4hfwqrxBw5maPSIUJ5pj7jxjjc1Ol53rWAG5mIUiZ0Q1RthgC5MmSJdauLfGNRTw0B9XIFm0EWjq1Cs8Uq2CAF0NeoU6WoTPxpRTWGZEFBfV6AF1hTjOYPan27+QVenRoFesv3U8aC+8u/su/7djia+HDNN5j3vzh6LM990zm4mszkVtlXVj0p7tuVkjmXdQvfTiMHDAdSa3If5FwCnMF1rf2fj5EHb8BsSPxZzAmL0de69insRR1UFMIJYw7T+MtZxcucgRv3jmxXHITF6NWkn0MUZy2JO7jzEaCpbxPTjUiRWg1k9adR3ENVv7mrkVGetVnKak+1AH5P9jCEOahEHJQuaYhSi+sh9xzmICveTGWnN3Wfir//Tg59GHN2ZaHNjbRY47ah1ZMpyP0ZO4Ii/j9Yc6iyalDqBGaf6e5ZIEnU3qnJ3TlagD+Ko1nnOVWzm+KvjnNopbJ0k6omIswDctdqJ55GcujTLtf4s0rDOTxL1XMToNxaL5I+hJBbzC1rHWEPXU+tUvZ7gJMbViNFo1smatr6L+XS+WI677cFcp3IgSxTqqZZxVFbFTrz53xiY4SdOzetbr0gvxGgA7ZNcq66b9xTdYh3pdIPu1oEnEaOLk1yruzrNShjHDs37002H6KfhhPrqSMTRi835NM5miPW5k92t3o6gLuDqph40WFE7QI0GEz2ulEVgZ3AZqSb4h5P1DiMKNav+hkRUzIOs3wgH4W5qENXtmkr8aH2G7YaqflzNevX87oY8QBFiNJ2FCzlbLcoTbstSTeNdLmN/1iSl9voybMtZPMfkrOqZbNAShsUr1CJ5VEURRXnyfVmppabWVXiUMqQJynBzC1vtpDkTGgVZzpPerCFW4SK+JVMPYiXfcCbpEP6/b0vO5wl+YAzz/jPdqplKb97iavZq+PbwJ9K+rRooDuRIAAAAAElFTkSuQmCC") no-repeat center;
  background-size: contain;
  margin: 0 15px 3px -15px;
}
.contact-us .phone-button i {
  display: inline-block;
  width: 30px;
  height: 30px;
  vertical-align: middle;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABACAQAAAAuJZjHAAAEKklEQVR4Ac3YA7QrSRSF4Z3kJncekrFt27Zt27Zt27Zt27ZtO5fBP6yzqrM6eeq86m8xbu7K2RoSRuMY3gP6eZv9KSidmI2v8b3E2EofJuV7Gr3OIKULeV4izjVKFw7FUMG3i9KD8enB+ZxJmINunH4WUFpwLk6F2SWJTcB8zThKA0p04Rxtz54D5hFyCo/tcH5hNHu2wPNgjlN4PIRzsjxMzI9gVlNYDKQPZwZFsBQ1nN+ZWiGxHM5nMg4HgHmDgQqH/XHOl2PIcDuGKxQO1+FsoxiMzscYdlAovIAzn2IxKz04/cyhMPgaZ3w1waYYnlEYVHA61BTnYZhBIeD8phbo5A2c9dVmWQ23TJ++kFNQCNT5T7+aosiVGBZQCPyMU1Qs5uQjDF+TVwh8iDN1bODvST++zRUGD+OsqAaMxX1EHatQOBtnT0XQwRv4fmd9hcPOONcrgi3wPc8UCol5cL5SBI/i1DmevMIiT0/8muM9v5rSgAdx9pGhhNOtBqFWprvlrC2jPjmdDFIaMEX8Hw6+xVlb6cCzceMd1+B8QlFK18D8O7ZJLIrhaqUBo1HG2UOG+zFsoTTgLJxvsVmTyfkdp5e5FR5TUsfZT4b1MHzJ+AqPq3B+ZRwZLsTwCoMVGlNRxblUhk6ex3AvBYXGORgWkWFCvsNwIzmFxVj8gvMJg2WYi24MVw95U8mzAJuxATO0O08bCh5WpobhFgpqgc35BucpZlPSyPIkxI/FbIzvPopqghOI6mcHJY2pKeOUmV4etsf3SnxYsSFxrmCgEhXdnI8YUx52xPcVc8fk8Z/Ee4OplCyux/AkBXnYghqGXraUhwIvYriTN/H9xqpKEkXex3ArOXlYlW5811Cy107EcJVEJ+cRdUyi4cZ0/BqJo0zDlPU9vk9Zm0ESa2D4iKI1gT34HmJsJYcl6W+enEzMi0TV6MbQz5yRfvVjfF8yn5LDJvhupSAPo3ARze2hCEbnTnz97KTksAO+JxlTEazPH8S5m4wakOEgaviuYpCSwn74PmB6RTAFD9LodcZULJbmJ3yvMXa7jmqZddWARbmGbwHo4VG2aNlbT8Lz+F4ln+S12o/vXAbHNtIlDQUKnINvNyWHJfgV38csPIK73o3zspLEdLxH1CWMo+HGnDj9ShZFriPqV/ZjoIYLk1gCVJU8tqdM1LfsSXE4+sMvcN5t16z6JI1+5xRmGoYG4TiqGI5Se5Bla37CmJfZjxnVErNwMr/h+4bRFCOjRDCGjtTWikvAb/S0ntf7+kDfZv6UJDo0tibXzJpLy2piRX2vpTNvtr+wuJwarfTzG7/R3EtMqpGDyTmDMsOjh8PIa2SixDY8zbDo4hzGVxhMzq48QA+t9XI/21DSEGXUVuQ1u+bR9JpOk2gMja6MpKq+1zf6WK/rVT2Z6dZQ+QvcRl0QUsD6PAAAAABJRU5ErkJggg==") no-repeat center;
  background-size: contain;
  margin: 0 10px 3px 0px;
}
.contact-us .phone-button:hover {
  color: #ffffff !important;
}
.contact-us .mail i {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABACAQAAAAuJZjHAAACQklEQVR4Ae3aA+xXURwF8JNtDBlz5mwrThnTf8gcsjXlhlxTtsaTG7Jt17xlvd1Oug/3/e6v3fudnj/v+gEsyzl8xY8exyvOYVlwnpc4jXngm6KAvoW3NIk8oAG6k90LHDttc7QEBUwsiVP0owrGHG5T9LuMzmpCQZgTouu/4a4/Q6ewDZ8JtTDMZ2zPKX+BAmxtUGfnypxpMFsD/4B+pd6P1szJjTknuubjL0wLKMCWBnUhSzlHluKC6Hr32RKwgyp1GUs5Zi5TpjUUYGNeF6p75nW2AGJCATY0qGtZxgmzDNcYzIaANVSoF6NtG1jGAXODMhNBAdbjuWjrRpbPlFneYJ5jPSAFVKg7lJqKuUOZqaAAa/OEUjNlnlZmQijAGgZ1HyunZlbm/uh8J1gDSANVKqO9jrBySuYRZWYF1dMfYZXEzKo/nacqkAKaLic0aSXSkskIKtQdyanCPKDM7KDaWk+xXixmPZ7R3iNjqFC3av9nyTwnTKdQHfgsqaxvMDcJ0xVUqNfY8J/7N+R1mTO4hAp1lU4nrJjrhOkaqvNINvvjfi11XpsLVKhLZGYuyeZJwT1UH8mUqsxFwswTKtRHbI0oyYO3Ps3mDwU42XweT8F0DNU3HO0AgJ0M5kTAD6i+M+rKrvoOyw+ovix8YzBHA15BharvWf2CAhzK98r0Egqw73fqew4APIYC7Mk7vMvegOdQTQEaoAEaoAEaoAEaoP8xdDO7exSbw186nyNAi+aXtyL6ibAsZ3v/W+Zslv0EeSlUtRcBkA4AAAAASUVORK5CYII=") no-repeat center;
  background-size: contain;
}
@media (max-width: 768px) {
  .contact-us .mail {
    margin: 15px 0 35px;
  }
}
@media (min-width: 768px) {
  .contact-us .contact-qr-wrapper {
    height: 200px;
    text-align: center;
  }
  .contact-us .contact-qr-wrapper a {
    display: block;
    margin: 10px auto;
    text-align: center;
    cursor: pointer;
  }
  .contact-us .contact-qr-wrapper .row {
    height: 100%;
  }
  .contact-us .contact-qr-wrapper .row .col-sm-6 {
    height: 100%;
  }
  .contact-us .contact-qr-wrapper .row .col-sm-6 .silver-border {
    height: 100%;
  }
}
.contact-us .qr img {
  margin-top: 40px;
  max-width: 100%;
}
@media (max-width: 768px) {
  .contact-us .qr img {
    margin: 0px 0 5px;
    max-width: 230px;
  }
}
.contact-us .qr.qr-chat img {
  border: 1px solid #7f7f7f;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
}
.contact-us .wechat-contact {
  max-width: 90%;
}
.contact-us .social-logo img {
  max-width: 50%;
  max-height: 50px;
  margin: 15px 20px;
}
.contact-us .hc-offices {
  margin-bottom: -50px;
  background: url("../img/offices-bg.jpg") no-repeat center;
  background-size: cover;
  padding: 31px 0 25px;
  position: relative;
  text-align: center;
}
@media (max-width: 767px) {
  .contact-us .hc-offices {
    background-position: top center;
  }
}
@media (max-width: 480px) {
  .contact-us .hc-offices {
    margin-bottom: -25px;
  }
}
.contact-us .hc-offices:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: 0 auto;
  -webkit-transform: translateY(100%);
  -moz-transform: translateY(100%);
  -o-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 11px 8px 0 8px;
  border-color: #02070d transparent transparent transparent;
  z-index: 5;
}
.contact-us .hc-offices h2 {
  color: #fff;
}
@media (max-width: 768px) {
  .contact-us .hc-offices h2 {
    margin-top: 0px;
    margin-bottom: 0;
  }
}
.contact-us .hc-offices .item {
  text-align: center;
}
.contact-us .hc-offices .item .doodle {
  position: absolute;
  left: 50px;
  top: -14px;
  -webkit-transform: translateX(-160%);
  -moz-transform: translateX(-160%);
  -o-transform: translateX(-160%);
  -ms-transform: translateX(-160%);
  transform: translateX(-160%);
  left: 50%;
}
@media (max-width: 991px) {
  .contact-us .hc-offices .item .doodle {
    max-width: 100%;
  }
}
@media (max-width: 768px) {
  .contact-us .hc-offices .item .doodle {
    width: 71px;
    top: -6px;
  }
}
.contact-us .hc-offices .item img {
  max-width: 100%;
  margin: 30px auto;
}
@media (max-width: 768px) {
  .contact-us .hc-offices .item img {
    margin: 15px auto 9px;
    max-width: 60px;
  }
}
.contact-us .hc-offices .item .name {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 10px;
  color: #fff;
}
.contact-us .hc-offices .item .address {
  font-size: 14px;
  margin-bottom: 10px;
  color: #c3c3c3;
}
@media (max-width: 768px) {
  .contact-us .hc-offices .item .address {
    margin-bottom: 10px;
  }
}
.contact-us .hc-offices .item .contacts {
  color: #fff;
  font-weight: bold;
  font-size: 16px;
  display: block;
  margin: 6px 3px;
}
.contact-us .hc-offices .item .contacts.color-red {
  color: #fe0000;
}
@media (max-width: 768px) {
  .contact-us .hc-offices .item .contacts {
    margin: 0px 3px 8px;
  }
}
.contact-us .main-form {
  padding: 15px 0 50px 0;
}
@media (min-width: 992px) {
  .contact-us .phone-buttons > div:nth-child(even) {
    padding-left: 100px;
    text-align: left;
  }
  .contact-us .phone-buttons > div:nth-child(odd) {
    padding-right: 100px;
    text-align: right;
  }
}
.partners h2 {
  font-size: 28px;
  text-align: center;
  text-transform: uppercase;
  padding-bottom: 15px;
}
.partners .littleHeader {
  text-align: center;
  font-size: 18px;
}
.partners p {
  font-size: 14px;
  text-align: center;
}
#how-to-become-partner {
  padding-top: 25px;
}
#how-to-become-partner h2 {
  font-size: 20px;
  text-align: center;
}
#how-to-become-partner h3 {
  font-size: 18px;
}
#how-to-become-partner p,
#how-to-become-partner ul li,
#how-to-become-partner ol li {
  font-size: 14px;
}
.bulletin-story {
  padding: 24px 0;
}
.bulletin-story .head-info {
  font-size: 12.5px;
  color: #a3a3a3;
  font-weight: bold;
}
.bulletin-story h2 {
  font-weight: bold;
  color: #5b5b5b;
  font-size: 15px;
  margin: 24px 0;
}
.bulletin-story p {
  font-size: 12.5px;
}
.bulletin-story .baidu-video embed {
  width: 100%;
}
.bulletin-story .share-wrapper {
  padding: 18.5px 0;
}
.bulletin-story .share-wrapper .share-header {
  margin-top: 20px;
  margin-bottom: 5px;
  font-weight: bold;
}
.bulletin-story .share-wrapper img {
  margin-top: 0px !important;
}
.bulletin-story .share-wrapper .wechat-icon {
  cursor: pointer;
}
.bulletin-story .share-wrapper .wechat-icon:hover .wechat-popup {
  display: block;
}
.bulletin-story .share-wrapper .wechat-icon .wechat-popup {
  display: none;
  position: absolute;
  width: 295px;
  padding: 6px;
  background: #fff;
  -webkit-box-shadow: 0 0 8px #cdcdcd;
  -moz-box-shadow: 0 0 8px #cdcdcd;
  box-shadow: 0 0 8px #cdcdcd;
  z-index: 10;
  margin-top: 10px;
  font-size: 14px;
}
.bulletin-story .share-wrapper .wechat-icon .wechat-popup img {
  margin-top: 0 !important;
}
.related-stories a {
  text-transform: uppercase;
  position: relative;
}
.related-stories h2 {
  color: #ff1f20;
  text-align: center;
  font-weight: bold;
  margin: 22px 0;
}
.related-stories h2 a {
  text-transform: none;
}
.related-stories p {
  font-size: 12.5px;
  margin: 0;
  padding: 0;
  color: black;
}
.related-stories .body {
  display: table;
  border-top: 1px solid #e5e5e5;
}
.related-stories .left-side {
  float: none;
  display: table-cell;
  padding: 0;
}
.related-stories .left-side img {
  width: 100% !important;
}
.related-stories .right-side {
  float: none;
  display: table-cell;
  text-align: left;
  vertical-align: middle;
  padding-bottom: 15px;
}
.related-stories .right-side p {
  padding: 15px 0;
}
.related-stories .bottom-link {
  padding: 20px 0;
  border: 1px solid #f0f1f1;
  border-width: 1px 0;
}
.related-stories .all-related {
  position: relative;
  font-weight: bold;
}
.related-stories .all-related:after {
  right: -30px;
  top: -1px;
}
.related-stories .all-related:hover:after {
  right: -40px;
}
.related-stories .doodle {
  position: absolute;
}
.related-stories .doodle.yay {
  width: 50px;
  top: 10px;
  left: 15px;
}
.related-stories .article {
  margin-top: 75px;
  margin-bottom: 30px;
}
.related-stories .article h1 {
  text-transform: none;
  font-size: 23px!important;
  line-height: 28px;
}
.related-stories .article h1 a {
  text-transform: none;
}
.related-stories .article .post-inner {
  margin: 0 -15px;
}
.related-stories .article .post-inner img {
  max-width: auto;
  width: 100%;
}
.related-stories .article p {
  margin: 20px 0;
}
.related-stories .article p strong,
.related-stories .article p span {
  font-size: 16px!important;
}
.related-stories .bottom-link {
  background: #f0f1f1;
}
.related-stories .read-more {
  position: relative;
  font-size: 16px;
}
.related-stories .read-more:after {
  right: -25px;
}
.related-stories .read-more:hover:after {
  right: -30px;
}
.fl-link1,
.fl-link2 {
  padding: 0;
}
.fl-link1 a,
.fl-link2 a {
  background-color: #555555;
  background-repeat: no-repeat;
  background-position: center left 30px;
  color: #ffffff;
  display: block;
  width: 100%;
  padding: 27px 78px;
  font-size: 15.5px;
  font-weight: 600;
  -webkit-transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  -o-transition: all ease 0.3s;
  transition: all ease 0.3s;
}
.fl-link1 a:hover,
.fl-link2 a:hover,
.fl-link1 a:focus,
.fl-link2 a:focus {
  text-decoration: none;
  background-color: #7f7f7f;
}
.fl-link1 a:active,
.fl-link2 a:active {
  background-color: #cc0000;
}
@media (max-width: 480px) {
  .fl-link1 a,
  .fl-link2 a {
    background-position: center left 20px;
    padding: 26px 73px;
  }
}
.fl-link1 {
  border-bottom: 1px solid #f0f1f1;
}
.fl-link1 a {
  background-image: url('../img/financial-literacy/download.png');
  background-size: 25px 24px;
}
.fl-link2 a {
  background-image: url('../img/financial-literacy/budget-planner.png');
  background-size: 23px 29px;
}
.vas {
  background-color: #ff1f20;
  height: 55.5px;
}
.vas a {
  color: white;
  padding-left: 55px;
  display: block;
  line-height: 55.5px;
}
.vas a::before {
  content: '';
  width: 100px;
  height: 100px;
  position: absolute;
  left: 18px;
  margin-top: 17.75px;
  background: url('../img/vas-bag.png') no-repeat;
  background-size: 21px 18.5px;
}
.vas a::after {
  content: '';
  width: 100px;
  height: 100px;
  position: absolute;
  right: -73px;
  margin-top: 20.75px;
  background: url('../img/arrow-right.png') no-repeat;
  background-size: 8.5px 14.5px;
}
.testimonials-detail h2 {
  font-size: 18px;
  text-align: left;
  color: #a3a3a3;
  font-weight: bold;
}
.testimonials-detail h3 {
  color: #7f7f7f;
  font-weight: bold;
  text-align: justify;
}
.testimonials-desktop {
  position: relative;
  padding: 0;
  background: url('../img/testimonials-background-red.jpg') center center no-repeat #ff0000;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
@media (max-width: 480px) {
  .testimonials-desktop {
    padding: 0;
    background-size: auto 55%;
  }
}
@media (min-width: 1200px) {
  .testimonials-desktop {
    background-position: center 39%;
  }
}
.testimonials-desktop .doodle {
  position: absolute;
  width: 86px;
  bottom: 70px;
  left: 50%;
  transform: translateX(-170%);
}
.testimonials-desktop .testimonials-header {
  position: absolute;
  left: 0;
  top: 30px;
  width: 100%;
  z-index: 100;
}
.testimonials-desktop .testimonials-header .testimonials-headline {
  width: 100%;
  font-weight: bold;
  color: #ff0000;
  font-size: 22px;
  line-height: 22px;
  margin: 0;
  text-align: center;
  color: #fff;
}
.testimonials-desktop .testimonials-header .testimonials-stories-link {
  display: block;
  float: right;
  width: 40%;
  text-transform: uppercase;
  text-align: right;
  position: relative;
  text-decoration: none;
  color: #333333;
  top: 3px;
  font-weight: bold;
}
@media (max-width: 991px) {
  .testimonials-desktop .testimonials-header .testimonials-stories-link {
    width: auto;
    text-align: center;
    float: none;
    display: inline-block;
    margin: 0 auto;
    position: relative;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 50%;
    margin-top: 5px;
    font-size: 12px;
    line-height: 16px;
  }
}
.testimonials-desktop .testimonials-header .testimonials-stories-link span {
  display: block;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 20px;
  height: 20px;
  margin-left: 0;
  right: -20px;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
}
.testimonials-desktop .testimonials-header .testimonials-stories-link:hover,
.testimonials-desktop .testimonials-header .testimonials-stories-link:active,
.testimonials-desktop .testimonials-header .testimonials-stories-link:focus {
  text-decoration: none;
}
.testimonials-desktop .testimonials-header .testimonials-stories-link:hover span,
.testimonials-desktop .testimonials-header .testimonials-stories-link:active span,
.testimonials-desktop .testimonials-header .testimonials-stories-link:focus span {
  right: -30px;
}
.testimonials-desktop .wrp {
  padding: 190px 0 20px;
}
@media (max-width: 767px) {
  .testimonials-desktop .wrp {
    background-size: auto 80%;
  }
}
.testimonials-desktop .wrp .swiper-slide-content {
  height: 269px;
  position: relative;
}
@media (min-width: 992px) {
  .testimonials-desktop .wrp .swiper-slide-content {
    max-width: 50%;
    margin: 0 auto;
  }
}
@media (max-width: 991px) {
  .testimonials-desktop .wrp .swiper-slide-content {
    max-width: 100%;
    margin: 0 auto;
  }
}
.testimonials-desktop .wrp .swiper-slide-content .step-info {
  width: 100%;
  max-width: 280px;
  margin: 0 auto;
}
.testimonials-desktop .wrp .swiper-slide-content .step-info .testimonial-bubble {
  height: 75px;
  display: table;
  width: 131%;
  background: #fff;
  -webkit-border-radius: 6px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 6px;
  -moz-background-clip: padding;
  border-radius: 6px;
  background-clip: padding-box;
  padding: 8px 25px;
  position: relative;
  left: -39px;
  top: -94px;
}
@media (max-width: 1389px) {
  .testimonials-desktop .wrp .swiper-slide-content .step-info .testimonial-bubble {
    width: 150%;
  }
}
.testimonials-desktop .wrp .swiper-slide-content .step-info .testimonial-bubble .content-wrapper {
  display: table-cell;
  vertical-align: middle;
  line-height: 18px;
  font-size: 12px;
  color: #474430;
}
.testimonials-desktop .wrp .swiper-slide-content .step-info .testimonial-bubble:after {
  content: '';
  position: absolute;
  bottom: 0;
  -webkit-transform: translateY(100%);
  -moz-transform: translateY(100%);
  -o-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  width: 22px;
  height: 24px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAwCAQAAAAvWztUAAACnUlEQVR4AbXXA7AbexxH8fNfxcmzbdu2UbeD2h3Wtm3btt1n27YdZ184c+3VPWN95jffDXm3Xa4+yr7dikXX14f8z3JOgWDmD6fh9C8dzicA7tgOp+mP2xNEBe233s7C8SOcgAsByiu3OipnDt6HDxlAPimQ+d05ObyRECoCQOCJrHHu5s0340GCorTPWjglR3cSQqE0penJ2bAz9MuPlb8ZJLyxTU7AqQ8IoVIugeuz5k7QP/fHi0SFlHOOT39vW9YnXIhGUeUn+X20XTlxFD8ylRJo8y/L6vboX/rgRlAlmUBkiz1629WoVJPA/dw9uax1OP1d0RzVpRCKHbDxZllbNEd1SXiO3Gv97l96olFjKiHre3/wMApAjXcvvS4bt0aPPhWZWlII/THRCpz5DQ+CWhK4Hz1d/9LCG/ENXLXToBB4rYH5hxnfgUYdCVwc/9cCs3R0OSp1JuF96kz9U3N0ZCoKBlIIbr8zGzNDh8cYootG+aKbGfq/ocZokPBw4l/zTNEyBpPxnXdadL/hxzjGOC1QCTQ6N/WWQXq6cRoEGqFBl6c+NkInlpmhix7nccOu0D+rm07tQcFUEm6OH3d16qO66P8/QAELeI9LknVsnv0PFSzhT5wb3l47/vzJYAV3cZzvtF8m1vax9cf9YBUPccqHHWp++0d7IrCUQCPASbsf1r+unk6tQAKruIKPE5tf+O/G6ujMp8hgHZfxcDynftSpun9tX56NjYpWD3Ly4KvDW6us3RqbCVR8nMCpLzVOfVCe1tch7OMybkKcdNFZ3/TP/FX2tjnqBnDidi/Hc0rXS/9amtWL8NizOJSEhp8TOHX2zf+uzhX49EYEDlU0TZATOXX+rf8uyv7755k4mEAp4jl54fl/XkZpeb7vVhhnzXOlAAAAAElFTkSuQmCC") no-repeat;
  background-size: contain;
  left: 80px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-profile-photo {
  max-width: 120px;
  max-height: 120px;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  top: 38px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  margin-left: 0px;
  border: 3px solid #fff;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-name-wrapper {
  text-align: center;
  font-weight: 600;
  width: 100%;
  max-width: 150px;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  margin-left: 0px;
  bottom: 68px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-name-wrapper > span {
  display: block;
  width: 100%;
  font-family: OpenSans;
  line-height: 18px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-name-wrapper > span.testimonial-name {
  color: #fff;
  font-weight: 700;
  font-size: 14px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-name-wrapper > span.testimonial-city {
  color: #fff;
  font-weight: 400;
  font-size: 13px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  text-transform: uppercase;
  bottom: 115px;
  color: #fff;
  text-decoration: underline;
  font-size: 14px;
  width: 100%;
  bottom: 33px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:after {
  content: '\003e';
  position: absolute;
  margin-left: 11px;
  -webkit-transition: 0.3s all ease;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:hover,
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:focus,
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:active {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.95);
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:hover:after,
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:focus:after,
.testimonials-desktop .wrp .swiper-slide-content .testimonial-detail-link:active:after {
  margin-left: 18px;
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-description {
  position: absolute;
  top: 490px;
  width: 100%;
  height: 80px;
  left: 0;
  padding: 0 15px;
  text-align: center;
}
@media (max-width: 480px) {
  .testimonials-desktop .wrp .swiper-slide-content .testimonial-description {
    top: 330px;
    padding: 0 15px;
    height: 160px;
  }
}
.testimonials-desktop .wrp .swiper-slide-content .testimonial-description .description-middle {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  height: 100%;
}
@media (max-width: 767px) {
  .testimonials-desktop .swiper-pagination {
    bottom: 18px;
  }
}
.testimonials-desktop .swiper-pagination .swiper-pagination-switch {
  border-color: #fff;
}
.testimonials-desktop .swiper-pagination .swiper-pagination-switch.swiper-active-switch {
  background: #fff;
}
.testimonials-desktop .swiper-next,
.testimonials-desktop .swiper-prev {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAtCAQAAAAE9YPjAAAA90lEQVR4AaXVJaCQMRgFUNxJSMHdE5ZwGtJwibh7JFFwKTgkLOJQsIa7Q8Fdntt5Pd3wL5/5dr8GjvhrfYPclKDS9Aw3gV+GJdjMcfBE50TbugXOaZFoH+/BtrzSiUrBokyXgf/GZboLvNE7wZYuguvaJNrNE3BEk0RH+g025JXOUoVqUzPdDL4akmAjJ8F9HRNt7w44o1miA30EW/JKJysF8zNdDf4YnekB8FqXBFu7Ci5rlS/1OdiXp18ISoqPmNeYd53PscjNGOhTvuv8evJ7zC88/5n8C4v/65wUOXtymuV8zIlbPMNzVUh1pkDlOuK/dQ1iqwegk4QPRZMP+QAAAABJRU5ErkJggg==");
}
.calculator-wcl-new .calculator-doodle .doodle {
  position: relative;
}
.calculator-wcl-new .calculator-doodle .doodle.talking-calculator {
  display: block;
  margin: auto;
  top: -20px;
  position: relative;
}
.calculator-wcl-new .vac {
  text-align: center;
  margin-bottom: 15px;
}
.calculator-wcl-new .vac a {
  background: url('../img/vas-bag-grey.png') left center no-repeat;
  padding-left: 60px;
  font-weight: bold;
}
.calculator-wcl-new .loan-list {
  margin-top: 0;
  text-align: center;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .calculator-wcl-new .loan-list {
    margin-bottom: 30px;
  }
}
.wcl-wcl1 .calculator-wcl-new .calculator-doodle .doodle.talking-calculator {
  display: none;
}
.long-requirement {
  background: url('../img/about-us/blue-pattern.jpg') center;
}
.long-requirement h2 {
  text-align: center;
  font-weight: bold;
}
.long-requirement p {
  margin-top: 20px;
  text-align: center;
  font-size: 15px;
  font-weight: 700;
  font-style: italic;
}
.long-requirement p span {
  color: #ff0000;
  display: block;
}
.long-requirement img {
  max-width: 200px;
  display: block;
  margin: auto;
}
@media (max-width: 767px) {
  .long-requirement img {
    width: 117%;
    text-align: center;
  }
}
.long-requirement .conditions {
  margin-top: 10%;
  list-style: none;
}
.long-requirement .conditions li {
  font-size: 15px;
  font-weight: bold;
}
.long-requirement .conditions li:before {
  content: '';
  position: absolute;
  width: 18.5px;
  height: 18.5px;
  background: url('../img/list-style-checked.png') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  left: 22px;
}
.long-requirement .conditions li + li {
  margin-top: 15px;
}
.impatient-people {
  background: url('../img/about-us/white-pattern.jpg') center;
}
.impatient-people h2 {
  text-align: center;
  font-weight: bold;
}
.impatient-people p {
  margin-top: 20px;
  text-align: center;
  font-size: 15px;
  font-weight: 700;
  font-style: italic;
}
.impatient-people p span {
  color: #ff0000;
}
.impatient-people .simple-steps {
  margin-top: 10%;
  list-style: none;
}
.impatient-people .simple-steps li {
  font-size: 15px;
  font-weight: bold;
}
.impatient-people .simple-steps li:not(:last-child):after {
  content: '';
  position: absolute;
  left: 28px;
  width: 8.5px;
  height: 36px;
  margin-top: 8px;
  background: url('../img/arrow-list-down.png') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
.impatient-people .simple-steps li:before {
  content: '1';
  color: #fff;
  text-align: center;
  position: absolute;
  line-height: 20px;
  border-radius: 100%;
  width: 20px;
  height: 20px;
  background-color: #ff1b1b;
  left: 22px;
}
.impatient-people .simple-steps li:nth-child(2):before {
  content: '2';
}
.impatient-people .simple-steps li:last-child:before {
  content: '';
  position: absolute;
  width: 18.5px;
  height: 18.5px;
  background: url('../img/list-style-checked.png') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  left: 22px;
}
.impatient-people .simple-steps li:last-child {
  color: #ff1b1b;
}
.impatient-people .simple-steps li + li {
  margin-top: 25px;
}
.loans-wrapper .fifteen-days-guarantee-box-visible {
  zoom: 1 !important;
  filter: alpha(opacity=100) !important;
  -webkit-opacity: 1 !important;
  -moz-opacity: 1 !important;
  opacity: 1 !important;
  z-index: 1 !important;
  visibility: visible !important;
}
.loans-wrapper .nav-tag {
  cursor: pointer;
}
.loans-wrapper .fifteen-days-guarantee-box {
  position: absolute;
  left: 50%;
  z-index: -1;
  zoom: 1;
  filter: alpha(opacity=0);
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
  top: 100px;
}
.loans-wrapper .fifteen-days-guarantee-box .triangle {
  position: relative;
  left: -50%;
  top: 4px;
  z-index: 1;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content {
  position: relative;
  border: 3px #5c5c5c solid;
  left: -50%;
  width: 891px;
  background-color: rgba(173, 183, 190, 0.9);
  padding: 25px 30px 0 30px;
  -webkit-border-radius: 10px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 10px;
  -moz-background-clip: padding;
  border-radius: 10px;
  background-clip: padding-box;
  -webkit-box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  -moz-box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  font-size: 14px;
}
html.en .loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content {
  font-size: 12px;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .text {
  background-color: white;
  padding: 10px;
  border-radius: 15px;
  min-height: 100px;
  line-height: 1.3;
  display: table;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .text .center-text {
  display: table-cell;
  min-height: 100px;
  vertical-align: middle;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .bubbles .bubble {
  width: 20%;
  float: left;
  padding: 0 15px;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .faces {
  position: relative;
  top: -10px;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .faces > div {
  width: 20%;
  float: left;
  /** scaled because of the proportions of gif **/
  position: relative;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .faces > div img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .faces > div:after {
  content: "";
  position: absolute;
  top: 50%;
  right: -5px;
  display: inline-block;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 14px;
  height: 22px;
  background: url("/img/15-days/arrow.png");
  background-repeat: no-repeat;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-animation: arrow-move 0.5s linear infinite;
  -moz-animation: arrow-move 0.5s linear infinite;
  -o-animation: arrow-move 0.5s linear infinite;
  animation: arrow-move 0.5s linear infinite;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .faces > div:last-child:after {
  display: none;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .arrows {
  position: absolute;
  bottom: 70px;
  left: 215px;
}
.loans-wrapper .fifteen-days-guarantee-box .fifteen-days-guarantee-content .next-arrow {
  float: left;
  margin-right: 137px;
}
.carousel-visible {
  zoom: 1 !important;
  filter: alpha(opacity=100) !important;
  -webkit-opacity: 1 !important;
  -moz-opacity: 1 !important;
  opacity: 1 !important;
  z-index: 1 !important;
  visibility: visible !important;
}
.fifteen-days-guarantee-box-mobile {
  position: absolute;
  left: 50%;
  top: 85px;
  zoom: 1;
  filter: alpha(opacity=0);
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
  width: 90%;
}
@media (min-width: 767px) {
  .fifteen-days-guarantee-box-mobile {
    width: 50%;
  }
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content {
  -webkit-box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  -moz-box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  box-shadow: 1px -4px 1px 1px rgba(0, 0, 0, 0.4) inset;
  position: relative;
  border: 3px #000000 solid;
  left: -50%;
  background-color: rgba(173, 183, 190, 0.9);
  padding: 30px 0;
  -webkit-border-radius: 10px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 10px;
  -moz-background-clip: padding;
  border-radius: 10px;
  background-clip: padding-box;
  font-size: 14px;
}
@media (max-width: 767px) {
  .fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content {
    padding: 15px 0;
    font-size: 13px;
  }
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container {
  height: 340px;
}
@media (max-width: 767px) {
  .fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container {
    height: 300px;
  }
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper {
  background: none;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .text {
  background-color: white;
  padding: 10px;
  border-radius: 15px;
  min-height: 100px;
  line-height: 1.3;
  display: table;
  text-align: center;
  margin: auto;
  max-width: 300px;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .text .center-text {
  display: table-cell;
  min-height: 100px;
  vertical-align: middle;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .bubbles-margin {
  margin-left: -80px;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .face {
  margin-top: -10px;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .face img {
  max-width: 200px;
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
@media (max-width: 767px) {
  .fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-wrapper .face img {
    max-width: 150px;
  }
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-next,
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-prev {
  position: absolute;
  top: 50%;
  right: 15px;
  display: inline-block;
  width: 20px;
  height: 45px;
  background: url("/img/15-days/arrow.png");
  background-repeat: no-repeat;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-next:hover,
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-prev:hover {
  zoom: 1;
  filter: alpha(opacity=100);
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content .carousel-container .swiper-prev {
  left: 15px;
  right: auto;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
  background-position: bottom;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 13px 21px 13px;
  border-color: transparent transparent #000000 transparent;
  left: 50%;
  transform: translateX(-50%);
  top: -24px;
}
.fifteen-days-guarantee-box-mobile .fifteen-days-guarantee-content:after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12px 18px 12px;
  border-color: transparent transparent #B5BEC4 transparent;
  top: -18px;
  left: 50%;
  transform: translateX(-50%);
}
@-webkit-keyframes arrow-move {
  0% {
    right: -5px;
  }
  50% {
    right: -10px;
  }
  100% {
    right: -5px;
  }
}
@-moz-keyframes arrow-move {
  0% {
    right: -5px;
  }
  50% {
    right: -10px;
  }
  100% {
    right: -5px;
  }
}
@-ms-keyframes arrow-move {
  0% {
    right: -5px;
  }
  50% {
    right: -10px;
  }
  100% {
    right: -5px;
  }
}
@-o-keyframes arrow-move {
  0% {
    right: -5px;
  }
  50% {
    right: -10px;
  }
  100% {
    right: -5px;
  }
}
@keyframes arrow-move {
  0% {
    right: -5px;
  }
  50% {
    right: -10px;
  }
  100% {
    right: -5px;
  }
}
#oneTimeSurvey {
  z-index: 9999;
  padding-right: 0 !important;
  /*
	.ui-slider-wrapper.vertical {
		width: 4.5em;
	}

	.vertical .ui-slider-labels {
		top: 1px;
		bottom: 0;
		left: 0.7em;
	}

	.vertical .ui-slider-label-ticks {
		height: 1.2em;
		width: 0.8em;
		border-bottom: 1px solid #999;
	}

	.vertical .ui-slider-label-ticks span {
		position: relative;
		display: inline-block;
		margin-left: 1em;
		top: .6em;
	}
*/
}
#oneTimeSurvey h3 {
  font-size: 18px;
  font-weight: 600;
  margin-top: 20px;
  margin-bottom: 35px;
  text-align: center;
}
@media (max-width: 767px) {
  #oneTimeSurvey h3 {
    margin-bottom: 15px;
  }
}
#oneTimeSurvey textarea {
  width: 100%;
  height: 200px;
  background-color: #e1e1e1;
  border: 1px solid #000;
  padding: 10px;
}
#oneTimeSurvey textarea:-moz-placeholder {
  color: #7a7c7e;
  font-weight: 100;
}
#oneTimeSurvey textarea::-webkit-input-placeholder {
  color: #7a7c7e;
  font-weight: 100;
}
#oneTimeSurvey textarea:-ms-input-placeholder {
  color: #7a7c7e;
  font-weight: 100;
}
#oneTimeSurvey .btn {
  color: #fff;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
}
#oneTimeSurvey .btn.btn-not-finished {
  background-color: #ff1f1f;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 0px 2px 0px 0px #7f0b0b;
  -moz-box-shadow: 0px 2px 0px 0px #7f0b0b;
  box-shadow: 0px 2px 0px 0px #7f0b0b;
}
#oneTimeSurvey .btn.btn-not-finished:hover,
#oneTimeSurvey .btn.btn-not-finished:focus {
  background-color: #eb0000;
}
#oneTimeSurvey .btn.btn-not-finished:active {
  background-color: #d20000;
}
#oneTimeSurvey .btn.btn-refuse {
  background-color: #87898b;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 0px 2px 0px 0px #4a4d4f;
  -moz-box-shadow: 0px 2px 0px 0px #4a4d4f;
  box-shadow: 0px 2px 0px 0px #4a4d4f;
}
#oneTimeSurvey .btn.btn-refuse:hover,
#oneTimeSurvey .btn.btn-refuse:focus {
  background-color: #6e7071;
}
#oneTimeSurvey .btn.btn-refuse:active {
  background-color: #616364;
}
#oneTimeSurvey .btn.btn-continue {
  background-color: #3eba99;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 0px 2px 0px 0px #398975;
  -moz-box-shadow: 0px 2px 0px 0px #398975;
  box-shadow: 0px 2px 0px 0px #398975;
}
#oneTimeSurvey .btn.btn-continue:hover,
#oneTimeSurvey .btn.btn-continue:focus {
  background-color: #31947a;
}
#oneTimeSurvey .btn.btn-continue:active {
  background-color: #2b816a;
}
#oneTimeSurvey .btn.btn-submit {
  background-color: #52b847;
  border-bottom: 2px solid #407934;
  height: 36px;
  width: 300px;
}
#oneTimeSurvey .btn.btn-submit:hover,
#oneTimeSurvey .btn.btn-submit:focus {
  background-color: #429339;
}
#oneTimeSurvey .btn.btn-submit:active {
  background-color: #398132;
}
@media (max-width: 767px) {
  #oneTimeSurvey .btn.btn-submit {
    width: 100%;
  }
}
#oneTimeSurvey .button-group {
  min-height: 100px;
}
#oneTimeSurvey .button-group > div {
  padding: 0 10px;
}
#oneTimeSurvey .button-group > div:first-of-type {
  padding-left: 20px;
}
#oneTimeSurvey .button-group > div:last-of-type {
  padding-right: 20px;
}
@media (max-width: 767px) {
  #oneTimeSurvey .button-group > div {
    margin: 15px 0;
    padding: 0 20px;
  }
}
#oneTimeSurvey .button-group .btn {
  font-size: 15px !important;
  line-height: 15px !important;
  font-weight: normal;
  height: 69px;
}
#oneTimeSurvey .button-group .btn span {
  display: inline-block;
  vertical-align: middle;
}
#oneTimeSurvey .modal-backdrop {
  filter: alpha(opacity=80);
  opacity: .8;
  position: fixed;
  height: 100% !important;
}
@media (min-width: 768px) {
  #oneTimeSurvey .modal-dialog {
    width: 770px;
  }
}
#oneTimeSurvey .modal-content {
  border: 3px solid #940d0d;
  border-radius: 10px;
  box-shadow: none;
}
#oneTimeSurvey .modal-body {
  border-bottom: 3px solid #898b8e;
  border-radius: 6px;
}
#oneTimeSurvey .close {
  display: block;
  position: absolute;
  top: -13px;
  right: -13px;
  width: 29px;
  height: 30px;
  z-index: 10;
  opacity: 1;
  background-image: url('/img/icon-close.png');
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx) {
  #oneTimeSurvey .close {
    background-image: url("/img/icon-close@2x.png");
    background-size: 29px 30px;
  }
}
#oneTimeSurvey .comment {
  padding: 20px 50px;
}
#oneTimeSurvey .slider-container {
  padding: 0 65px;
}
#oneTimeSurvey .like-not {
  color: #77797c;
  font-size: 14px;
}
#oneTimeSurvey .like-lot {
  color: #ed1c24;
  font-size: 14px;
  font-weight: bold;
}
#oneTimeSurvey .thank-you img {
  margin-top: 30px;
  width: 245px;
  height: 151px;
}
#oneTimeSurvey .thank-you .thank-you-message {
  color: #231f20;
  margin-top: 36px;
  margin-bottom: 40px;
  font-size: 26px;
  line-height: 26px;
  max-width: 280px;
  margin-left: auto;
  margin-right: auto;
}
#oneTimeSurvey .thank-you .thank-you-message strong {
  color: #ed1c24;
}
#oneTimeSurvey #oneTimeSurveySliderMobile {
  margin-top: 30px;
  position: relative;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .actual-value {
  border-top: 1px solid #b7b7b7;
  font-size: 50px;
  line-height: 50px;
  text-align: center;
  font-weight: bold;
  margin-top: 30px;
  padding-top: 20px;
  padding-bottom: 30px;
  width: 180px;
  margin-left: auto;
  margin-right: auto;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth {
  margin: 0 auto;
  background-size: contain;
  background-repeat: no-repeat;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="0"] {
  width: 75px;
  height: 45px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="1"] {
  width: 71px;
  height: 59px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="2"] {
  width: 76px;
  height: 66px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="3"] {
  width: 85px;
  height: 73px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="4"] {
  width: 96px;
  height: 82px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="5"] {
  width: 114px;
  height: 98px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="6"] {
  width: 130px;
  height: 112px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="7"] {
  width: 159px;
  height: 136px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="8"] {
  width: 175px;
  height: 150px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="9"] {
  width: 198px;
  height: 170px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .hearth[data-hearth="10"] {
  width: 207px;
  height: 178px;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .prev,
#oneTimeSurvey #oneTimeSurveySliderMobile .next {
  position: absolute;
  bottom: 75px;
  display: inline-block;
  width: 33px;
  height: 51px;
  background-image: url("data:image/png;base64,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");
  cursor: pointer;
  background-size: contain;
  background-repeat: no-repeat;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:hover,
#oneTimeSurvey #oneTimeSurveySliderMobile .next:hover,
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:active,
#oneTimeSurvey #oneTimeSurveySliderMobile .next:active,
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:focus,
#oneTimeSurvey #oneTimeSurveySliderMobile .next:focus {
  -webkit-transform: scale(1.12);
  -moz-transform: scale(1.12);
  -o-transform: scale(1.12);
  -ms-transform: scale(1.12);
  transform: scale(1.12);
}
#oneTimeSurvey #oneTimeSurveySliderMobile .prev {
  left: 0;
  -webkit-transform: scaleX(-1);
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  -ms-transform: scaleX(-1);
  transform: scaleX(-1);
}
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:hover,
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:active,
#oneTimeSurvey #oneTimeSurveySliderMobile .prev:focus {
  -webkit-transform: scale3d(-1.12, 1.12, 1.12);
  -moz-transform: scale3d(-1.12, 1.12, 1.12);
  -o-transform: scale3d(-1.12, 1.12, 1.12);
  -ms-transform: scale3d(-1.12, 1.12, 1.12);
  transform: scale3d(-1.12, 1.12, 1.12);
}
#oneTimeSurvey #oneTimeSurveySliderMobile .next {
  right: 0;
}
#oneTimeSurvey #oneTimeSurveySlider {
  background-color: #c8c9cc;
  cursor: pointer;
  margin-top: 50px;
}
#oneTimeSurvey #oneTimeSurveySlider:after {
  content: '';
  display: block;
  width: 100%;
  height: 1px;
  position: absolute;
  bottom: 0;
  z-index: 1;
  background-color: rgba(0, 0, 0, 0.35);
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle {
  height: 30px;
  width: 30px;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  margin-left: 0;
  cursor: pointer;
  background-size: contain;
  background-repeat: no-repeat;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="0"] {
  width: 33px;
  height: 20px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="1"] {
  width: 31px;
  height: 26px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="2"] {
  width: 33px;
  height: 29px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="3"] {
  width: 37px;
  height: 32px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="4"] {
  width: 42px;
  height: 36px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="5"] {
  width: 50px;
  height: 43px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="6"] {
  width: 57px;
  height: 49px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="7"] {
  width: 69px;
  height: 59px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="8"] {
  width: 76px;
  height: 65px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="9"] {
  width: 86px;
  height: 74px;
}
#oneTimeSurvey #oneTimeSurveySlider .ui-slider-handle[data-hearth="10"] {
  width: 90px;
  height: 78px;
}
#oneTimeSurvey .ui-slider-wrapper {
  position: relative;
}
#oneTimeSurvey .ui-slider-wrapper .ui-slider-horizontal {
  width: 100%;
}
#oneTimeSurvey .ui-slider-wrapper .ui-slider-horizontal .ui-slider-range {
  background-color: #ec1c23;
}
#oneTimeSurvey .ui-slider-wrapper.horizontal {
  height: 4.5em;
}
#oneTimeSurvey .ui-slider-labels {
  position: absolute;
  border: 1px solid transparent;
}
#oneTimeSurvey .ui-slider-label-ticks {
  border: 1px solid transparent;
  position: absolute;
  white-space: nowrap;
}
#oneTimeSurvey .ui-slider-label-ticks span {
  font-size: 0.9em;
  min-width: 1.2em;
}
#oneTimeSurvey .horizontal .ui-slider-labels {
  left: 0;
  right: 0;
  top: 30px;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks {
  width: 1.2em;
  height: .8em;
  text-align: center;
  border-left: 1px solid #999;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks span {
  position: relative;
  display: inline-block;
  margin-left: -1.2em;
  top: 15px;
  font-weight: bold;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(1) {
  color: #77797b;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(2) {
  color: #1f1c03;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(3) {
  color: #34331a;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(4) {
  color: #5d5a39;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(5) {
  color: #9f9a58;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(6) {
  color: #ffc40d;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(7) {
  color: #fcb94f;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(8) {
  color: #f7921e;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(9) {
  color: #f05a23;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(10) {
  color: #ef4825;
}
#oneTimeSurvey .horizontal .ui-slider-label-ticks:nth-of-type(11) {
  color: #ec1c23;
}
#oneTimeSurvey [data-hearth="0"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="1"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="2"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="3"] {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAACSCAMAAADigaFwAAABI1BMVEUAAABdWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjldWjn///95d1xgXTz9/f3p6eSJh29xblFjYED7+/rx8e7DwrW9vK739/XZ2NDR0MfGxLmmpZOdm4ePjHbc29TNzMKfnopua03s7Ojj493g39nIx7y4t6iioY6Yl4GSkHqEgml+fGF1c1ZlYkLV1MuzsqKrqZi/vrGtrJuVk31pZke6B1zzAAAANnRSTlMA/gIF81gM7glSQ63659ueXkwRvfXUycKYNtCOf24H4aaJeHMwKBfLxsWEOiwiGrex96OTZiBXVRrAAAAGH0lEQVR42tTY+VbaQBQG8Dvsggt62D0IWtuDerrYer7LLouyuO97re//FJWCGCCTTKh/JL8HCDM3Xz4yIUXu9fBmdmPeL/DKMx8LLe9s+cgy39bOcig278Er4Z/fyG6G1930cVaCq7lZTBLRhHeJlC15E1GBSbO51eAKfQCfNxSBnIinv5GCb+m4gFwk5PXR/0kueGBGfJ9xm6Rn5ruAGc9CkqbmmslBTSZtMBNfOgM1uRnXlAuNQp3/U4B0BT75oS46zWKTMViT8bp09uvNwJqY1RgsLWBM4R5m4p9pzOc49FSrMLCwRBYszuHdXaexd1Jk5ubpeTsPA9trrpGRrm1jlMhf1g9qvWvVzuqdCvTNLZKqQAJD+ccSjzi9rEIu/k3TT3GMumnUeMTBVQG6EgFS8jWFAdHd40m1KwEpf5AGgn5oFTqnPKlUhq7UVzKl/YmbA9Z3XoWUSNM/aQGt6xLreyzItmwqPIu++98s9VCF3C8XkesXtI73WaoloGc2TCbSw5CW2EALBrJudxZa5RobeIK+NBlaG169yYa6MPDjB7Q6RTZSvIO+NaWZdnfZ2BmUXbKJFqzPNYyB2102k4eiP2xm9x4S0rwGZ9H3csKmLqEmv8umypCYDUr61I+BczZ3ASXijM0dQcav26+B1LBPWUEdSjqsoA2pVIAmJfBmnz9sqqLESlOVS9CExfe+LqpdXkWZVdzAwCKNWZpTuGfWG+CCteQNYGBuSXr70WAFJSjZYwWHANQjkMS7Q+YP6yqlqJZhLEkarhxg6ak6qULJCZvbg4mci97NQKPF5rpQc6aQVPPUz2iGGoVGm001oOj3h1RJ1KU/VNyxmf0CFHXVdq0+1g2MeGBjD1WoKpiFta606w3t4691W2QJyXFl+veqRwElSW2nqqZ1ty0gYTmtzWtISLrV58G4R5Y5yMOaQkte/RWo8viox4tJV03WU7oSsEo8F/U3XYYFXuoJQcdxvTjZ1dcFTCO/z+OKh2UBK0L0aiUCXZXnU21EH9oVTC1/UdJG9PDoBRZFVogoCKnjbvuift5qPF/dFvCfKtdPjfphvfH0505gCkEiWoUjrBJRHI4QJ3JvQ+Pl9iZfgB1tu2kdQ4XOGb+qPdlysesUxpu7Ux5owYbCtImBSk17cLKfTfqJAW1PX8N+fg5fAI+Z7T3VDZpH3+3IaceG5smPvvsmv6lVYEN+Ehg44oEDW64UgjBU3isyN/e7AvZE0KhWjm3Z/n0Ex3DSUj1wCA9l4BAZisEhYhSCQ4RoGQ6xTDtwiB3agkNskc+u/6NjhI8oBUdIEVECjpAgIi8cwUtEX+AIX4gcEtYUkVM+Wq1STxAOEKQedwS2F3FTjxPeWEL0yhl15aW+gO1PAp4ADWRhc1l6swibW6Q3K3+rsd/dRIEoCuDHARGVPwKKsRK3qwJJa2vTxvP+j7aJye6qhYoywPX3BPPhzM29Z0DRBiv8Jf0UWOK/lKKlOBFRsAinhhRsiFOGS7FcA2c2FGuDc5bYeTWwcCGhUAkuhUIXATPEKcnHwG98F4pM6yDE0QMMgQ2K2AJb4V82Ck0ozgTFVE5hcoUSC2GtYG+BUl8U5QvlLFFbi2uhiMQ7u48S4uqLMX6WiYmAm6GYvEM7wFU+RfBxneVRAM9CBTsBJeZ0hwtid4EJjh4grj6qsnN2KrdR2bvLDrnvuMFiys5MF/hG6DLQx43W7MgaFXXeuS5xO/XMDjwr3MHYs3WRgbvYEVsW2cBjvDWycTcrZotiCzWEc7ZmHqIWe8+W7G3UZIzZirGB2pTPFvgKGqiEjUsU9Jg4bJQzgTYjkw0yR9Ao9dgYL4VWYcSGRCE0U0s2YqmgX9+kdmYfjUhn1GyWoiHWJ7X6tHBKbgjMPhr1FlOT+A0NMxKHGjiJgeZtZ6xttkUrVi8Oa3FeVmjLNmcN+RYtMjZT3mm6MdCuw5h3+TigfYHHm3kBOrFam7yJuV6hK5nfY2U9P0OXdh+VQ7pD117nrGD+CgmCGa+YBRBCDZ/4g6ehghwqiFkiDiQ99GgUsUA0gkQ73+EZx+/+15fJEpf/uEkGyYxhxKNoaEC8Q+J5yQHa/QFibkTRy35I9wAAAABJRU5ErkJggg==");
}
#oneTimeSurvey [data-hearth="4"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="5"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="6"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="7"] {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAAEQCAMAAAAeQOhEAAABI1BMVEUAAAD3kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh73kh7////3lCL+7Nf+9+75pkb4oj/3lyj//vz/+vT+8uT4njb4mSz96ND93bn81aj5sl/5rVX//Pn95cn80Z/5qk/94sP7zpn7xIT+8N/6vHT4oDv82a/7x4v4mzD6t2r6tGT+9Oj937382rP7ypL6wHz5r1k43xOwAAAAOnRSTlMAsgL78fcLz0DJSCTjOE4aB5Ki6YNnVCkQ39WdFu3EvQXat4gJ9K2nfQMha2JeLR1zlnkyblhEwI3940E7lwAAC+RJREFUeNrs3PdWGlEQBvABVkEFRU1QFCMEY0w9qZ6cb+hNehPFru//FOltC+zeexf9Y39PMOebM8wdUUmxzY+xd6vPny7ENS0AAM+0ndQT33b68eJSlGYkurT4OL3te5La0Z4BQEDT4gtPn6++i33cpIdqPvJ49YmGCeK+R7ENP7nIvxF75ItjAu3J6uPIPD0sidiXhQBs2Xn6IbRHLtgLfXi6A1sCC19iCXoYkqF0EM7M+V69JKVevvLNwZlgOpSkexZdXtMgJJV+S4q8TacgRFtbjtK98R+uaZCQOlgiaUsHKUjQ1g79dB9WDuKQthuTan80tgtp8YMVmrWILwAl1tPCxa+k16FEYD9CM5SMLUCdwPYGCdjYDkCdhViSZiP5OgXFfB/JoY8+KJZ6PYsA/Z9TcMH+BjmwsQ8XpD77yWWHW3DJ2grZtLIGl2yFyE1LPrjn2Yc9smHvwzO4x7dEbtlLB+Cq+DJNtRyHqwLpPXJFKIWJatXCyclZBjL2E1Pmdh/2ZH5UUxOpJhUi9Ta3YaVwfnN9dMm/5LJXg/MCBO28oQne7GCaTH40qGdzf6up31xU4cz2JikWCsNUfnhVZhOVxnkGQnwJspDwYbJMb9xps4njbtNRNeEQqZRMw0yve8nWyo0eRKwf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");
}
#oneTimeSurvey [data-hearth="8"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="9"] {
  background-image: url("data:image/png;base64,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");
}
#oneTimeSurvey [data-hearth="10"] {
  background-image: url("data:image/png;base64,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");
}
