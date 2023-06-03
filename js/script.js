'use strict';

const swiper = new Swiper('.swiper', {
	loop: true,
	effect: "fade", //フェードのエフェクト
	slidesPerView: 1,
	autoplay: {
		delay: 5000, //４秒後に次の画像へ
		disableOnInteraction: false //ユーザー操作後に自動再生を再開する
	},

	speed: 3000, //2秒かけながら次の画像へ移動
	allowTouchMove: false, //マウスでのスワイプを禁止

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},

});

jQuery('.slider').slick({
	autoplay: true,//自動的に動き出すか。初期値はfalse。
	infinite: true,//スライドをループさせるかどうか。初期値はtrue。
	speed: 500,//スライドのスピード。初期値は300。
	slidesToShow: 1,//スライドを画面に1枚見せる
	slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
	prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
	nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
	centerMode: true,//要素を中央ぞろえにする
	variableWidth: true,//幅の違う画像の高さを揃えて表示
	dots: true,//下部ドットナビゲーションの表示
	pauseOnFocus: true,
	focusOnSelect: true,
});

jQuery('.drawer-icon').on('click', function(e) {
	e.preventDefault();

	jQuery('.drawer-icon').toggleClass('is-open');
	jQuery('.drawer-content').toggleClass('is-open');
	jQuery('.drawer-background').toggleClass('is-open');

	return false();
});


// Q&Aセクション、アコーディオンメニューの実装
jQuery('.qa-box__q').on('click', function() {
	jQuery(this).next().slideToggle();
	jQuery(this).children('.qa-box__icon').toggleClass('is-active');
});


// スクロールアニメーション
// トップページaboutセクション
let fadeInTarget1 = document.querySelectorAll('.about');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget1.length; i++){
		const rect = fadeInTarget1[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight; // 現在のブラウザの高さ
		if (scroll > offset - windowHeight + 150) {
			fadeInTarget1[i].classList.add('scroll-in-left');
		}
	}
});
// トップページfeatureセクション
let fadeInTarget2 = document.querySelectorAll('.feature');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget2.length; i++){
		const rect = fadeInTarget2[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight; // 現在のブラウザの高さ
		if (scroll > offset - windowHeight + 150) {
			fadeInTarget2[i].classList.add('scroll-in');
		}
	}
});
// トップページs-pセクション
let fadeInTarget3 = document.querySelectorAll('.s-p');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget3.length; i++){
		const rect = fadeInTarget3[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight; // 現在のブラウザの高さ
		if (scroll > offset - windowHeight + 150) {
			fadeInTarget3[i].classList.add('scroll-in-right');
		}
	}
});
// トップページstaffセクション
let fadeInTarget4 = document.querySelectorAll('.staff');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget4.length; i++){
		const rect = fadeInTarget4[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight; // 現在のブラウザの高さ
		if (scroll > offset - windowHeight + 150) {
			fadeInTarget4[i].classList.add('scroll-in');
		}
	}
});
// contact__btn
let fadeInTarget5 = document.querySelectorAll('.contact__btn');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget5.length; i++){
		const rect = fadeInTarget5[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight; // 現在のブラウザの高さ
		if (scroll > offset - windowHeight + 150) {
			fadeInTarget5[i].classList.add('scroll-in');
		}
	}
});

jQuery("body").bind
("contextmenu", function(e)
 {return false;}
);