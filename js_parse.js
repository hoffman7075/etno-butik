// получаем на странице etno-butik через консоль
var arLinks = [];
$(".box").each(function() {
  var links = $(this).find("a").attr("href").split("/");
  var last = links.length - 2;
  arLinks.push(links[last]);
});
console.log(arLinks);

// console.log(arLinks); - копируем объект и вставляем ниже

// импортируем
var arr = [
  "kinzhal-unczukul-2",
  "kinzhal-yatagan-unczukul",
  "derevyannaya-vaza-unczukul",
  "derevyannaya-karandashnicza",
  "derevyannaya-tarelka-dlya-suxofruktov",
  "trost-s-sekretom",
  "suvenir-derbent",
  "derevyannaya-shkatulka",
  "podsvechnik-iz-dereva",
  "podsvechnik-iz-dereva-2",
  "karandashnicza-na-nozhke",
  "karandashnicza-iz-dereva",
  "ruchka-na-podstavke",
  "derevyannaya-vaza-rossiya",
  "derevyannaya-vaza-2",
  "derevyannaya-vaza-3",
  "trost-s-krugloj-ruchkoj",
  "trost",
  "rozhok-dlya-obuvi",
  "nozh-strepet-unczukul",
  "derevyannyij-nabor-dlya-vodyi",
  "derevyannaya-tarelka-dlya-fruktov",
  "derevyannaya-tarelka-dlya-fruktov-2",
  "derevyannaya-tarelka-dlya-fruktov-glubokaya",
  "podsvechnik-iz-dereva-3",
  "chesnochnicza-iz-dereva",
  "chesnochnicza-na-nozhke-iz-dereva",
  "shkatulka-iz-dereva",
  "shkatulka-iz-dereva-dikaya-grusha",
  "kofetnicza-unczukul",
  "konfetnicza-iz-dereva-unczukul",
  "konfetnicza-3-x-yarusnaya-unczukul",
  "kubok-unczukul",
  "tarelka-dlya-fruktov-unczukul",
  "gerb-rossii-na-stenu-unczukul",
  "konfetnicza-unczukul",
  "vaza-malaya-unczukul",
  "lozhka-dlya-obuvi-unczukul",
  "yajczo-faberzhe-iz-dereva",
];

var items = document.querySelectorAll("[type='text'][name*='[CODE]']");
for (i = 0; i < items.length; i++) {
  items[i].value = arr[i];
}
