document.addEventListener("DOMContentLoaded", () => {
 const button = document.querySelector(".js-button");
 const menu = document.querySelector(".js-menu");
 const overlay = document.querySelector(".js-overlay");
 const list = document.querySelector(".js-items");
 const menuText = document.querySelector(".menu p"); // MENUテキスト取得

 let isMenuOpen = false; // メニューの状態を表す変数

 const toggleMenu = () => {
  isMenuOpen = !isMenuOpen; // メニューの状態を反転

  // クラスのトグル操作
  button.classList.toggle("is-active", isMenuOpen);
  menu.classList.toggle("is-active", isMenuOpen);
  overlay.classList.toggle("is-active", isMenuOpen);
  list.classList.toggle("is-active", isMenuOpen);

  button.classList.toggle("close", isMenuOpen);//追加

  // 属性操作　→読み上げるう機能つける時に使う。
  button.setAttribute("aria-expanded", isMenuOpen.toString());
  button.setAttribute("aria-label", isMenuOpen ? "メニューを閉じる" : "メニューを開く");
  list.setAttribute("aria-hidden", (!isMenuOpen).toString());

  menuText.textContent = isMenuOpen ? "CLOSE" : "MENU";  // テキストを切り替え
  // document.body.style.overflow = isMenuOpen ? "hidden" : "";
  // スクロール防止
  document.body.style.overflow = isMenuOpen ? "hidden" : "";
 };

 // キーボードでメニューを閉じる。キーバインド。
 const handleKeydown = (e) => {
  if (e.key === "Escape" && isMenuOpen) {
   toggleMenu();
   // Escキーでハンバーガーの「×」を二本線に戻す
   button.classList.toggle("close", false);//追加
  }
 };

 if (button) {
  button.addEventListener("click", toggleMenu);
 }
 document.addEventListener("keydown", handleKeydown);
});